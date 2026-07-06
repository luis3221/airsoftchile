<!DOCTYPE html>
<html class="dark" lang="es">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Campos — Airsoft Chile</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@500;600;700&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
  tailwind.config = {
    darkMode: "class",
    theme: {
      extend: {
        colors: {
          "surface": "#0a0c0d",
          "surface-container": "#14171a",
          "surface-container-high": "#1c2023",
          "surface-container-low": "#101315",
          "surface-container-lowest": "#07090a",
          "outline": "#8d938a4d",
          "outline-variant": "#2b3033",
          "on-surface": "#ecede7",
          "on-surface-variant": "#a8ada3",
          "primary": "#a8b48c",
          "on-primary": "#1c2116",
          "primary-container": "#2a3324",
          "on-primary-container": "#c7d1af",
          "accent": "#ff8a3d",
          "on-accent": "#231000",
          "accent-container": "#3a2412",
          "danger": "#e2543a",
        },
        borderRadius: { DEFAULT: "0.2rem", lg: "0.35rem", xl: "0.6rem", full: "0.75rem" },
        spacing: { "container-max": "1280px", gutter: "20px", md: "16px", xs: "4px", lg: "24px", xl: "48px", sm: "8px" },
        fontFamily: { display: ["Archivo Narrow", "sans-serif"], body: ["Inter", "sans-serif"], mono: ["JetBrains Mono", "monospace"] },
      },
    },
  }
