@extends('layouts.app')

@section('title', 'Publicar evento — Airsoft Chile')

@section('content')

  <a href="{{ route('eventos.index') }}" class="inline-flex items-center gap-1 text-sm text-on-surface-variant hover:text-primary mb-lg">
    <span class="material-symbols-outlined text-[18px]">arrow_back</span> Volver al calendario
  </a>

  <div class="max-w-2xl">
    <h1 class="font-display text-2xl sm:text-3xl text-on-surface uppercase tracking-tight mb-xs">{{ $titulo }}</h1>
    <p class="text-on-surface-variant leading-relaxed mb-lg">Convoca a la comunidad a tu próxima misión de Airsoft Chile.</p>

    <form action="{{ route('eventos.store') }}" method="POST"
      class="bg-surface-container border border-outline-variant rounded-lg p-lg">
      {{-- El mismo parcial se reutiliza en create y edit --}}
      @include('eventos._form')
    </form>
  </div>

@endsection
