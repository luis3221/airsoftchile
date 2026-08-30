@extends('layouts.app')

@section('title', $cancha->nombre . ' — Airsoft Chile')

@section('content')

  <a href="{{ route('canchas.index') }}" class="inline-flex items-center gap-1 text-sm text-on-surface-variant hover:text-primary mb-lg">
    <span class="material-symbols-outlined text-[18px]">arrow_back</span> Volver al directorio
  </a>

  <div class="bg-surface-container border border-outline-variant rounded-lg overflow-hidden">
    <div class="p-lg flex flex-col sm:flex-row gap-lg">
      <div class="w-full sm:w-40 h-40 bg-surface border border-outline-variant rounded-lg overflow-hidden shrink-0 flex items-center justify-center">
        @if ($cancha->imagen)
          <img class="w-full h-full object-cover" alt="Foto de {{ $cancha->nombre }}" src="{{ $cancha->imagen }}" />
        @else
          <span class="material-symbols-outlined text-outline-variant text-[52px]">terrain</span>
        @endif
      </div>

      <div class="flex-1 space-y-3">
        <div class="flex flex-wrap items-start justify-between gap-3">
          <div>
            <h1 class="font-display text-3xl text-on-surface uppercase">{{ $cancha->nombre }}</h1>
            <p class="text-sm text-on-surface-variant flex items-center gap-1 mt-1">
              <span class="material-symbols-outlined text-[16px]">location_on</span> {{ $cancha->direccion ?? $cancha->region }}
            </p>
          </div>
          <div class="flex items-center gap-1 text-accent">
            <span class="font-display text-2xl leading-none">{{ number_format((float) $cancha->calificacion, 1) }}</span>
            <span class="material-symbols-outlined fill-icon text-[20px]">star</span>
          </div>
        </div>

        <div class="flex flex-wrap gap-1.5">
          <span class="px-2 py-1 bg-primary-container text-on-primary-container text-xs font-semibold rounded border border-primary/30">{{ $cancha->categoria }}</span>
          <span class="px-2 py-1 bg-surface-container-high text-on-surface-variant text-xs font-semibold rounded border border-outline-variant">{{ $cancha->region }}</span>
          @if ($cancha->estacionamiento)
            <span class="px-2 py-1 bg-accent-container text-accent text-xs font-semibold rounded border border-accent/30">Estacionamiento</span>
          @endif
        </div>

        @if ($cancha->descripcion)
          <p class="text-on-surface-variant leading-relaxed">{{ $cancha->descripcion }}</p>
        @endif

        @if ($cancha->telefono)
          <p class="text-sm text-on-surface-variant flex items-center gap-1">
            <span class="material-symbols-outlined text-[16px]">phone</span> {{ $cancha->telefono }}
          </p>
        @endif

        <p class="text-xs text-on-surface-variant font-mono">Registrada el {{ $cancha->created_at->format('d/m/Y') }}</p>
      </div>
    </div>

    <div class="p-md grid {{ $cancha->sitio_web ? 'grid-cols-3' : 'grid-cols-2' }} gap-2 border-t border-outline-variant bg-surface-container-low">
      @if ($cancha->sitio_web)
        <a href="{{ $cancha->sitio_web }}" target="_blank" rel="noopener noreferrer"
          class="flex items-center justify-center gap-1.5 py-2 bg-accent text-on-accent hover:brightness-110 transition-all text-sm font-medium rounded">
          <span class="material-symbols-outlined text-[16px]">open_in_new</span> Visitar sitio
        </a>
      @endif
      <a href="{{ route('canchas.edit', $cancha) }}"
        class="flex items-center justify-center gap-1.5 py-2 bg-surface-container-high border border-outline-variant hover:border-primary transition-colors text-on-surface text-sm font-medium rounded">
        <span class="material-symbols-outlined text-[16px]">edit</span> Editar
      </a>
      <form action="{{ route('canchas.destroy', $cancha) }}" method="POST"
        onsubmit="return confirm('¿Eliminar {{ $cancha->nombre }} del directorio?');">
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
