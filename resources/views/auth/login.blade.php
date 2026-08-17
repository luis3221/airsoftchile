@extends('layouts.app')

@section('title', 'Iniciar sesión — Airsoft Chile')

@section('content')

  <div class="max-w-md mx-auto">
    <div class="text-center mb-lg">
      <span class="material-symbols-outlined text-accent text-[40px]">shield</span>
      <h1 class="font-display text-2xl sm:text-3xl text-on-surface uppercase tracking-tight mt-xs">Iniciar sesión</h1>
      <p class="text-on-surface-variant leading-relaxed mt-1">Accede a tu cuenta de Airsoft Chile.</p>
    </div>

    @if (session('exito'))
      <div class="mb-lg p-md rounded-lg border border-primary/40 bg-primary-container text-on-primary-container text-sm flex items-center gap-2">
        <span class="material-symbols-outlined text-[18px]">check_circle</span>
        {{ session('exito') }}
      </div>
    @endif

    <form action="{{ route('login.store') }}" method="POST"
      class="bg-surface-container border border-outline-variant rounded-lg p-lg space-y-md">
      @csrf

      <div>
        <label for="email" class="block text-sm font-medium text-on-surface-variant mb-1">Correo electrónico</label>
        <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="username"
          class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0"
          placeholder="tu@correo.com" />
        @error('email')
          <p class="text-xs text-danger mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-on-surface-variant mb-1">Contraseña</label>
        <input id="password" name="password" type="password" required autocomplete="current-password"
          class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0"
          placeholder="••••••••" />
        @error('password')
          <p class="text-xs text-danger mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="flex items-center justify-between">
        <label class="flex items-center gap-2 cursor-pointer">
          <input type="checkbox" name="recordar" value="1"
            class="rounded border-outline-variant bg-surface-container-high" />
          <span class="text-sm text-on-surface-variant">Recordarme</span>
        </label>
      </div>

      <button type="submit"
        class="w-full px-4 py-2.5 bg-accent text-on-accent text-sm font-medium rounded hover:brightness-110 transition-all">
        Iniciar sesión
      </button>

      <p class="text-center text-sm text-on-surface-variant pt-2">
        ¿No tienes cuenta?
        <a href="{{ route('register') }}" class="text-primary hover:underline">Regístrate aquí</a>
      </p>
    </form>
  </div>

@endsection
