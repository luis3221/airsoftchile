@csrf

@if ($evento->exists)
  @method('PUT')
@endif

<div class="grid grid-cols-1 sm:grid-cols-2 gap-md">

  <div class="sm:col-span-2">
    <label for="nombre" class="block text-sm font-medium text-on-surface-variant mb-1">Nombre del evento</label>
    <input id="nombre" name="nombre" type="text" value="{{ old('nombre', $evento->nombre) }}"
      class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0"
      placeholder="Ej: Operación Cóndor" />
    @error('nombre')
      <p class="text-xs text-danger mt-1">{{ $message }}</p>
    @enderror
  </div>

  <div>
    <label for="region" class="block text-sm font-medium text-on-surface-variant mb-1">Región</label>
    <select id="region" name="region"
      class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0">
      <option value="" disabled {{ old('region', $evento->region) ? '' : 'selected' }}>Selecciona una región</option>
      @foreach ($regiones as $region)
        <option value="{{ $region }}" @selected(old('region', $evento->region) === $region)>{{ $region }}</option>
      @endforeach
    </select>
    @error('region')
      <p class="text-xs text-danger mt-1">{{ $message }}</p>
    @enderror
  </div>

  <div>
    <label for="categoria" class="block text-sm font-medium text-on-surface-variant mb-1">Tipo de juego</label>
    <select id="categoria" name="categoria"
      class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0">
      <option value="" disabled {{ old('categoria', $evento->categoria) ? '' : 'selected' }}>Selecciona un tipo</option>
      @foreach ($categorias as $categoria)
        <option value="{{ $categoria }}" @selected(old('categoria', $evento->categoria) === $categoria)>{{ $categoria }}</option>
      @endforeach
    </select>
    @error('categoria')
      <p class="text-xs text-danger mt-1">{{ $message }}</p>
    @enderror
  </div>

  <div class="sm:col-span-2">
    <label for="lugar" class="block text-sm font-medium text-on-surface-variant mb-1">Lugar / ubicación</label>
    <input id="lugar" name="lugar" type="text" value="{{ old('lugar', $evento->lugar) }}"
      class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0"
      placeholder="Ej: Cajón del Maipo, RM" />
    @error('lugar')
      <p class="text-xs text-danger mt-1">{{ $message }}</p>
    @enderror
  </div>

  <div>
    <label for="fecha" class="block text-sm font-medium text-on-surface-variant mb-1">Fecha</label>
    <input id="fecha" name="fecha" type="date"
      value="{{ old('fecha', optional($evento->fecha)->format('Y-m-d')) }}"
      class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0" />
    @error('fecha')
      <p class="text-xs text-danger mt-1">{{ $message }}</p>
    @enderror
  </div>

  <div>
    <label for="hora" class="block text-sm font-medium text-on-surface-variant mb-1">Hora (opcional)</label>
    <input id="hora" name="hora" type="time"
      value="{{ old('hora', $evento->hora ? \Illuminate\Support\Carbon::parse($evento->hora)->format('H:i') : '') }}"
      class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0" />
    @error('hora')
      <p class="text-xs text-danger mt-1">{{ $message }}</p>
    @enderror
  </div>

  <div>
    <label for="tarifa" class="block text-sm font-medium text-on-surface-variant mb-1">Tarifa de entrada (CLP)</label>
    <input id="tarifa" name="tarifa" type="number" min="0" step="500" value="{{ old('tarifa', $evento->tarifa) }}"
      class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0"
      placeholder="10000" />
    @error('tarifa')
      <p class="text-xs text-danger mt-1">{{ $message }}</p>
    @enderror
  </div>

  <div>
    <label for="cupos" class="block text-sm font-medium text-on-surface-variant mb-1">Cupos disponibles</label>
    <input id="cupos" name="cupos" type="number" min="1" value="{{ old('cupos', $evento->cupos) }}"
      class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0"
      placeholder="50" />
    @error('cupos')
      <p class="text-xs text-danger mt-1">{{ $message }}</p>
    @enderror
  </div>

  <div class="sm:col-span-2">
    <label for="imagen" class="block text-sm font-medium text-on-surface-variant mb-1">URL del banner (opcional)</label>
    <input id="imagen" name="imagen" type="text" value="{{ old('imagen', $evento->imagen) }}"
      class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0"
      placeholder="https://…" />
    @error('imagen')
      <p class="text-xs text-danger mt-1">{{ $message }}</p>
    @enderror
  </div>

  <div class="sm:col-span-2">
    <label for="descripcion" class="block text-sm font-medium text-on-surface-variant mb-1">Descripción</label>
    <textarea id="descripcion" name="descripcion" rows="3"
      class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0"
      placeholder="Reglas, restricciones de equipo, briefing…">{{ old('descripcion', $evento->descripcion) }}</textarea>
    @error('descripcion')
      <p class="text-xs text-danger mt-1">{{ $message }}</p>
    @enderror
  </div>

  <div class="flex items-center gap-2 pt-2">
    <input id="inscripcion_abierta" name="inscripcion_abierta" type="checkbox" value="1"
      @checked(old('inscripcion_abierta', $evento->exists ? $evento->inscripcion_abierta : true)) class="rounded border-outline-variant bg-surface-container-high" />
    <label for="inscripcion_abierta" class="text-sm text-on-surface-variant">Inscripción abierta</label>
  </div>
</div>

<div class="flex justify-end gap-sm mt-lg pt-lg border-t border-outline-variant">
  <a href="{{ $evento->exists ? route('eventos.show', $evento) : route('eventos.index') }}"
    class="px-4 py-2.5 bg-surface-container-high border border-outline-variant text-on-surface text-sm font-medium rounded hover:border-primary transition-colors">
    Cancelar
  </a>
  <button type="submit"
    class="px-4 py-2.5 bg-accent text-on-accent text-sm font-medium rounded hover:brightness-110 transition-all">
    {{ $evento->exists ? 'Guardar cambios' : 'Publicar evento' }}
  </button>
</div>
