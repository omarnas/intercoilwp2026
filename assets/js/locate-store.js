/**
 * Intercoil — Locate a Store.
 *
 * The store rail (search + country filter) is plain DOM and works on its
 * own; the Google Map layers on top once the Maps API fires
 * `intercoilInitLocateMap`. Store data lives in the server-rendered cards
 * (data-* attributes) so there is a single source of truth.
 */
(function () {
  'use strict';

  var list = document.getElementById('locate-list');
  if (!list) {
    return;
  }

  var cards = Array.prototype.slice.call(list.querySelectorAll('.locate-card'));
  var searchInput = document.getElementById('locate-search');
  var filterButtons = Array.prototype.slice.call(document.querySelectorAll('.locate-filter'));
  var emptyNote = document.getElementById('locate-empty');
  var resultsStatus = document.getElementById('locate-results-status');
  var mapEl = document.getElementById('locate-map');
  var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  var activeRegion = 'all';
  var query = '';
  var map = null;
  var markers = [];
  var infoWindow = null;
  var activeIndex = -1;

  var PIN = {
    base: markerIcon('#001F8C', 34, 44),
    active: markerIcon('#00A0F3', 42, 54)
  };

  function markerIcon(fill, w, h) {
    var svg =
      '<svg xmlns="http://www.w3.org/2000/svg" width="' + w + '" height="' + h + '" viewBox="0 0 34 44">' +
      '<path d="M17 1C8.2 1 1 8.2 1 17c0 11.9 16 26 16 26s16-14.1 16-26C33 8.2 25.8 1 17 1z" fill="' + fill + '" stroke="#FFFFFF" stroke-width="1.5"/>' +
      '<circle cx="17" cy="17" r="5.5" fill="#FFFFFF"/></svg>';
    return {
      url: 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(svg),
      w: w,
      h: h
    };
  }

  function cardMatches(card) {
    var regionOk = activeRegion === 'all' || card.getAttribute('data-region') === activeRegion;
    if (!regionOk) {
      return false;
    }
    if (!query) {
      return true;
    }
    return card.textContent.toLowerCase().indexOf(query) !== -1;
  }

  function applyFilters() {
    var visible = 0;

    cards.forEach(function (card, i) {
      var show = cardMatches(card);
      card.classList.toggle('is-hidden', !show);
      if (show) {
        visible++;
      }
      if (markers[i]) {
        markers[i].setVisible(show);
      }
      if (!show && i === activeIndex) {
        clearActive();
      }
    });

    if (emptyNote) {
      emptyNote.hidden = visible > 0;
    }
    if (resultsStatus) {
      resultsStatus.textContent = visible + ' / ' + cards.length;
    }

    fitVisibleMarkers();
  }

  function fitVisibleMarkers() {
    if (!map) {
      return;
    }
    var bounds = new google.maps.LatLngBounds();
    var count = 0;
    markers.forEach(function (marker) {
      if (marker.getVisible()) {
        bounds.extend(marker.getPosition());
        count++;
      }
    });
    if (!count) {
      return;
    }
    if (count === 1) {
      map.panTo(bounds.getCenter());
      map.setZoom(14);
      return;
    }
    map.fitBounds(bounds, 56);
  }

  function clearActive() {
    if (activeIndex > -1) {
      if (cards[activeIndex]) {
        cards[activeIndex].classList.remove('is-active');
      }
      if (markers[activeIndex]) {
        markers[activeIndex].setIcon(iconFor(PIN.base));
        markers[activeIndex].setZIndex(1);
      }
    }
    activeIndex = -1;
    if (infoWindow) {
      infoWindow.close();
    }
  }

  function iconFor(pin) {
    return {
      url: pin.url,
      scaledSize: new google.maps.Size(pin.w, pin.h),
      anchor: new google.maps.Point(pin.w / 2, pin.h)
    };
  }

  function infoContent(card) {
    var name = card.querySelector('.locate-card__name');
    var address = card.querySelector('.locate-card__address');
    var meta = card.querySelector('.locate-card__meta');
    var directions = card.querySelector('.locate-card__action--directions');

    var wrap = document.createElement('div');
    wrap.className = 'locate-iw';

    var h = document.createElement('p');
    h.className = 'locate-iw__name';
    h.textContent = name ? name.textContent : '';
    wrap.appendChild(h);

    if (address) {
      var a = document.createElement('p');
      a.className = 'locate-iw__address';
      a.textContent = address.textContent;
      wrap.appendChild(a);
    }

    if (meta) {
      var m = document.createElement('p');
      m.className = 'locate-iw__meta';
      m.textContent = meta.textContent;
      wrap.appendChild(m);
    }

    var phoneDisplay = card.getAttribute('data-phone-display');
    if (phoneDisplay) {
      var p = document.createElement('p');
      p.className = 'locate-iw__phone';
      p.textContent = phoneDisplay;
      wrap.appendChild(p);
    }

    if (directions) {
      var link = document.createElement('a');
      link.className = 'locate-iw__link';
      link.href = directions.href;
      link.target = '_blank';
      link.rel = 'noopener noreferrer';
      link.textContent = directions.textContent.replace(/\s+/g, ' ').trim();
      wrap.appendChild(link);
    }

    return wrap;
  }

  function activate(index, opts) {
    opts = opts || {};
    if (index === activeIndex) {
      if (infoWindow && markers[index] && map) {
        infoWindow.setContent(infoContent(cards[index]));
        infoWindow.open({ map: map, anchor: markers[index], shouldFocus: false });
      }
      return;
    }
    clearActive();
    activeIndex = index;

    var card = cards[index];
    var marker = markers[index];

    card.classList.add('is-active');

    if (opts.scrollCard) {
      card.scrollIntoView({
        behavior: reducedMotion ? 'auto' : 'smooth',
        block: 'nearest'
      });
    }

    if (marker && map) {
      marker.setIcon(iconFor(PIN.active));
      marker.setZIndex(2);

      var pos = marker.getPosition();
      if (reducedMotion) {
        map.setCenter(pos);
      } else {
        map.panTo(pos);
      }
      if (map.getZoom() < 12) {
        map.setZoom(13);
      }

      if (infoWindow) {
        infoWindow.setContent(infoContent(card));
        infoWindow.open({ map: map, anchor: marker, shouldFocus: false });
      }
    }
  }

  /* ── Rail interactions (map-independent) ── */

  cards.forEach(function (card, i) {
    var main = card.querySelector('.locate-card__main');
    if (main) {
      main.addEventListener('click', function () {
        activate(i);
      });
    }
  });

  if (searchInput) {
    searchInput.addEventListener('input', function () {
      query = searchInput.value.trim().toLowerCase();
      applyFilters();
    });
  }

  filterButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      activeRegion = button.getAttribute('data-region') || 'all';
      filterButtons.forEach(function (other) {
        var isActive = other === button;
        other.classList.toggle('is-active', isActive);
        other.setAttribute('aria-pressed', isActive ? 'true' : 'false');
      });
      applyFilters();
    });
  });

  /* ── Google Maps ── */

  var MAP_STYLE = [
    { elementType: 'geometry', stylers: [{ color: '#f4f6fa' }] },
    { elementType: 'labels.text.fill', stylers: [{ color: '#46527a' }] },
    { elementType: 'labels.text.stroke', stylers: [{ color: '#ffffff' }] },
    { featureType: 'poi', stylers: [{ visibility: 'off' }] },
    { featureType: 'transit', stylers: [{ visibility: 'off' }] },
    { featureType: 'road', elementType: 'geometry', stylers: [{ color: '#ffffff' }] },
    { featureType: 'road', elementType: 'labels.icon', stylers: [{ visibility: 'off' }] },
    { featureType: 'road.highway', elementType: 'geometry', stylers: [{ color: '#e6ebf4' }] },
    { featureType: 'landscape.natural', stylers: [{ color: '#eef1f7' }] },
    { featureType: 'administrative', elementType: 'geometry.stroke', stylers: [{ color: '#c7d0e2' }] },
    { featureType: 'water', stylers: [{ color: '#c9ddf2' }] }
  ];

  window.intercoilInitLocateMap = function () {
    if (!mapEl || !window.google || !google.maps) {
      return;
    }

    map = new google.maps.Map(mapEl, {
      center: { lat: 25.2, lng: 55.3 },
      zoom: 5,
      styles: MAP_STYLE,
      mapTypeControl: false,
      streetViewControl: false,
      fullscreenControl: true,
      zoomControl: true,
      gestureHandling: 'cooperative',
      backgroundColor: '#f4f6fa'
    });

    infoWindow = new google.maps.InfoWindow({ maxWidth: 300 });
    infoWindow.addListener('closeclick', clearActive);

    markers = cards.map(function (card, i) {
      var marker = new google.maps.Marker({
        map: map,
        position: {
          lat: parseFloat(card.getAttribute('data-lat')),
          lng: parseFloat(card.getAttribute('data-lng'))
        },
        title: (card.querySelector('.locate-card__name') || {}).textContent || '',
        icon: iconFor(PIN.base)
      });

      marker.addListener('click', function () {
        activate(i, { scrollCard: true });
      });

      return marker;
    });

    applyFilters();
  };
})();