</script>
<style>
  body { background-color: #0a0c0d; color: #ecede7; -webkit-font-smoothing: antialiased; }
  .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
  .fill-icon { font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' 0, 'opsz' 24; }
  .clipped { clip-path: polygon(0 0, 94% 0, 100% 22%, 100% 100%, 6% 100%, 0 78%); }
  .grid-overlay { background-image: radial-gradient(circle, #2b3033 1px, transparent 1px); background-size: 22px 22px; }
  .ticker-track { animation: ticker 28s linear infinite; }
  .ticker-track:hover { animation-play-state: paused; }
  @keyframes ticker { from { transform: translateX(0); } to { transform: translateX(-50%); } }
  @media (prefers-reduced-motion: reduce) { .ticker-track { animation: none; } }
  a:focus-visible, button:focus-visible, input:focus-visible, select:focus-visible {
    outline: 2px solid #ff8a3d; outline-offset: 2px;
  }
  ::-webkit-scrollbar { width: 6px; }
  ::-webkit-scrollbar-track { background: #0a0c0d; }
  ::-webkit-scrollbar-thumb { background: #2b3033; border-radius: 3px; }
  ::-webkit-scrollbar-thumb:hover { background: #a8b48c; }
  #mobile-menu { transition: transform .25s ease, opacity .2s ease; }
  input[type="checkbox"] { accent-color: #ff8a3d; }
</style>
</head>
<body class="font-body text-[15px] overflow-x-hidden">

<!-- ============ TOP NAV ============ -->
<header class="fixed top-0 w-full z-50 bg-surface border-b border-outline-variant">
  <nav class="flex justify-between items-center px-gutter h-16 max-w-container-max mx-auto">
    <a href="{{ url('/') }}" class="flex items-center gap-sm">
      <span class="material-symbols-outlined text-accent">shield</span>
      <span class="font-display text-xl text-on-surface uppercase tracking-tight">Airsoft Chile</span>
    </a>
    <div class="hidden md:flex items-center gap-xl">
      <a class="text-on-surface-variant hover:text-on-surface transition-colors text-sm font-medium" href="{{ url('/eventos') }}">Eventos</a>
      <a class="text-on-surface-variant hover:text-on-surface transition-colors text-sm font-medium" href="{{ url('/foro') }}">Foro</a>
      <a class="text-on-surface border-b-2 border-accent pb-1 text-sm font-medium" href="{{ url('/canchas') }}" aria-current="page">Canchas</a>
      <a class="text-on-surface-variant hover:text-on-surface transition-colors text-sm font-medium" href="{{ url('/tiendas') }}">Tiendas</a>
    </div>
    <div class="flex items-center gap-sm">
      <div class="relative hidden sm:block">
        <label for="search-op" class="sr-only">Buscar Canchas</label>
        <span class="material-symbols-outlined absolute left-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">search</span>
        <input id="search-op" class="bg-surface-container-low border border-outline-variant rounded text-on-surface text-sm py-2 pl-9 pr-3 focus:border-accent focus:ring-0 w-48 font-mono placeholder:text-on-surface-variant/60" placeholder="Buscar cancha…" type="text"/>
      </div>
      <button aria-label="Cuenta" class="hidden sm:flex p-2 text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors rounded-full">
        <span class="material-symbols-outlined text-[20px]">account_circle</span>
      </button>
      <button id="menu-btn" aria-label="Abrir menú" aria-expanded="false" class="md:hidden p-2 text-on-surface-variant hover:bg-surface-container-high rounded-full">
        <span class="material-symbols-outlined text-[20px]">menu</span>
      </button>
    </div>
  </nav>

  <!-- live ops status ticker -->
  <div class="bg-surface-container-lowest border-b border-outline-variant overflow-hidden">
    <div class="max-w-container-max mx-auto flex items-center h-9 px-gutter gap-md">
      <span class="hidden sm:flex items-center gap-1 shrink-0 font-mono text-[11px] uppercase tracking-wide text-danger">
        <span class="w-1.5 h-1.5 rounded-full bg-danger animate-pulse"></span> En vivo
      </span>
      <div class="overflow-hidden flex-1">
        <div class="flex ticker-track whitespace-nowrap font-mono text-[11px] uppercase tracking-wide text-on-surface-variant gap-xl w-max">
          <span class="flex gap-xl pr-xl">
            <span>42 campos registrados · 38 operativos hoy</span><span>·</span>
            <span class="text-accent">The Warehouse CQB: nuevo horario de fin de semana</span><span>·</span>
            <span>Bunker Subterráneo agregó cupos nocturnos</span>
          </span>
          <span class="flex gap-xl pr-xl" aria-hidden="true">
            <span>42 campos registrados · 38 operativos hoy</span><span>·</span>
            <span class="text-accent">The Warehouse CQB: nuevo horario de fin de semana</span><span>·</span>
            <span>Bunker Subterráneo agregó cupos nocturnos</span>
          </span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Mobile menu -->
<div id="mobile-menu" class="fixed inset-x-0 top-[6.5rem] z-40 md:hidden bg-surface-container border-b border-outline-variant -translate-y-[150%] opacity-0 pointer-events-none">
  <div class="flex flex-col p-gutter gap-xs">
    <a href="{{ url('/eventos') }}" class="px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high">Eventos</a>
    <a href="{{ url('/foro') }}" class="px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high">Foro</a>
    <a href="{{ url('/canchas') }}" class="px-4 py-3 rounded-lg bg-primary-container text-on-primary-container font-medium">Canchas</a>
    <a href="{{ url('/tiendas') }}" class="px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high">Tiendas</a>
  </div>
</div>

<!-- ============ SIDEBAR (desktop) ============ -->
<aside class="hidden lg:flex flex-col fixed left-0 top-[6.5rem] h-[calc(100%-6.5rem)] z-30 bg-surface-container border-r border-outline-variant w-60">
  <div class="px-4 py-lg mb-sm border-b border-outline-variant">
    <div class="flex items-center gap-sm">
      <div class="w-10 h-10 rounded-lg overflow-hidden border border-primary shrink-0">
        <img class="w-full h-full object-cover" alt="Retrato de un operador táctico de airsoft con camisa multicam oscura y casco de fibra de carbono." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCLtqQFSTsnV4Rrd9wAH4cI5JfTMZJDkZ0FYHJNt2xfEVZ5Vfg9-U0-pE8BVFucbmVLtyUM9G8CqlueJ_5NMsnZHN4EajPTPYFF85OPYof-HCRUVEndgdEjqLQPCx_Km9lyItjrqKpTlWrALFrygsK0_iJJb3YVxaM2XhEtIJu5c0CzG_Jcri4VZcZlds45U_TAGm4CIbZzSWbeKKJi9n8C-aTL5xKG_JpliExA5CIHeBelKRusZLzxTA"/>
      </div>
      <div>
        <p class="font-display text-lg text-primary uppercase leading-none mb-1">Operador</p>
        <p class="font-mono text-[11px] text-on-surface-variant uppercase tracking-wide">Santiago, CL</p>
      </div>
    </div>
  </div>
  <nav class="flex-1 flex flex-col gap-xs p-2 pt-md">
    <!-- Enlace a Inicio (welcome.blade.php) -->
    <a class="bg-primary-container text-on-primary-container rounded-lg px-4 py-3 flex items-center gap-md text-sm font-medium" href="{{ url('/') }}">
      <span class="material-symbols-outlined text-[20px]">home</span> Inicio
    </a>
    
    <!-- Enlace a Eventos (eventos.blade.php) -->
    <a class="text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high px-4 py-3 rounded-lg flex items-center gap-md text-sm font-medium transition-colors" href="{{ url('/eventos') }}">
      <span class="material-symbols-outlined text-[20px]">event</span> Eventos
    </a>
    
    <!-- Enlace a Foro (foro.blade.php) -->
    <a class="text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high px-4 py-3 rounded-lg flex items-center gap-md text-sm font-medium transition-colors" href="{{ url('/foro') }}">
      <span class="material-symbols-outlined text-[20px]">forum</span> Foro
    </a>
    
    <!-- Enlace a Canchas (canchas.blade.php) -->
    <a class="text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high px-4 py-3 rounded-lg flex items-center gap-md text-sm font-medium transition-colors" href="{{ url('/canchas') }}">
      <span class="material-symbols-outlined text-[20px]">map</span> Canchas
    </a>
    
    <!-- Enlace a Tiendas (tiendas.blade.php) -->
    <a class="text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high px-4 py-3 rounded-lg flex items-center gap-md text-sm font-medium transition-colors" href="{{ url('/tiendas') }}">
      <span class="material-symbols-outlined text-[20px]">storefront</span> Tiendas
    </a>
</nav>
  <div class="p-4">
    <button class="w-full bg-accent text-on-accent font-display text-base py-3.5 uppercase tracking-wide clipped hover:brightness-110 active:scale-[0.98] transition-all">
      Registrar mi Cancha
    </button>
  </div>
</aside>

<!-- ============ MAIN ============ -->
<main class="lg:pl-60 pt-[6.5rem] pb-24 lg:pb-12 px-gutter grid-overlay min-h-screen">
  <div class="max-w-container-max mx-auto py-lg">

    <!-- Header -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-md mb-xl">
      <div>
        <h1 class="font-display text-3xl sm:text-4xl text-on-surface uppercase tracking-tight mb-xs">Directorio de Canchas</h1>
        <p class="font-mono text-[11px] text-primary tracking-[0.15em] uppercase">Infraestructura táctica — sector Chile</p>
      </div>
      <div class="flex gap-sm">
        <span class="bg-surface-container-high px-3 py-1.5 rounded border border-outline-variant font-mono text-[12px]">Total: 42</span>
        <span class="bg-primary-container px-3 py-1.5 rounded border border-primary/40 font-mono text-[12px] text-primary">Operativos: 38</span>
      </div>
    </div>

    <div class="grid grid-cols-12 gap-lg">

      <!-- Filters + map preview -->
      <aside class="col-span-12 md:col-span-3 space-y-lg">
        <section class="bg-surface-container p-md border border-outline-variant rounded-lg" aria-label="Filtros">
          <h2 class="font-display text-lg text-primary mb-md flex items-center gap-2">
            <span class="material-symbols-outlined text-[20px]">filter_alt</span> Filtros
          </h2>
          <div class="space-y-md">
            <div>
              <label for="filter-region-campos" class="font-mono text-[11px] text-on-surface-variant uppercase mb-1.5 block">Región</label>
              <select id="filter-region-campos" class="w-full bg-surface-container-low border border-outline-variant rounded text-on-surface text-sm py-2 px-2 focus:border-accent focus:ring-0">
                <option>Región Metropolitana</option>
                <option>Valparaíso</option>
                <option>Bío Bío</option>
                <option>Araucanía</option>
              </select>
            </div>
            <fieldset>
              <legend class="font-mono text-[11px] text-on-surface-variant uppercase mb-1.5">Tipo de entorno</legend>
              <div class="space-y-2">
                <label class="flex items-center gap-2 cursor-pointer group">
                  <input checked class="rounded border-outline-variant bg-surface-container" type="checkbox"/>
                  <span class="text-sm group-hover:text-primary transition-colors">CQB (espacios cerrados)</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer group">
                  <input class="rounded border-outline-variant bg-surface-container" type="checkbox"/>
                  <span class="text-sm group-hover:text-primary transition-colors">Milsim / woodland</span>
                </label>
                <label class="flex items-center gap-2 cursor-pointer group">
                  <input class="rounded border-outline-variant bg-surface-container" type="checkbox"/>
                  <span class="text-sm group-hover:text-primary transition-colors">Cancha abierto</span>
                </label>
              </div>
            </fieldset>
            <button class="w-full border border-outline-variant hover:bg-accent hover:text-on-accent hover:border-accent transition-colors font-mono text-[12px] py-2.5 rounded uppercase tracking-wide">
              Aplicar filtros
            </button>
          </div>
        </section>

        <!-- Map preview -->
        <section class="bg-surface-container border border-outline-variant rounded-lg overflow-hidden">
          <div class="p-2.5 bg-surface-container-high border-b border-outline-variant flex justify-between items-center">
            <span class="font-mono text-[11px] uppercase text-primary">Vista satelital</span>
            <span class="material-symbols-outlined text-[16px] text-on-surface-variant">satellite_alt</span>
          </div>
          <div class="h-40 relative grayscale contrast-125 opacity-90">
            <div class="absolute inset-0 bg-primary/10 pointer-events-none"></div>
            <img class="w-full h-full object-cover" alt="Vista satelital de Santiago, Chile, mostrando el sector de campos de airsoft." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4TFxwrO025kgiB4ne6fIyilejNxHTFnN3Dn5PVpYiAB8N9lfAIvwPpzbaFLWPKKsfgDMS_wu9LkFtbz1JGHRGpP-9vThBOvct1RNEMATdED-Mm6CfhRGtzq5IYEnrE_aASdKG8MWXi6X9eFJYxE2_XEuvG149RFgd_WwndaBMCPsufJRdn41sjjnur5DNC8jbjtCO6XC8yUvFvETbwkySM3vztHFMzhb_SZCzMDimaVvGG7oJNnafjw"/>
            <span class="absolute top-2 left-2 w-2 h-2 bg-accent rounded-full animate-pulse"></span>
          </div>
          <div class="p-md text-center">
            <button class="font-mono text-[12px] text-primary hover:underline uppercase tracking-wide">Abrir mapa táctico</button>
          </div>
        </section>
      </aside>

      <!-- Field cards -->
      <div class="col-span-12 md:col-span-9 grid grid-cols-1 md:grid-cols-2 gap-lg">

        <!-- Featured field -->
        <article class="md:col-span-2 group bg-surface-container border border-outline-variant rounded-lg overflow-hidden hover:border-primary/50 transition-colors">
          <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-2/5 relative overflow-hidden h-56 md:h-auto">
              <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Bodega industrial reconvertida en un campo de airsoft CQB en Chile, con iluminación verde y ámbar dramática." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBUqRpsVmlc7lCPfYml4qSZxAjycU4X5nLlFLMVJFEeYD6M4uGFGN7alZeSgDUC8xK59RNBVd43CA1TZhHgtcDMZbmYmLLUIXP3e0KSOUdcF2nPETEFJCo-HlGHUJwgpjHrZDcS9K1bVTHj-wVL00XorAoNp92McNu4U5VKl9z45BNIfg3bPUvzfPDkSAxjIQQhq6lSNlUDKPL5Dm48ZES8GLWx8vSrJv9lGlMyl9XOUcokaofVMEkM-w"/>
              <span class="absolute top-3 left-3 bg-accent text-on-accent font-mono text-[11px] px-2.5 py-1 rounded uppercase font-semibold">Destacado</span>
            </div>
            <div class="p-lg flex-1 flex flex-col justify-between">
              <div>
                <div class="flex justify-between items-start gap-2 mb-1">
                  <h2 class="font-display text-2xl text-on-surface uppercase leading-tight group-hover:text-primary transition-colors">The Warehouse CQB</h2>
                  <div class="flex items-center gap-1 shrink-0">
                    <span class="material-symbols-outlined text-accent text-[18px] fill-icon">star</span>
                    <span class="font-mono text-sm">4.9</span>
                  </div>
                </div>
                <p class="font-mono text-[12px] text-primary uppercase tracking-widest mb-md">Santiago — sector norte</p>
                <p class="text-sm text-on-surface-variant mb-lg leading-relaxed">Cancha cerrada de alto nivel con dos pisos, zonas de oficinas y vehículos reales. Protocolos de seguridad estrictos y cronograma obligatorio.</p>
                <div class="flex flex-wrap gap-2 mb-lg">
                  <span class="bg-surface-container-high border border-outline-variant px-2.5 py-1 font-mono text-[11px] uppercase rounded">Límite 350 FPS</span>
                  <span class="bg-surface-container-high border border-outline-variant px-2.5 py-1 font-mono text-[11px] uppercase rounded">Zona tech</span>
                  <span class="bg-surface-container-high border border-outline-variant px-2.5 py-1 font-mono text-[11px] uppercase rounded">Arriendo disponible</span>
                </div>
              </div>
              <div class="flex gap-md pt-md border-t border-outline-variant">
                <button class="flex-1 bg-primary text-on-primary font-mono text-[12px] py-3 rounded uppercase tracking-wide hover:brightness-110 transition-all active:scale-95">Agendar misión</button>
                <button aria-label="Ver ubicación" class="px-4 border border-outline-variant text-on-surface-variant hover:text-primary hover:border-primary rounded transition-colors">
                  <span class="material-symbols-outlined text-[20px]">location_on</span>
                </button>
              </div>
            </div>
          </div>
        </article>

        <!-- Field 2 -->
        <article class="bg-surface-container border border-outline-variant rounded-lg overflow-hidden group hover:border-primary/50 transition-colors">
          <div class="h-44 relative overflow-hidden">
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Amplio campo de airsoft woodland en el sur de Chile con búnkeres y trincheras de madera entre pinos." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAhheEweDgC40TWYpVus1M7jtNv_x6G32NpVsd9KoHpgxrcicgxLlKKf_xMP2F6Z89si0rZ7Wq7ynP_2D5X_fegqi8olus0QLc7M8bRsSiVQQSS_8CGqAfaYIRZAILYXjGEN0hS94GC2zhnaEvhMZfz_Rqi8ViuuDpr_DBnJq7xbWkflJgXzT7fv_QHRMasZ8UC3EwBxJkbTW-Ctq7kOrFdpcTCrMR2kRLcPE8Hui4KHxXgqvtBPsz8OQ"/>
            <span class="absolute top-3 right-3 bg-surface/90 backdrop-blur px-2 py-1 font-mono text-[10px] text-primary uppercase border border-primary/30 rounded">Woodland</span>
          </div>
          <div class="p-md">
            <h3 class="font-display text-lg text-on-surface uppercase leading-tight mb-1">Operación Trinchera</h3>
            <p class="font-mono text-[11px] text-on-surface-variant mb-md uppercase tracking-wide">Talca — VII Región</p>
            <div class="flex justify-between items-center pt-md border-t border-outline-variant">
              <span class="font-mono text-sm text-accent">$12.000 / pers</span>
              <button class="text-sm text-on-surface-variant hover:text-primary uppercase flex items-center gap-1 transition-colors">Detalles <span class="material-symbols-outlined text-[18px]">chevron_right</span></button>
            </div>
          </div>
        </article>

        <!-- Field 3 -->
        <article class="bg-surface-container border border-outline-variant rounded-lg overflow-hidden group hover:border-primary/50 transition-colors">
          <div class="h-44 relative overflow-hidden">
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Centro urbano de simulación de airsoft de varios niveles con estructuras de concreto y contenedores." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCncJD-3rUNVWfuSkDzPGiCGl4T9upu1pZFP6Gu2f0YUyw--DAAbbbQdnkSO1ezRU2bfgD8Q1ybmBbG0QUPLrcmPwvRzmg7-7NHXLeLkJxibEW1x5waqGv0lFO1m4mWKnxUp3YyyqNYNagY2_2tB_tEBehr2RHuzyk2alYRFpprWJNtzyS3ciDjae1RE1tf4DHNQU_1Q08BD8cnqug7MrVh1_8iSnIdfQ0bb6dQNkp-t4-ndoQkm9W77A"/>
            <span class="absolute top-3 right-3 bg-surface/90 backdrop-blur px-2 py-1 font-mono text-[10px] text-primary uppercase border border-primary/30 rounded">Arena mixta</span>
          </div>
          <div class="p-md">
            <h3 class="font-display text-lg text-on-surface uppercase leading-tight mb-1">Sector 7 Urban</h3>
            <p class="font-mono text-[11px] text-on-surface-variant mb-md uppercase tracking-wide">Puente Alto — RM</p>
            <div class="flex justify-between items-center pt-md border-t border-outline-variant">
              <span class="font-mono text-sm text-accent">$8.500 / pers</span>
              <button class="text-sm text-on-surface-variant hover:text-primary uppercase flex items-center gap-1 transition-colors">Detalles <span class="material-symbols-outlined text-[18px]">chevron_right</span></button>
            </div>
          </div>
        </article>

        <!-- Field 4 -->
        <article class="bg-surface-container border border-outline-variant rounded-lg overflow-hidden group hover:border-primary/50 transition-colors">
          <div class="h-44 relative overflow-hidden">
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Campo de airsoft verde en una zona rural de Chile con graneros antiguos, iluminado por el atardecer." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB5rWoCwIdNM0NLeXZw0CmbwUJmeUDmuMTr4ELAT-rqW-TERoNWEE-8D0T5dAbevXNqCKAtZkxuM1kihiwOyzVn39eGDuERTH96U2PjHYZBkTqT7Ofdndj0ORN42k5R3iNYT4ynVlxXlEMYr0RsWGZgivD5KDxjxfWB_-kblXC_3eyAf1EkvWl154_k6ze0rPPGG7NIvkjq87HjaeCxe6EeE_YvbDXFRWnzJtMxJLz4L-3MkoCXjf0d6Q"/>
            <span class="absolute top-3 right-3 bg-surface/90 backdrop-blur px-2 py-1 font-mono text-[10px] text-primary uppercase border border-primary/30 rounded">Campo abierto</span>
          </div>
          <div class="p-md">
            <h3 class="font-display text-lg text-on-surface uppercase leading-tight mb-1">Rancho el Halcón</h3>
            <p class="font-mono text-[11px] text-on-surface-variant mb-md uppercase tracking-wide">Melipilla — RM</p>
            <div class="flex justify-between items-center pt-md border-t border-outline-variant">
              <span class="font-mono text-sm text-accent">$10.000 / pers</span>
              <button class="text-sm text-on-surface-variant hover:text-primary uppercase flex items-center gap-1 transition-colors">Detalles <span class="material-symbols-outlined text-[18px]">chevron_right</span></button>
            </div>
          </div>
        </article>

        <!-- Field 5 -->
        <article class="bg-surface-container border border-outline-variant rounded-lg overflow-hidden group hover:border-primary/50 transition-colors">
          <div class="h-44 relative overflow-hidden">
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Estacionamiento subterráneo convertido en una arena de airsoft CQB de alta intensidad con luces de neón." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgWmR5A3YkHZWX_3dlDJ4kJ7ljRkkl5rURZD9X_irau5kzvUB85qTh6V-l331KaT7cI-0YsLBvRVW2hy7sq2UC80FW2r6v_xHbq4b_wPvyB9DAvS5flEiP0nUmFSe0S2zaUCMsWLuH8iLJvdvpa3HpVgP5rdbLxGs3AAPN7rPmnXvRkXHQ8xuLIeZxL8UOByLNWLuZuFtFTxVdlKiGey6-hh4h3qX5VCKoioQq03VJMpjG99EuMoLfsw"/>
            <span class="absolute top-3 right-3 bg-surface/90 backdrop-blur px-2 py-1 font-mono text-[10px] text-primary uppercase border border-primary/30 rounded">Ultra CQB</span>
          </div>
          <div class="p-md">
            <h3 class="font-display text-lg text-on-surface uppercase leading-tight mb-1">Bunker Subterráneo</h3>
            <p class="font-mono text-[11px] text-on-surface-variant mb-md uppercase tracking-wide">Providencia — RM</p>
            <div class="flex justify-between items-center pt-md border-t border-outline-variant">
              <span class="font-mono text-sm text-accent">$15.000 / pers</span>
              <button class="text-sm text-on-surface-variant hover:text-primary uppercase flex items-center gap-1 transition-colors">Detalles <span class="material-symbols-outlined text-[18px]">chevron_right</span></button>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</main>

<!-- FOOTER -->
<footer class="lg:pl-60 w-full py-xl px-gutter flex flex-col md:flex-row justify-between items-center gap-md bg-surface-container-lowest border-t border-outline-variant">
  <div class="flex flex-col items-center md:items-start gap-sm">
    <div class="font-display text-lg text-primary uppercase">Airsoft Chile</div>
    <p class="font-mono text-[11px] text-on-surface-variant uppercase tracking-tight">© 2026 Airsoft Chile — Red Táctica Comunitaria</p>
  </div>
  <div class="flex flex-wrap justify-center gap-lg">
    <a class="font-mono text-[11px] text-on-surface-variant hover:text-primary transition-colors hover:underline uppercase" href="#">Privacidad</a>
    <a class="font-mono text-[11px] text-on-surface-variant hover:text-primary transition-colors hover:underline uppercase" href="#">Guías de campo</a>
    <a class="font-mono text-[11px] text-on-surface-variant hover:text-primary transition-colors hover:underline uppercase" href="#">Patrocinios</a>
    <a class="font-mono text-[11px] text-on-surface-variant hover:text-primary transition-colors hover:underline uppercase" href="#">Contactar comando</a>
  </div>
  <div class="flex gap-md">
    <a aria-label="Compartir" class="w-10 h-10 bg-surface-container rounded-lg border border-outline-variant flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors" href="#">
      <span class="material-symbols-outlined text-[20px]">share</span>
    </a>
    <a aria-label="Notificaciones" class="w-10 h-10 bg-surface-container rounded-lg border border-outline-variant flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors" href="#">
      <span class="material-symbols-outlined text-[20px]">notifications</span>
    </a>
  </div>
</footer>

<!-- MOBILE BOTTOM NAV -->
<nav class="lg:hidden fixed bottom-0 left-0 w-full bg-surface border-t border-outline-variant z-50 flex justify-around items-center h-16 px-gutter">
  <a href="index.html" class="flex flex-col items-center gap-0.5 text-on-surface-variant hover:text-on-surface">
    <span class="material-symbols-outlined text-[22px]">home</span>
    <span class="text-[10px] font-mono uppercase">Inicio</span>
  </a>
  <a href="eventos.html" class="flex flex-col items-center gap-0.5 text-on-surface-variant hover:text-on-surface">
    <span class="material-symbols-outlined text-[22px]">event</span>
    <span class="text-[10px] font-mono uppercase">Eventos</span>
  </a>
  <a href="#" class="flex flex-col items-center gap-0.5 text-accent" aria-current="page">
    <span class="material-symbols-outlined text-[22px] fill-icon">map</span>
    <span class="text-[10px] font-mono uppercase">Mapa</span>
  </a>
  <a href="foro.html" class="flex flex-col items-center gap-0.5 text-on-surface-variant hover:text-on-surface">
    <span class="material-symbols-outlined text-[22px]">forum</span>
    <span class="text-[10px] font-mono uppercase">Intel</span>
  </a>
</nav>

<script>
  // mobile menu toggle
  const menuBtn = document.getElementById('menu-btn');
  const menu = document.getElementById('mobile-menu');
  let open = false;
  menuBtn.addEventListener('click', () => {
    open = !open;
    menuBtn.setAttribute('aria-expanded', String(open));
    menuBtn.querySelector('span').textContent = open ? 'close' : 'menu';
    menu.classList.toggle('-translate-y-[150%]', !open);
    menu.classList.toggle('opacity-0', !open);
    menu.classList.toggle('pointer-events-none', !open);
  });
  menu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
    open = false;
    menuBtn.setAttribute('aria-expanded', 'false');
    menuBtn.querySelector('span').textContent = 'menu';
    menu.classList.add('-translate-y-[150%]', 'opacity-0', 'pointer-events-none');
  }));

  // sticky header elevation
  const header = document.querySelector('header');
  window.addEventListener('scroll', () => header.classList.toggle('shadow-lg', window.scrollY > 20));

  // button press micro-interaction
  document.querySelectorAll('button').forEach(btn => {
    btn.addEventListener('mousedown', () => btn.classList.add('scale-95'));
    ['mouseup', 'mouseleave'].forEach(evt => btn.addEventListener(evt, () => btn.classList.remove('scale-95')));
  });

  // filter placeholder logic
  document.getElementById('filter-region-campos').addEventListener('change', (e) => {
    console.log(`Explorando sector: ${e.target.value}`);
  });
</script>
</body>
</html>