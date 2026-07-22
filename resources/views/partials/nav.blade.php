{{-- ============ TOP NAV ============ --}}
<header class="fixed top-0 w-full z-50 bg-surface border-b border-outline-variant">
  <nav class="flex justify-between items-center px-gutter h-16 max-w-container-max mx-auto">
    <a href="{{ url('/') }}" class="flex items-center gap-sm">
      <span class="material-symbols-outlined text-accent">shield</span>
      <span class="font-display text-xl text-on-surface uppercase tracking-tight">Airsoft Chile</span>
    </a>
    <div class="hidden md:flex items-center gap-xl">
      <a class="text-on-surface-variant hover:text-on-surface transition-colors text-sm font-medium"
        href="{{ url('/eventos') }}">Eventos</a>
      <a class="text-on-surface-variant hover:text-on-surface transition-colors text-sm font-medium"
        href="{{ url('/foro') }}">Foro</a>
      <a class="text-on-surface-variant hover:text-on-surface transition-colors text-sm font-medium"
        href="{{ url('/canchas') }}">Canchas</a>
      <a class="{{ request()->is('tiendas*') ? 'text-on-surface border-b-2 border-accent pb-1' : 'text-on-surface-variant hover:text-on-surface' }} transition-colors text-sm font-medium"
        href="{{ route('tiendas.index') }}" @if (request()->is('tiendas*')) aria-current="page" @endif>Tiendas</a>
    </div>
    <div class="flex items-center gap-sm">
      <div class="relative hidden sm:block">
        <label for="search-tiendas" class="sr-only">Buscar tiendas</label>
        <span
          class="material-symbols-outlined absolute left-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">search</span>
        <form action="{{ route('tiendas.index') }}" method="GET">
          <input id="search-tiendas" name="buscar" value="{{ request('buscar') }}"
            class="bg-surface-container-low border border-outline-variant rounded text-on-surface text-sm py-2 pl-9 pr-3 focus:border-accent focus:ring-0 w-48 font-mono placeholder:text-on-surface-variant/60"
            placeholder="Buscar tiendas…" type="text" />
        </form>
      </div>
      <button aria-label="Cuenta"
        class="hidden sm:flex p-2 text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors rounded-full">
        <span class="material-symbols-outlined text-[20px]">account_circle</span>
      </button>
      <button id="menu-btn" aria-label="Abrir menú" aria-expanded="false"
        class="md:hidden p-2 text-on-surface-variant hover:bg-surface-container-high rounded-full">
        <span class="material-symbols-outlined text-[20px]">menu</span>
      </button>
    </div>
  </nav>

  <!-- live ops status ticker -->
  <div class="bg-surface-container-lowest border-b border-outline-variant overflow-hidden">
    <div class="max-w-container-max mx-auto flex items-center h-9 px-gutter gap-md">
      <span
        class="hidden sm:flex items-center gap-1 shrink-0 font-mono text-[11px] uppercase tracking-wide text-danger">
        <span class="w-1.5 h-1.5 rounded-full bg-danger animate-pulse"></span> En vivo
      </span>
      <div class="overflow-hidden flex-1">
        <div
          class="flex ticker-track whitespace-nowrap font-mono text-[11px] uppercase tracking-wide text-on-surface-variant gap-xl w-max">
          <span class="flex gap-xl pr-xl">
            <span>Directorio de tiendas · envíos a todo Chile</span><span>·</span>
            <span class="text-accent">Pre-order VFC GBB Series ya disponible</span><span>·</span>
            <span>Valpo Tactical Center: logística reducida esta semana</span>
          </span>
          <span class="flex gap-xl pr-xl" aria-hidden="true">
            <span>Directorio de tiendas · envíos a todo Chile</span><span>·</span>
            <span class="text-accent">Pre-order VFC GBB Series ya disponible</span><span>·</span>
            <span>Valpo Tactical Center: logística reducida esta semana</span>
          </span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Mobile menu -->
<div id="mobile-menu"
  class="fixed inset-x-0 top-[6.5rem] z-40 md:hidden bg-surface-container border-b border-outline-variant -translate-y-[150%] opacity-0 pointer-events-none">
  <div class="flex flex-col p-gutter gap-xs">
    <a href="{{ url('/eventos') }}"
      class="px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high">Eventos</a>
    <a href="{{ url('/foro') }}" class="px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high">Foro</a>
    <a href="{{ url('/canchas') }}"
      class="px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high">Canchas</a>
    <a href="{{ route('tiendas.index') }}" class="px-4 py-3 rounded-lg bg-primary-container text-on-primary-container font-medium">Tiendas</a>
  </div>
</div>
