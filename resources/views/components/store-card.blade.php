<article
  class="bg-surface-container border border-outline-variant rounded-lg overflow-hidden flex flex-col group hover:border-primary/50 transition-colors">
  <div class="px-md py-1.5 bg-surface-container-high flex items-center justify-between border-b border-outline-variant">
    <span class="font-mono text-[10px] text-primary uppercase">Operacional</span>
    <span class="font-mono text-[10px] text-on-surface-variant">ID: ST-{{ str_pad($tienda->id, 4, '0', STR_PAD_LEFT) }}</span>
  </div>
  <div class="p-md flex flex-col sm:flex-row gap-md">
    <div class="w-full sm:w-28 h-28 bg-surface border border-outline-variant rounded-lg overflow-hidden shrink-0 flex items-center justify-center">
      @if ($tienda->imagen)
        <img class="w-full h-full object-contain p-2" alt="Logo de la tienda {{ $tienda->nombre }}" src="{{ $tienda->imagen }}" />
      @else
        <span class="material-symbols-outlined text-outline-variant text-[36px]">storefront</span>
      @endif
    </div>
    <div class="flex-1 space-y-2 min-w-0">
      <div class="flex justify-between items-start gap-2">
        <div class="min-w-0">
          <h2 class="font-display text-lg text-on-surface uppercase truncate">
            <a href="{{ route('tiendas.show', $tienda) }}" class="hover:text-primary transition-colors">{{ $tienda->nombre }}</a>
          </h2>
          <p class="text-sm text-on-surface-variant flex items-center gap-1 truncate">
            <span class="material-symbols-outlined text-[15px] shrink-0">location_on</span> {{ $tienda->direccion ?? $tienda->region }}
          </p>
        </div>
        <div class="flex flex-col items-end shrink-0">
          <span class="text-accent font-display text-lg leading-none">{{ number_format((float) $tienda->calificacion, 1) }}</span>
          <div class="flex text-accent" aria-label="{{ $tienda->calificacion }} de 5 estrellas">
            <span class="material-symbols-outlined fill-icon text-[13px]">star</span>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap gap-1.5">
        <span
          class="px-1.5 py-0.5 bg-primary-container text-on-primary-container text-[10px] font-semibold rounded border border-primary/30">{{ $tienda->categoria }}</span>
        <span
          class="px-1.5 py-0.5 bg-surface-container-high text-on-surface-variant text-[10px] font-semibold rounded border border-outline-variant">{{ $tienda->region }}</span>
        @if ($tienda->envios_nacionales)
          <span
            class="px-1.5 py-0.5 bg-accent-container text-accent text-[10px] font-semibold rounded border border-accent/30">Envíos nacionales</span>
        @endif
      </div>
      @if ($tienda->descripcion)
        <p class="text-sm text-on-surface-variant line-clamp-2">{{ $tienda->descripcion }}</p>
      @endif
    </div>
  </div>
  <div class="mt-auto p-md grid grid-cols-3 gap-2 border-t border-outline-variant bg-surface-container-low">
    <a href="{{ route('tiendas.show', $tienda) }}"
      class="flex items-center justify-center gap-1.5 py-2 bg-accent text-on-accent hover:brightness-110 transition-all text-sm font-medium rounded">
      <span class="material-symbols-outlined text-[16px]">visibility</span> Ver
    </a>
    <a href="{{ route('tiendas.edit', $tienda) }}"
      class="flex items-center justify-center gap-1.5 py-2 bg-surface-container-high border border-outline-variant hover:border-primary transition-colors text-on-surface text-sm font-medium rounded">
      <span class="material-symbols-outlined text-[16px]">edit</span> Editar
    </a>
    <form action="{{ route('tiendas.destroy', $tienda) }}" method="POST"
      onsubmit="return confirm('¿Eliminar {{ $tienda->nombre }} del directorio?');">
      @csrf
      @method('DELETE')
      <button type="submit"
        class="w-full h-full flex items-center justify-center gap-1.5 py-2 bg-surface-container-high border border-outline-variant hover:border-danger hover:text-danger transition-colors text-on-surface text-sm font-medium rounded">
        <span class="material-symbols-outlined text-[16px]">delete</span> Borrar
      </button>
    </form>
  </div>
</article>
