@extends('layouts.app')

@section('title', 'Registrar cancha — Airsoft Chile')

@section('content')

  <a href="{{ route('canchas.index') }}" class="inline-flex items-center gap-1 text-sm text-on-surface-variant hover:text-primary mb-lg">
    <span class="material-symbols-outlined text-[18px]">arrow_back</span> Volver al directorio
  </a>

  <div class="max-w-2xl">
    <h1 class="font-display text-2xl sm:text-3xl text-on-surface uppercase tracking-tight mb-xs">{{ $titulo }}</h1>
    <p class="text-on-surface-variant leading-relaxed mb-lg">Suma tu campo a la red de canchas de Airsoft Chile.</p>

    <form action="{{ route('canchas.store') }}" method="POST"
      class="bg-surface-container border border-outline-variant rounded-lg p-lg">
      {{-- El mismo parcial se reutiliza en create y edit --}}
      @include('canchas._form')
    </form>
  </div>

@endsection
