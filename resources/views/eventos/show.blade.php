@extends('layouts.app')

@section('title', $evento->nombre . ' — Airsoft Chile')

@section('content')

  <a href="{{ route('eventos.index') }}" class="inline-flex items-center gap-1 text-sm text-on-surface-variant hover:text-primary mb-lg">
    <span class="material-symbols-outlined text-[18px]">arrow_back</span> Volver al calendario
  </a>

  <div class="bg-surface-container border border-outline-variant rounded-lg overflow-hidden">
    <div class="p-lg flex flex-col sm:flex-row gap-lg">
      <div class="w-full sm:w-40 h-40 bg-surface border border-outline-variant rounded-lg overflow-hidden shrink-0 flex items-center justify-center">
        @if ($evento->imagen)
          <img class="w-full h-full object-cover" alt="Banner de {{ $evento->nombre }}" src="{{ $evento->imagen }}" />
        @else
          <span class="material-symbols-outlined text-outline-variant text-[52px]">event</span>
        @endif
      </div>

      <div class="flex-1 space-y-3">
        <div class="flex flex-wrap items-start justify-between gap-3">
          <div>
            <h1 class="font-display text-3xl text-on-surface uppercase">{{ $evento->nombre }}</h1>
            <p class="text-sm text-on-surface-variant flex items-center gap-1 mt-1">
              <span class="material-symbols-outlined text-[16px]">location_on</span> {{ $evento->lugar ?? $evento->region }}
            </p>
          </div>
          <div class="text-right shrink-0">
            <p class="font-mono text-sm text-accent">{{ $evento->fecha->format('d/m/Y') }}</p>
            @if ($evento->hora)
              <p class="font-mono text-xs text-on-surface-variant">{{ \Illuminate\Support\Carbon::parse($evento->hora)->format('H:i') }} hrs</p>
            @endif
          </div>
        </div>

        <div class="flex flex-wrap gap-1.5">
          <span class="px-2 py-1 bg-primary-container text-on-primary-container text-xs font-semibold rounded border border-primary/30">{{ $evento->categoria }}</span>
          <span class="px-2 py-1 bg-surface-container-high text-on-surface-variant text-xs font-semibold rounded border border-outline-variant">{{ $evento->region }}</span>
          <span class="px-2 py-1 {{ $evento->inscripcion_abierta ? 'bg-accent-container text-accent border-accent/30' : 'bg-surface-container-high text-on-surface-variant border-outline-variant' }} text-xs font-semibold rounded border">
            {{ $evento->inscripcion_abierta ? 'Inscripción abierta' : 'Inscripción cerrada' }}
          </span>
        </div>

        @if ($evento->descripcion)
          <p class="text-on-surface-variant leading-relaxed">{{ $evento->descripcion }}</p>
        @endif

        <div class="flex flex-wrap gap-lg pt-1">
          @if (! is_null($evento->tarifa))
            <p class="text-sm text-on-surface-variant flex items-center gap-1">
              <span class="material-symbols-outlined text-[16px]">payments</span> {{ $evento->tarifa > 0 ? '$' . number_format($evento->tarifa, 0, ',', '.') . ' CLP' : 'Gratis' }}
            </p>
          @endif
          @if ($evento->cupos)
            <p class="text-sm text-on-surface-variant flex items-center gap-1">
              <span class="material-symbols-outlined text-[16px]">group</span> {{ $evento->cupos }} cupos
            </p>
          @endif
        </div>

        <p class="text-xs text-on-surface-variant font-mono">Publicado el {{ $evento->created_at->format('d/m/Y') }}</p>
      </div>
    </div>

    <div class="p-md grid {{ $evento->sitio_web ? 'grid-cols-3' : 'grid-cols-2' }} gap-2 border-t border-outline-variant bg-surface-container-low">
      @if ($evento->sitio_web)
        <a href="{{ $evento->sitio_web }}" target="_blank" rel="noopener noreferrer"
          class="flex items-center justify-center gap-1.5 py-2 bg-accent text-on-accent hover:brightness-110 transition-all text-sm font-medium rounded">
          <span class="material-symbols-outlined text-[16px]">open_in_new</span> Visitar sitio
        </a>
      @endif
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
          <span class="material-symbols-outlined text-[16px]">delete</span> Eliminar
        </button>
      </form>
    </div>
  </div>

@endsection
