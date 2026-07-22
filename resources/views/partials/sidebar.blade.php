{{-- ============ SIDEBAR (desktop) ============ --}}
<div class="px-4 py-lg mb-sm border-b border-outline-variant">
  <div class="flex items-center gap-sm">
    <div class="w-10 h-10 rounded-lg overflow-hidden border border-primary shrink-0">
      <img class="w-full h-full object-cover"
        alt="Retrato de un operador táctico de airsoft con camisa multicam oscura y casco de fibra de carbono."
        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCLtqQFSTsnV4Rrd9wAH4cI5JfTMZJDkZ0FYHJNt2xfEVZ5Vfg9-U0-pE8BVFucbmVLtyUM9G8CqlueJ_5NMsnZHN4EajPTPYFF85OPYof-HCRUVEndgdEjqLQPCx_Km9lyItjrqKpTlWrALFrygsK0_iJJb3YVxaM2XhEtIJu5c0CzG_Jcri4VZcZlds45U_TAGm4CIbZzSWbeKKJi9n8C-aTL5xKG_JpliExA5CIHeBelKRusZLzxTA" />
    </div>
    <div>
      <p class="font-display text-lg text-primary uppercase leading-none mb-1">Operador</p>
      <p class="font-mono text-[11px] text-on-surface-variant uppercase tracking-wide">Santiago, CL</p>
    </div>
  </div>
</div>
<nav class="flex-1 flex flex-col gap-xs p-2 pt-md">
  <a class="text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high px-4 py-3 rounded-lg flex items-center gap-md text-sm font-medium transition-colors"
    href="{{ url('/') }}">
    <span class="material-symbols-outlined text-[20px]">home</span> Inicio
  </a>

  <a class="text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high px-4 py-3 rounded-lg flex items-center gap-md text-sm font-medium transition-colors"
    href="{{ url('/eventos') }}">
    <span class="material-symbols-outlined text-[20px]">event</span> Eventos
  </a>

  <a class="text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high px-4 py-3 rounded-lg flex items-center gap-md text-sm font-medium transition-colors"
    href="{{ url('/foro') }}">
    <span class="material-symbols-outlined text-[20px]">forum</span> Foro
  </a>

  <a class="text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high px-4 py-3 rounded-lg flex items-center gap-md text-sm font-medium transition-colors"
    href="{{ url('/canchas') }}">
    <span class="material-symbols-outlined text-[20px]">map</span> Canchas
  </a>

  <a class="{{ request()->is('tiendas*') ? 'bg-primary-container text-on-primary-container' : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high' }} px-4 py-3 rounded-lg flex items-center gap-md text-sm font-medium transition-colors"
    href="{{ route('tiendas.index') }}">
    <span class="material-symbols-outlined text-[20px]">storefront</span> Tiendas
  </a>
</nav>
<div class="p-4 space-y-2 border-t border-outline-variant pt-4">
  <a href="{{ route('tiendas.create') }}"
    class="w-full block text-center bg-accent text-on-accent font-display text-base py-3.5 uppercase tracking-wide clipped hover:brightness-110 active:scale-[0.98] transition-all">
    Publicar Tienda
  </a>
  <a class="flex items-center gap-md text-on-surface-variant hover:text-on-surface px-4 py-2 text-sm transition-colors"
    href="#">
    <span class="material-symbols-outlined text-[20px]">settings</span> Ajustes
  </a>
  <a class="flex items-center gap-md text-on-surface-variant hover:text-on-surface px-4 py-2 text-sm transition-colors"
    href="#">
    <span class="material-symbols-outlined text-[20px]">help</span> Soporte
  </a>
</div>
