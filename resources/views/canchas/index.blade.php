@extends('layouts.app')

@section('title', 'Canchas — Airsoft Chile')

@section('content')

  <div class="flex flex-col md:flex-row md:items-end justify-between gap-md mb-xl">
    <div>
      <h1 class="font-display text-3xl sm:text-4xl text-on-surface uppercase tracking-tight mb-xs">{{ $titulo }}</h1>
      <p class="text-on-surface-variant leading-relaxed">Infraestructura táctica y campos de juego en todo el territorio
        nacional.</p>
    </div>
    <div class="flex gap-sm">
      <span class="px-3 py-1.5 bg-surface-container-high border border-outline-variant text-primary font-mono text-[12px] rounded">
        {{ $canchas->count() }} {{ Str::plural('cancha', $canchas->count()) }}
      </span>
      <a href="{{ route('canchas.create') }}"
        class="px-3 py-1.5 bg-accent text-on-accent font-mono text-[12px] rounded flex items-center gap-1 hover:brightness-110 transition-all">
        <span class="material-symbols-outlined text-[16px]">add</span> Nueva cancha
      </a>
    </div>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-12 gap-lg">

    {{-- Filtros: GET a la misma ruta index, demuestra uso de query params --}}
    <aside class="md:col-span-3 space-y-lg">
      <form method="GET" action="{{ route('canchas.index') }}"
        class="bg-surface-container border border-outline-variant p-md rounded-lg space-y-md" aria-label="Filtrar canchas">
        <h2 class="font-display text-lg text-primary uppercase border-b border-outline-variant pb-2">Región</h2>
        <div class="space-y-2">
          @foreach ($regiones as $region)
            <label class="flex items-center gap-2 cursor-pointer group">
              <input type="radio" name="region" value="{{ $region }}" onchange="this.form.submit()"
                class="rounded border-outline-variant bg-surface-container-high" @checked(request('region') === $region) />
              <span class="text-sm text-on-surface-variant group-hover:text-on-surface transition-colors">{{ $region }}</span>
            </label>
          @endforeach
        </div>

        <h2 class="font-display text-lg text-primary uppercase border-b border-outline-variant pb-2 pt-2">Tipo de entorno</h2>
        <div class="flex flex-wrap gap-1.5">
          @foreach ($categorias as $categoria)
            <button type="submit" name="categoria" value="{{ $categoria }}"
              class="px-2.5 py-1 {{ request('categoria') === $categoria ? 'bg-primary-container text-on-primary-container border-primary' : 'bg-surface-container-high text-on-surface border-outline-variant' }} border text-[11px] uppercase font-medium rounded hover:border-primary transition-colors">{{ $categoria }}</button>
          @endforeach
        </div>

        @if (request('region') || request('categoria') || request('buscar'))
          <a href="{{ route('canchas.index') }}" class="text-xs text-on-surface-variant hover:text-primary underline">Limpiar filtros</a>
        @endif
      </form>
    </aside>

    {{-- Grid de canchas: cada tarjeta es el componente Blade reutilizable <x-field-card> --}}
    <div class="md:col-span-9 grid grid-cols-1 xl:grid-cols-2 gap-lg">

      @forelse ($canchas as $cancha)
        <x-field-card :cancha="$cancha" />
      @empty
        <div class="xl:col-span-2 border-2 border-dashed border-outline-variant rounded-lg p-xl text-center">
          <span class="material-symbols-outlined text-outline-variant text-[40px] mb-md">search_off</span>
          <h3 class="font-display text-lg text-on-surface-variant uppercase">No se encontraron canchas</h3>
          <p class="text-sm text-on-surface-variant mt-1">Prueba con otros filtros o registra la primera cancha de esta categoría.</p>
        </div>
      @endforelse

      <a href="{{ route('canchas.create') }}"
        class="border-2 border-dashed border-outline-variant rounded-lg flex flex-col items-center justify-center p-xl group hover:border-primary transition-colors bg-surface-container/30 text-center">
        <span class="material-symbols-outlined text-outline-variant group-hover:text-primary mb-md transition-colors text-[40px]">add_location_alt</span>
        <h3 class="font-display text-lg text-on-surface-variant group-hover:text-on-surface transition-colors uppercase">
          Registra tu cancha</h3>
        <p class="text-sm text-on-surface-variant max-w-xs mt-1">Únete a la red más grande de campos de airsoft en
          Chile y aumenta tu alcance.</p>
      </a>
    </div>
  </div>

@endsection
