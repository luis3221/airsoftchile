<article
  class="bg-surface-container border border-outline-variant rounded-lg overflow-hidden flex flex-col group hover:border-primary/50 transition-colors">
  <div class="px-md py-1.5 bg-surface-container-high flex items-center justify-between border-b border-outline-variant">
    <span class="font-mono text-[10px] text-primary uppercase">{{ $evento->inscripcion_abierta ? 'Inscripción abierta' : 'Inscripción cerrada' }}</span>
    <div class="flex items-center gap-2">
      @if ($evento->sitio_web)
        <a href="{{ $evento->sitio_web }}" target="_blank" rel="noopener noreferrer" title="Visitar sitio web"
          class="text-on-surface-variant hover:text-accent transition-colors">
          <span class="material-symbols-outlined text-[15px]">open_in_new</span>
        </a>
      @endif
      <span class="font-mono text-[10px] text-on-surface-variant">ID: EV-{{ str_pad($evento->id, 4, '0', STR_PAD_LEFT) }}</span>
    </div>
  </div>
  <div class="p-md flex flex-col sm:flex-row gap-md">
    <div class="w-full sm:w-28 h-28 bg-surface border border-outline-variant rounded-lg overflow-hidden shrink-0 flex items-center justify-center">
      @if ($evento->imagen)
        <img class="w-full h-full object-cover" alt="Banner de {{ $evento->nombre }}" src="{{ $evento->imagen }}" />
      @else
        <span class="material-symbols-outlined text-outline-variant text-[36px]">event</span>
      @endif
    </div>
    <div class="flex-1 space-y-2 min-w-0">
      <div class="flex justify-between items-start gap-2">
        <div class="min-w-0">
          <h2 class="font-display text-lg text-on-surface uppercase truncate">
            <a href="{{ route('eventos.show', $evento) }}" class="hover:text-primary transition-colors">{{ $evento->nombre }}</a>
          </h2>
          <p class="text-sm text-on-surface-variant flex items-center gap-1 truncate">
            <span class="material-symbols-outlined text-[15px] shrink-0">location_on</span> {{ $evento->lugar ?? $evento->region }}
          </p>
        </div>
        <div class="flex flex-col items-end shrink-0">
          <span class="text-accent font-mono text-sm leading-none">{{ $evento->fecha->format('d/m/Y') }}</span>
          @if ($evento->hora)
            <span class="text-on-surface-variant font-mono text-[11px] mt-0.5">{{ \Illuminate\Support\Carbon::parse($evento->hora)->format('H:i') }} hrs</span>
          @endif
        </div>
      </div>
      <div class="flex flex-wrap gap-1.5">
        <span
          class="px-1.5 py-0.5 bg-primary-container text-on-primary-container text-[10px] font-semibold rounded border border-primary/30">{{ $evento->categoria }}</span>
        <span
          class="px-1.5 py-0.5 bg-surface-container-high text-on-surface-variant text-[10px] font-semibold rounded border border-outline-variant">{{ $evento->region }}</span>
        @if ($evento->cupos)
          <span
            class="px-1.5 py-0.5 bg-surface-container-high text-on-surface-variant text-[10px] font-semibold rounded border border-outline-variant">{{ $evento->cupos }} cupos</span>
        @endif
      </div>
      @if ($evento->descripcion)
        <p class="text-sm text-on-surface-variant line-clamp-2">{{ $evento->descripcion }}</p>
      @endif
    </div>
  </div>
  <div class="mt-auto p-md grid grid-cols-3 gap-2 border-t border-outline-variant bg-surface-container-low">
    <a href="{{ route('eventos.show', $evento) }}"
      class="flex items-center justify-center gap-1.5 py-2 bg-accent text-on-accent hover:brightness-110 transition-all text-sm font-medium rounded">
      <span class="material-symbols-outlined text-[16px]">visibility</span> Ver
    </a>
    <a href="{{ route('eventos.edit', $evento) }}"
      class="flex items-center justify-center gap-1.5 py-2 bg-surface-container-high border border-outline-variant hover:border-primary transition-colors text-on-surface text-sm font-medium rounded">
      <span class="material-symbols-outlined text-[16px]">edit</span> Editar
    </a>
    <form action="{{ route('eventos.destroy', $evento) }}" method="POST"
      onsubmit="return confirm('¿Eliminar {{ $evento->nombre }} del calendario?');">
      @csrf
      @method('DELETE')
      <button type="submit"
        class="w-full h-full flex items-center justify-center gap-1.5 py-2 bg-surface-container-high border border-outline-variant hover:border-danger hover:text-danger transition-colors text-on-surface text-sm font-medium rounded">
        <span class="material-symbols-outlined text-[16px]">delete</span> Borrar
      </button>
    </form>
  </div>
</article>
