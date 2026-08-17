@extends('layouts.app')

@section('title', 'Crear cuenta — Airsoft Chile')

@section('content')

  <div class="max-w-md mx-auto">
    <div class="text-center mb-lg">
      <span class="material-symbols-outlined text-accent text-[40px]">person_add</span>
      <h1 class="font-display text-2xl sm:text-3xl text-on-surface uppercase tracking-tight mt-xs">Crear cuenta</h1>
      <p class="text-on-surface-variant leading-relaxed mt-1">Únete a la comunidad de Airsoft Chile.</p>
    </div>

    <form action="{{ route('register.store') }}" method="POST"
      class="bg-surface-container border border-outline-variant rounded-lg p-lg space-y-md">
      @csrf

      <div>
        <label for="name" class="block text-sm font-medium text-on-surface-variant mb-1">Nombre</label>
        <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus autocomplete="name"
          class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0"
          placeholder="Tu nombre" />
        @error('name')
          <p class="text-xs text-danger mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label for="email" class="block text-sm font-medium text-on-surface-variant mb-1">Correo electrónico</label>
        <input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="username"
          class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0"
          placeholder="tu@correo.com" />
        @error('email')
          <p class="text-xs text-danger mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-on-surface-variant mb-1">Contraseña</label>
        <input id="password" name="password" type="password" required autocomplete="new-password"
          class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0"
          placeholder="Mínimo 8 caracteres" />
        @error('password')
          <p class="text-xs text-danger mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label for="password_confirmation" class="block text-sm font-medium text-on-surface-variant mb-1">Confirmar contraseña</label>
        <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"
          class="w-full bg-surface-container-high border border-outline-variant rounded text-on-surface text-sm py-2.5 px-3 focus:border-accent focus:ring-0"
          placeholder="••••••••" />
      </div>

      <button type="submit"
        class="w-full px-4 py-2.5 bg-accent text-on-accent text-sm font-medium rounded hover:brightness-110 transition-all">
        Crear cuenta
      </button>

      <p class="text-center text-sm text-on-surface-variant pt-2">
        ¿Ya tienes cuenta?
        <a href="{{ route('login') }}" class="text-primary hover:underline">Inicia sesión</a>
      </p>
    </form>
  </div>

@endsection
