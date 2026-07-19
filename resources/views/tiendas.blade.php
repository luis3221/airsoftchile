<!DOCTYPE html>
<html class="dark" lang="es">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Tiendas — Airsoft Chile</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@500;600;700&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
    rel="stylesheet" />
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
    body {
      background-color: #0a0c0d;
      color: #ecede7;
      -webkit-font-smoothing: antialiased;
    }

    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }

    .fill-icon {
      font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' 0, 'opsz' 24;
    }

    .clipped {
      clip-path: polygon(0 0, 94% 0, 100% 22%, 100% 100%, 6% 100%, 0 78%);
    }

    .grid-overlay {
      background-image: radial-gradient(circle, #2b3033 1px, transparent 1px);
      background-size: 22px 22px;
    }

    .ticker-track {
      animation: ticker 28s linear infinite;
    }

    .ticker-track:hover {
      animation-play-state: paused;
    }

    @keyframes ticker {
      from {
        transform: translateX(0);
      }

      to {
        transform: translateX(-50%);
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .ticker-track {
        animation: none;
      }
    }

    a:focus-visible,
    button:focus-visible,
    input:focus-visible {
      outline: 2px solid #ff8a3d;
      outline-offset: 2px;
    }

    ::-webkit-scrollbar {
      width: 6px;
    }

    ::-webkit-scrollbar-track {
      background: #0a0c0d;
    }

    ::-webkit-scrollbar-thumb {
      background: #2b3033;
      border-radius: 3px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #a8b48c;
    }

    #mobile-menu {
      transition: transform .25s ease, opacity .2s ease;
    }

    input[type="checkbox"] {
      accent-color: #ff8a3d;
    }
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
        <a class="text-on-surface-variant hover:text-on-surface transition-colors text-sm font-medium"
          href="{{ url('/eventos') }}">Eventos</a>
        <a class="text-on-surface-variant hover:text-on-surface transition-colors text-sm font-medium"
          href="{{ url('/foro') }}">Foro</a>
        <a class="text-on-surface-variant hover:text-on-surface transition-colors text-sm font-medium"
          href="{{ url('/canchas') }}">Canchas</a>
        <a class="text-on-surface border-b-2 border-accent pb-1 text-sm font-medium" href="{{ url('/tiendas') }}"
          aria-current="page">Tiendas</a>
      </div>
      <div class="flex items-center gap-sm">
        <div class="relative hidden sm:block">
          <label for="search-tiendas" class="sr-only">Buscar tiendas</label>
          <span
            class="material-symbols-outlined absolute left-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">search</span>
          <input id="search-tiendas"
            class="bg-surface-container-low border border-outline-variant rounded text-on-surface text-sm py-2 pl-9 pr-3 focus:border-accent focus:ring-0 w-48 font-mono placeholder:text-on-surface-variant/60"
            placeholder="Buscar tiendas…" type="text" />
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
              <span>34 tiendas activas · envíos a todo Chile</span><span>·</span>
              <span class="text-accent">Pre-order VFC GBB Series ya disponible</span><span>·</span>
              <span>Valpo Tactical Center: logística reducida esta semana</span>
            </span>
            <span class="flex gap-xl pr-xl" aria-hidden="true">
              <span>34 tiendas activas · envíos a todo Chile</span><span>·</span>
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
      <a href="eventos.html"
        class="px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high">Eventos</a>
      <a href="foro.html" class="px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high">Foro</a>
      <a href="canchas.html"
        class="px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high">Canchas</a>
      <a href="#" class="px-4 py-3 rounded-lg bg-primary-container text-on-primary-container font-medium">Tiendas</a>
    </div>
  </div>

  <!-- ============ SIDEBAR (desktop) ============ -->
  <aside
    class="hidden lg:flex flex-col fixed left-0 top-[6.5rem] h-[calc(100%-6.5rem)] z-30 bg-surface-container border-r border-outline-variant w-60">
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
      <!-- Enlace a Inicio (welcome.blade.php) -->
      <a class="bg-primary-container text-on-primary-container rounded-lg px-4 py-3 flex items-center gap-md text-sm font-medium"
        href="{{ url('/') }}">
        <span class="material-symbols-outlined text-[20px]">home</span> Inicio
      </a>

      <!-- Enlace a Eventos (eventos.blade.php) -->
      <a class="text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high px-4 py-3 rounded-lg flex items-center gap-md text-sm font-medium transition-colors"
        href="{{ url('/eventos') }}">
        <span class="material-symbols-outlined text-[20px]">event</span> Eventos
      </a>

      <!-- Enlace a Foro (foro.blade.php) -->
      <a class="text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high px-4 py-3 rounded-lg flex items-center gap-md text-sm font-medium transition-colors"
        href="{{ url('/foro') }}">
        <span class="material-symbols-outlined text-[20px]">forum</span> Foro
      </a>

      <!-- Enlace a Canchas (canchas.blade.php) -->
      <a class="text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high px-4 py-3 rounded-lg flex items-center gap-md text-sm font-medium transition-colors"
        href="{{ url('/canchas') }}">
        <span class="material-symbols-outlined text-[20px]">map</span> Canchas
      </a>

      <!-- Enlace a Tiendas (tiendas.blade.php) -->
      <a class="text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high px-4 py-3 rounded-lg flex items-center gap-md text-sm font-medium transition-colors"
        href="{{ url('/tiendas') }}">
        <span class="material-symbols-outlined text-[20px]">storefront</span> Tiendas
      </a>
    </nav>
    <div class="p-4 space-y-2 border-t border-outline-variant pt-4">
      <button
        class="w-full bg-accent text-on-accent font-display text-base py-3.5 uppercase tracking-wide clipped hover:brightness-110 active:scale-[0.98] transition-all">
        Publicar Tienda
      </button>
      <a class="flex items-center gap-md text-on-surface-variant hover:text-on-surface px-4 py-2 text-sm transition-colors"
        href="#">
        <span class="material-symbols-outlined text-[20px]">settings</span> Ajustes
      </a>
      <a class="flex items-center gap-md text-on-surface-variant hover:text-on-surface px-4 py-2 text-sm transition-colors"
        href="#">
        <span class="material-symbols-outlined text-[20px]">help</span> Soporte
      </a>
    </div>
  </aside>

  <!-- ============ MAIN ============ -->
  <main class="lg:pl-60 pt-[6.5rem] pb-24 lg:pb-12 px-gutter grid-overlay min-h-screen">
    <div class="max-w-container-max mx-auto py-lg">

      <!-- Header -->
      <div class="flex flex-col md:flex-row md:items-end justify-between gap-md mb-xl">
        <div>
          <h1 class="font-display text-3xl sm:text-4xl text-on-surface uppercase tracking-tight mb-xs">Directorio de
            tiendas</h1>
          <p class="text-on-surface-variant leading-relaxed">Red de proveedores tácticos autorizados en todo el
            territorio nacional.</p>
        </div>
        <div class="flex gap-sm">
          <span
            class="px-3 py-1.5 bg-surface-container-high border border-outline-variant text-primary font-mono text-[12px] rounded">34
            activas</span>
          <span
            class="px-3 py-1.5 bg-accent-container border border-accent/40 text-accent font-mono text-[12px] rounded">Envíos
            nacionales</span>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-12 gap-lg">

        <!-- Filters -->
        <aside class="md:col-span-3 space-y-lg">
          <section class="bg-surface-container border border-outline-variant p-md rounded-lg space-y-md"
            aria-label="Filtrar por región">
            <h2 class="font-display text-lg text-primary uppercase border-b border-outline-variant pb-2">Región</h2>
            <div class="space-y-2">
              <label class="flex items-center gap-2 cursor-pointer group">
                <input class="rounded border-outline-variant bg-surface-container-high" type="checkbox" />
                <span
                  class="text-sm text-on-surface-variant group-hover:text-on-surface transition-colors">Metropolitana</span>
              </label>
              <label class="flex items-center gap-2 cursor-pointer group">
                <input class="rounded border-outline-variant bg-surface-container-high" type="checkbox" />
                <span
                  class="text-sm text-on-surface-variant group-hover:text-on-surface transition-colors">Valparaíso</span>
              </label>
              <label class="flex items-center gap-2 cursor-pointer group">
                <input class="rounded border-outline-variant bg-surface-container-high" type="checkbox" />
                <span
                  class="text-sm text-on-surface-variant group-hover:text-on-surface transition-colors">Biobío</span>
              </label>
              <label class="flex items-center gap-2 cursor-pointer group">
                <input class="rounded border-outline-variant bg-surface-container-high" type="checkbox" />
                <span
                  class="text-sm text-on-surface-variant group-hover:text-on-surface transition-colors">Araucanía</span>
              </label>
            </div>
          </section>

          <section class="bg-surface-container border border-outline-variant p-md rounded-lg space-y-md"
            aria-label="Filtrar por categoría">
            <h2 class="font-display text-lg text-primary uppercase border-b border-outline-variant pb-2">Categoría</h2>
            <div class="flex flex-wrap gap-1.5">
              <button
                class="px-2.5 py-1 bg-surface-container-high text-on-surface border border-outline-variant text-[11px] uppercase font-medium rounded hover:border-primary transition-colors">AEG</button>
              <button
                class="px-2.5 py-1 bg-surface-container-high text-on-surface border border-outline-variant text-[11px] uppercase font-medium rounded hover:border-primary transition-colors">GBB</button>
              <button
                class="px-2.5 py-1 bg-surface-container-high text-on-surface border border-outline-variant text-[11px] uppercase font-medium rounded hover:border-primary transition-colors">Equipo</button>
              <button
                class="px-2.5 py-1 bg-surface-container-high text-on-surface border border-outline-variant text-[11px] uppercase font-medium rounded hover:border-primary transition-colors">Taller</button>
              <button
                class="px-2.5 py-1 bg-surface-container-high text-on-surface border border-outline-variant text-[11px] uppercase font-medium rounded hover:border-primary transition-colors">Ópticas</button>
            </div>
          </section>

          <!-- Promo -->
          <a href="#"
            class="relative overflow-hidden rounded-lg border border-outline-variant h-56 flex items-end p-md group block">
            <div class="absolute inset-0 bg-gradient-to-t from-surface to-transparent z-10"></div>
            <img
              class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
              alt="Réplica de airsoft MK18 personalizada sobre una mesa de trabajo de fibra de carbono, iluminada con luz ámbar."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0jU_jxXCHnd9tY3MQGA0UMj3Y5G85ychQ8ouqNe6zIdBzqIU2xdEH-EPziGgiR0gyYo6u9ugfG8R02mDV-3Vsjl1QbnggJkDghcw86a66qPjRyIpBkLqqiE21jfrffkX2JIC2Z_Cj-tUiQFbJToD79m5Hx7pIGF23_nKUOw_ntLT5a9RSuEr3YnOy9wQR1MYJFwmvuxJ3fJDzOk-m817De7cHtldPjldftz2znJnfFekT6qxWsVrzkw" />
            <div class="relative z-20">
              <p class="font-mono text-[11px] text-accent uppercase mb-1">Oferta táctica</p>
              <h3 class="font-display text-lg text-on-surface leading-tight">Pre-order: VFC GBB Series 2026</h3>
            </div>
          </a>
        </aside>

        <!-- Stores grid -->
        <div class="md:col-span-9 grid grid-cols-1 xl:grid-cols-2 gap-lg">

          <!-- Store 1 -->
          <article
            class="bg-surface-container border border-outline-variant rounded-lg overflow-hidden flex flex-col group hover:border-primary/50 transition-colors">
            <div
              class="px-md py-1.5 bg-surface-container-high flex items-center justify-between border-b border-outline-variant">
              <span class="font-mono text-[10px] text-primary uppercase">Operacional</span>
              <span class="font-mono text-[10px] text-on-surface-variant">ID: ST-8821-SCL</span>
            </div>
            <div class="p-md flex flex-col sm:flex-row gap-md">
              <div
                class="w-full sm:w-28 h-28 bg-surface border border-outline-variant rounded-lg overflow-hidden shrink-0">
                <img class="w-full h-full object-contain p-2"
                  alt="Logo de la tienda Tactical Santiago, un casco espartano geométrico estilizado con una mira de rifle."
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuDCjKRUOs9JPESY1d5bvIq4R5EKEfSGH5u8-E0MIuAqxNeoFSg5ovDIe7uY872KEvIMyH-_aaTRXBP8LgtnzJPqaEgJ3xVgTr5mbcw9-zjABc7CazOfRkkx-R63clQv1qWqLDBiztQjgMQBGWJa5LhAkmguVL_b2iZrMFrp-rt7ftoKOUzTKzh1EEsgLc0oOs21O6Hqp2KZJVySU6Yd_cB1BpBY5HtuH9h6W7uNw0uxoqTblsGRgkxNMQ" />
              </div>
              <div class="flex-1 space-y-2 min-w-0">
                <div class="flex justify-between items-start gap-2">
                  <div class="min-w-0">
                    <h2 class="font-display text-lg text-on-surface uppercase truncate">Tactical Santiago</h2>
                    <p class="text-sm text-on-surface-variant flex items-center gap-1 truncate">
                      <span class="material-symbols-outlined text-[15px] shrink-0">location_on</span> Providencia, RM
                    </p>
                  </div>
                  <div class="flex flex-col items-end shrink-0">
                    <span class="text-accent font-display text-lg leading-none">4.9</span>
                    <div class="flex text-accent" aria-label="4.9 de 5 estrellas">
                      <span class="material-symbols-outlined fill-icon text-[13px]">star</span>
                      <span class="material-symbols-outlined fill-icon text-[13px]">star</span>
                      <span class="material-symbols-outlined fill-icon text-[13px]">star</span>
                      <span class="material-symbols-outlined fill-icon text-[13px]">star</span>
                      <span class="material-symbols-outlined fill-icon text-[13px]">star</span>
                    </div>
                  </div>
                </div>
                <div class="flex flex-wrap gap-1.5">
                  <span
                    class="px-1.5 py-0.5 bg-primary-container text-on-primary-container text-[10px] font-semibold rounded border border-primary/30">AEG
                    Expert</span>
                  <span
                    class="px-1.5 py-0.5 bg-surface-container-high text-on-surface-variant text-[10px] font-semibold rounded border border-outline-variant">GBB
                    Specialist</span>
                </div>
                <p class="text-sm text-on-surface-variant line-clamp-2">Distribuidor oficial de marcas premium como
                  G&amp;G, Krytac y Tokyo Marui. Taller certificado in situ.</p>
              </div>
            </div>
            <div class="mt-auto p-md grid grid-cols-2 gap-2 border-t border-outline-variant bg-surface-container-low">
              <button
                class="flex items-center justify-center gap-1.5 py-2 bg-surface-container-high border border-outline-variant hover:border-primary transition-colors text-on-surface text-sm font-medium rounded">
                <span class="material-symbols-outlined text-[16px]">phone</span> Contactar
              </button>
              <button
                class="flex items-center justify-center gap-1.5 py-2 bg-accent text-on-accent hover:brightness-110 transition-all text-sm font-medium rounded">
                <span class="material-symbols-outlined text-[16px]">shopping_cart</span> Ver stock
              </button>
            </div>
          </article>

          <!-- Store 2 -->
          <article
            class="bg-surface-container border border-outline-variant rounded-lg overflow-hidden flex flex-col group hover:border-primary/50 transition-colors">
            <div
              class="px-md py-1.5 bg-surface-container-high flex items-center justify-between border-b border-outline-variant">
              <span class="font-mono text-[10px] text-primary uppercase">Operacional</span>
              <span class="font-mono text-[10px] text-on-surface-variant">ID: ST-9942-CCP</span>
            </div>
            <div class="p-md flex flex-col sm:flex-row gap-md">
              <div
                class="w-full sm:w-28 h-28 bg-surface border border-outline-variant rounded-lg overflow-hidden shrink-0">
                <img class="w-full h-full object-contain p-2"
                  alt="Logo de Biobío Armory, escudo con cargadores de airsoft cruzados y silueta de pino."
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuBLCxJQ76pqzYywjjvTTYqAF1Z2h-Q0aZB93gaIfw1XzCRCJfPEnwCYoAG4F4BreV5czysCNAKW7Fal5DlK13CaFHV5lOVQj5yyHiyfRQX6y9H1Rylo5ntcaR-2OQIlS6ll_YA26qXmtRyz8MUE2jpvUntA6f0MQdXzUSrzqXf_IKe-eBttc0erSXYlNoWfRcZAIN7JXd-vUJw-28tSyMe28e_qwrCRPPXiOql1LSBGg9UoOh1ME_BPSg" />
              </div>
              <div class="flex-1 space-y-2 min-w-0">
                <div class="flex justify-between items-start gap-2">
                  <div class="min-w-0">
                    <h2 class="font-display text-lg text-on-surface uppercase truncate">Biobío Armory</h2>
                    <p class="text-sm text-on-surface-variant flex items-center gap-1 truncate">
                      <span class="material-symbols-outlined text-[15px] shrink-0">location_on</span> Concepción, Biobío
                    </p>
                  </div>
                  <div class="flex flex-col items-end shrink-0">
                    <span class="text-accent font-display text-lg leading-none">4.7</span>
                    <div class="flex text-accent" aria-label="4.7 de 5 estrellas">
                      <span class="material-symbols-outlined fill-icon text-[13px]">star</span>
                      <span class="material-symbols-outlined fill-icon text-[13px]">star</span>
                      <span class="material-symbols-outlined fill-icon text-[13px]">star</span>
                      <span class="material-symbols-outlined fill-icon text-[13px]">star</span>
                      <span class="material-symbols-outlined fill-icon text-[13px]">star_half</span>
                    </div>
                  </div>
                </div>
                <div class="flex flex-wrap gap-1.5">
                  <span
                    class="px-1.5 py-0.5 bg-primary-container text-on-primary-container text-[10px] font-semibold rounded border border-primary/30">Equipo
                    y nylon</span>
                  <span
                    class="px-1.5 py-0.5 bg-surface-container-high text-on-surface-variant text-[10px] font-semibold rounded border border-outline-variant">Outdoor</span>
                </div>
                <p class="text-sm text-on-surface-variant line-clamp-2">Líderes en equipamiento táctico y vestimenta
                  milsim en el sur de Chile. Envíos flash a todo el país.</p>
              </div>
            </div>
            <div class="mt-auto p-md grid grid-cols-2 gap-2 border-t border-outline-variant bg-surface-container-low">
              <button
                class="flex items-center justify-center gap-1.5 py-2 bg-surface-container-high border border-outline-variant hover:border-primary transition-colors text-on-surface text-sm font-medium rounded">
                <span class="material-symbols-outlined text-[16px]">phone</span> Contactar
              </button>
              <button
                class="flex items-center justify-center gap-1.5 py-2 bg-accent text-on-accent hover:brightness-110 transition-all text-sm font-medium rounded">
                <span class="material-symbols-outlined text-[16px]">shopping_cart</span> Ver stock
              </button>
            </div>
          </article>

          <!-- Store 3 -->
          <article
            class="bg-surface-container border border-outline-variant rounded-lg overflow-hidden flex flex-col group hover:border-primary/50 transition-colors">
            <div
              class="px-md py-1.5 bg-surface-container-high flex items-center justify-between border-b border-outline-variant">
              <span class="font-mono text-[10px] text-danger uppercase">Logística reducida</span>
              <span class="font-mono text-[10px] text-on-surface-variant">ID: ST-7104-VAP</span>
            </div>
            <div class="p-md flex flex-col sm:flex-row gap-md">
              <div
                class="w-full sm:w-28 h-28 bg-surface border border-outline-variant rounded-lg overflow-hidden shrink-0">
                <img class="w-full h-full object-contain p-2"
                  alt="Logo de Valpo Tactical Center, una brújula náutica combinada con un riel picatinny."
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuDB-JO5CB60tOxWpDJ6Cx2e9MVHbxQP6vAemAJLTz-bg2MjHLV5xvdHluIRBU10oIF9Y01DBd53cdT7_vxnD2GlfK2pRTOtnT1EyCV3A6t310c-9DPO1BVzCCVVL5GFWZ-Mdo84nHmbY6WGGAbP2o5KDhj6C-7Kj3LpfT7dAE53YyIc_MCNHK3DEKmg2G3Q6DRAD4n6SYt1WJkMPwplZCPXOh30jy5dFY_rQH9fmLZwRRVSeefMfH77zg" />
              </div>
              <div class="flex-1 space-y-2 min-w-0">
                <div class="flex justify-between items-start gap-2">
                  <div class="min-w-0">
                    <h2 class="font-display text-lg text-on-surface uppercase truncate">Valpo Tactical Center</h2>
                    <p class="text-sm text-on-surface-variant flex items-center gap-1 truncate">
                      <span class="material-symbols-outlined text-[15px] shrink-0">location_on</span> Viña del Mar,
                      Valparaíso
                    </p>
                  </div>
                  <div class="flex flex-col items-end shrink-0">
                    <span class="text-accent font-display text-lg leading-none">4.5</span>
                    <div class="flex text-accent" aria-label="4.5 de 5 estrellas">
                      <span class="material-symbols-outlined fill-icon text-[13px]">star</span>
                      <span class="material-symbols-outlined fill-icon text-[13px]">star</span>
                      <span class="material-symbols-outlined fill-icon text-[13px]">star</span>
                      <span class="material-symbols-outlined fill-icon text-[13px]">star</span>
                      <span class="material-symbols-outlined fill-icon text-[13px]">star_half</span>
                    </div>
                  </div>
                </div>
                <div class="flex flex-wrap gap-1.5">
                  <span
                    class="px-1.5 py-0.5 bg-primary-container text-on-primary-container text-[10px] font-semibold rounded border border-primary/30">Taller
                    HPA</span>
                  <span
                    class="px-1.5 py-0.5 bg-surface-container-high text-on-surface-variant text-[10px] font-semibold rounded border border-outline-variant">Consumibles</span>
                </div>
                <p class="text-sm text-on-surface-variant line-clamp-2">Especialistas en sistemas HPA y personalización
                  de réplicas. Amplio stock de BBs de alta gama.</p>
              </div>
            </div>
            <div class="mt-auto p-md grid grid-cols-2 gap-2 border-t border-outline-variant bg-surface-container-low">
              <button
                class="flex items-center justify-center gap-1.5 py-2 bg-surface-container-high border border-outline-variant hover:border-primary transition-colors text-on-surface text-sm font-medium rounded">
                <span class="material-symbols-outlined text-[16px]">phone</span> Contactar
              </button>
              <button
                class="flex items-center justify-center gap-1.5 py-2 bg-accent text-on-accent hover:brightness-110 transition-all text-sm font-medium rounded">
                <span class="material-symbols-outlined text-[16px]">shopping_cart</span> Ver stock
              </button>
            </div>
          </article>

          <!-- Add store CTA -->
          <button
            class="border-2 border-dashed border-outline-variant rounded-lg flex flex-col items-center justify-center p-xl group hover:border-primary transition-colors bg-surface-container/30 text-center">
            <span
              class="material-symbols-outlined text-outline-variant group-hover:text-primary mb-md transition-colors text-[40px]">add_business</span>
            <h3
              class="font-display text-lg text-on-surface-variant group-hover:text-on-surface transition-colors uppercase">
              Registra tu tienda</h3>
            <p class="text-sm text-on-surface-variant max-w-xs mt-1">Únete a la red más grande de proveedores de airsoft
              en Chile y aumenta tu alcance.</p>
          </button>
        </div>
      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <footer
    class="lg:pl-60 w-full py-xl px-gutter flex flex-col md:flex-row justify-between items-center gap-md bg-surface-container-lowest border-t border-outline-variant">
    <div class="flex flex-col items-center md:items-start gap-sm">
      <div class="font-display text-lg text-primary uppercase">Airsoft Chile</div>
      <p class="font-mono text-[11px] text-on-surface-variant uppercase tracking-tight">© 2026 Airsoft Chile — Red
        Táctica Comunitaria</p>
    </div>
    <div class="flex flex-wrap justify-center gap-lg">
      <a class="font-mono text-[11px] text-on-surface-variant hover:text-primary transition-colors hover:underline uppercase"
        href="#">Privacidad</a>
      <a class="font-mono text-[11px] text-on-surface-variant hover:text-primary transition-colors hover:underline uppercase"
        href="#">Guías de campo</a>
      <a class="font-mono text-[11px] text-on-surface-variant hover:text-primary transition-colors hover:underline uppercase"
        href="#">Patrocinios</a>
      <a class="font-mono text-[11px] text-on-surface-variant hover:text-primary transition-colors hover:underline uppercase"
        href="#">Contactar comando</a>
    </div>
    <div class="flex gap-md">
      <a aria-label="Compartir"
        class="w-10 h-10 bg-surface-container rounded-lg border border-outline-variant flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors"
        href="#">
        <span class="material-symbols-outlined text-[20px]">share</span>
      </a>
      <a aria-label="Sitio web"
        class="w-10 h-10 bg-surface-container rounded-lg border border-outline-variant flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors"
        href="#">
        <span class="material-symbols-outlined text-[20px]">public</span>
      </a>
    </div>
  </footer>

  <!-- MOBILE BOTTOM NAV -->
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
      btn.addEventListener('mousedown', () => btn.style.transform = 'scale(0.97)');
      ['mouseup', 'mouseleave'].forEach(evt => btn.addEventListener(evt, () => btn.style.transform = 'scale(1)'));
    });
  </script>
</body>

</html>