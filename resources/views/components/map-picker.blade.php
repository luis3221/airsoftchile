@props(['lat' => null, 'lng' => null])

@once
  @push('estilos')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.css" />
  @endpush
  @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js"></script>
  @endpush
@endonce

<div class="sm:col-span-2">
  <label class="block text-sm font-medium text-on-surface-variant mb-1">Ubicación en el mapa</label>
  <div id="map-picker" class="h-56 w-full rounded border border-outline-variant overflow-hidden"></div>
  <p class="text-xs text-on-surface-variant mt-1.5">Haz clic en el mapa o arrastra el marcador para fijar la ubicación exacta.</p>

  <div class="grid grid-cols-2 gap-md mt-2">
    <div>
      <label for="lat" class="block text-xs text-on-surface-variant mb-1">Latitud</label>
      <input id="lat" name="lat" type="number" step="0.0000001" value="{{ old('lat', $lat) }}"
        class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2 px-3 focus:border-accent focus:ring-0" />
      @error('lat')
        <p class="text-xs text-danger mt-1">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label for="lng" class="block text-xs text-on-surface-variant mb-1">Longitud</label>
      <input id="lng" name="lng" type="number" step="0.0000001" value="{{ old('lng', $lng) }}"
        class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2 px-3 focus:border-accent focus:ring-0" />
      @error('lng')
        <p class="text-xs text-danger mt-1">{{ $message }}</p>
      @enderror
    </div>
  </div>
</div>

@push('scripts')
  <script>
    (function () {
      function initMapPicker() {
        const latInput = document.getElementById('lat');
        const lngInput = document.getElementById('lng');
        if (!latInput || !lngInput || !window.L) return;

        const hasValue = latInput.value !== '' && lngInput.value !== '';
        const initialLat = hasValue ? parseFloat(latInput.value) : -33.4489;
        const initialLng = hasValue ? parseFloat(lngInput.value) : -70.6693;

        const map = L.map('map-picker').setView([initialLat, initialLng], hasValue ? 13 : 5);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
          maxZoom: 19,
        }).addTo(map);

        let marker = hasValue ? L.marker([initialLat, initialLng], { draggable: true }) : null;
        if (marker) {
          marker.addTo(map);
          marker.on('dragend', () => {
            const pos = marker.getLatLng();
            latInput.value = pos.lat.toFixed(7);
            lngInput.value = pos.lng.toFixed(7);
          });
        }

        map.on('click', (e) => {
          latInput.value = e.latlng.lat.toFixed(7);
          lngInput.value = e.latlng.lng.toFixed(7);

          if (!marker) {
            marker = L.marker(e.latlng, { draggable: true }).addTo(map);
            marker.on('dragend', () => {
              const pos = marker.getLatLng();
              latInput.value = pos.lat.toFixed(7);
              lngInput.value = pos.lng.toFixed(7);
            });
          } else {
            marker.setLatLng(e.latlng);
          }
        });
      }

      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initMapPicker);
      } else {
        initMapPicker();
      }
    })();
  </script>
@endpush
