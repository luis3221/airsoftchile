@csrf

@if ($tienda->exists)
  @method('PUT')
@endif

<div class="grid grid-cols-1 sm:grid-cols-2 gap-md">

  <div class="sm:col-span-2">
    <label for="nombre" class="block text-sm font-medium text-on-surface-variant mb-1">Nombre de la tienda</label>
    <input id="nombre" name="nombre" type="text" value="{{ old('nombre', $tienda->nombre) }}"
      class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0"
      placeholder="Ej: Tactical Santiago" />
    @error('nombre')
      <p class="text-xs text-danger mt-1">{{ $message }}</p>
    @enderror
  </div>

  <div>
    <label for="region" class="block text-sm font-medium text-on-surface-variant mb-1">Región</label>
    <select id="region" name="region"
      class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0">
      <option value="" disabled {{ old('region', $tienda->region) ? '' : 'selected' }}>Selecciona una región</option>
      @foreach ($regiones as $region)
        <option value="{{ $region }}" @selected(old('region', $tienda->region) === $region)>{{ $region }}</option>
      @endforeach
    </select>
    @error('region')
      <p class="text-xs text-danger mt-1">{{ $message }}</p>
    @enderror
  </div>

  <div>
    <label for="categoria" class="block text-sm font-medium text-on-surface-variant mb-1">Categoría</label>
    <select id="categoria" name="categoria"
      class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0">
      <option value="" disabled {{ old('categoria', $tienda->categoria) ? '' : 'selected' }}>Selecciona una categoría</option>
      @foreach ($categorias as $categoria)
        <option value="{{ $categoria }}" @selected(old('categoria', $tienda->categoria) === $categoria)>{{ $categoria }}</option>
      @endforeach
    </select>
    @error('categoria')
      <p class="text-xs text-danger mt-1">{{ $message }}</p>
    @enderror
  </div>

  <div>
    <label for="direccion" class="block text-sm font-medium text-on-surface-variant mb-1">Dirección / comuna</label>
    <input id="direccion" name="direccion" type="text" value="{{ old('direccion', $tienda->direccion) }}"
      class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0"
      placeholder="Ej: Providencia, RM" />
    @error('direccion')
      <p class="text-xs text-danger mt-1">{{ $message }}</p>
    @enderror
  </div>

  <div>
    <label for="telefono" class="block text-sm font-medium text-on-surface-variant mb-1">Teléfono de contacto</label>
    <input id="telefono" name="telefono" type="text" value="{{ old('telefono', $tienda->telefono) }}"
      class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0"
      placeholder="+56 9 1234 5678" />
    @error('telefono')
      <p class="text-xs text-danger mt-1">{{ $message }}</p>
    @enderror
  </div>

  <div class="sm:col-span-2">
    <label for="imagen" class="block text-sm font-medium text-on-surface-variant mb-1">URL del logo (opcional)</label>
    <input id="imagen" name="imagen" type="text" value="{{ old('imagen', $tienda->imagen) }}"
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
      placeholder="Cuéntanos qué vende y qué la hace especial…">{{ old('descripcion', $tienda->descripcion) }}</textarea>
    @error('descripcion')
      <p class="text-xs text-danger mt-1">{{ $message }}</p>
    @enderror
  </div>

  <div>
    <label for="calificacion" class="block text-sm font-medium text-on-surface-variant mb-1">Calificación inicial (0-5)</label>
    <input id="calificacion" name="calificacion" type="number" step="0.1" min="0" max="5"
      value="{{ old('calificacion', $tienda->calificacion ?? 5.0) }}"
      class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0" />
    @error('calificacion')
      <p class="text-xs text-danger mt-1">{{ $message }}</p>
    @enderror
  </div>

  <div class="flex items-center gap-2 pt-6">
    <input id="envios_nacionales" name="envios_nacionales" type="checkbox" value="1"
      @checked(old('envios_nacionales', $tienda->envios_nacionales)) class="rounded border-outline-variant bg-surface-container-high" />
    <label for="envios_nacionales" class="text-sm text-on-surface-variant">Realiza envíos a todo Chile</label>
  </div>
</div>

<div class="flex justify-end gap-sm mt-lg pt-lg border-t border-outline-variant">
  <a href="{{ $tienda->exists ? route('tiendas.show', $tienda) : route('tiendas.index') }}"
    class="px-4 py-2.5 bg-surface-container-high border border-outline-variant text-on-surface text-sm font-medium rounded hover:border-primary transition-colors">
    Cancelar
  </a>
  <button type="submit"
    class="px-4 py-2.5 bg-accent text-on-accent text-sm font-medium rounded hover:brightness-110 transition-all">
    {{ $tienda->exists ? 'Guardar cambios' : 'Registrar tienda' }}
  </button>
</div>
