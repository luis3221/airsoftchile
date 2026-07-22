{{-- MOBILE BOTTOM NAV --}}
<nav
  class="lg:hidden fixed bottom-0 left-0 w-full bg-surface border-t border-outline-variant z-50 flex justify-around items-center h-16 px-gutter">
  <a href="{{ url('/') }}" class="flex flex-col items-center gap-0.5 text-on-surface-variant hover:text-on-surface">
    <span class="material-symbols-outlined text-[22px]">home</span>
    <span class="text-[10px] font-mono uppercase">Inicio</span>
  </a>
  <a href="{{ url('/eventos') }}"
    class="flex flex-col items-center gap-0.5 text-on-surface-variant hover:text-on-surface">
    <span class="material-symbols-outlined text-[22px]">event</span>
    <span class="text-[10px] font-mono uppercase">Eventos</span>
  </a>
  <a href="{{ url('/canchas') }}"
    class="flex flex-col items-center gap-0.5 text-on-surface-variant hover:text-on-surface">
    <span class="material-symbols-outlined text-[22px]">map</span>
    <span class="text-[10px] font-mono uppercase">Canchas</span>
  </a>
  <a href="{{ url('/foro') }}"
    class="flex flex-col items-center gap-0.5 text-on-surface-variant hover:text-on-surface">
    <span class="material-symbols-outlined text-[22px]">forum</span>
    <span class="text-[10px] font-mono uppercase">Foro</span>
  </a>
  <a href="{{ route('tiendas.index') }}"
    class="flex flex-col items-center gap-0.5 text-on-surface-variant hover:text-on-surface">
    <span class="material-symbols-outlined text-[22px]">storefront</span>
    <span class="text-[10px] font-mono uppercase">Tiendas</span>
  </a>
</nav>
