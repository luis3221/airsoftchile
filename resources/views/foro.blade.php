<!DOCTYPE html>
<html class="dark" lang="es">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Foro — Airsoft Chile</title>
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
            "online": "#6fbf73",
            "away": "#e0a83f",
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
    input:focus-visible,
    select:focus-visible {
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

    #mobile-menu,
    #auth-modal .modal-panel {
      transition: transform .25s ease, opacity .2s ease;
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
        <a class="text-on-surface border-b-2 border-accent pb-1 text-sm font-medium" href="{{ url('/foro') }}"
          aria-current="page">Foro</a>
        <a class="text-on-surface-variant hover:text-on-surface transition-colors text-sm font-medium"
          href="{{ url('/canchas') }}">Canchas</a>
        <a class="text-on-surface-variant hover:text-on-surface transition-colors text-sm font-medium"
          href="{{ url('/tiendas') }}">Tiendas</a>
      </div>
      <div class="flex items-center gap-sm">
        <div class="relative hidden sm:block">
          <label for="search-comms" class="sr-only">Buscar en el foro</label>
          <span
            class="material-symbols-outlined absolute left-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">search</span>
          <input id="search-comms"
            class="bg-surface-container-low border border-outline-variant rounded text-on-surface text-sm py-2 pl-9 pr-3 focus:border-accent focus:ring-0 w-48 font-mono placeholder:text-on-surface-variant/60"
            placeholder="Buscar comms…" type="text" />
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
              <span>142 operadores en línea</span><span>·</span>
              <span class="text-accent">Nuevo hilo destacado: regulaciones 2026</span><span>·</span>
              <span>Guía GBBR alcanzó 142 respuestas</span><span>·</span>
              <span>3 publicaciones nuevas en Compra/Venta</span>
            </span>
            <span class="flex gap-xl pr-xl" aria-hidden="true">
              <span>142 operadores en línea</span><span>·</span>
              <span class="text-accent">Nuevo hilo destacado: regulaciones 2026</span><span>·</span>
              <span>Guía GBBR alcanzó 142 respuestas</span><span>·</span>
              <span>3 publicaciones nuevas en Compra/Venta</span>
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
      <a href="{{ url('/foro') }}"
        class="px-4 py-3 rounded-lg bg-primary-container text-on-primary-container font-medium">Foro</a>
      <a href="{{ url('/canchas') }}"
        class="px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high">Canchas</a>
      <a href="{{ url('/tiendas') }}"
        class="px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high">Tiendas</a>
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
    <div class="p-4">
      <button
        class="w-full bg-accent text-on-accent font-display text-base py-3.5 uppercase tracking-wide clipped hover:brightness-110 active:scale-[0.98] transition-all"
        onclick="toggleAuthPrompt()">
        Nueva publicación
      </button>
    </div>
  </aside>

  <!-- ============ MAIN ============ -->
  <main class="lg:pl-60 pt-[6.5rem] pb-24 lg:pb-12 px-gutter grid-overlay min-h-screen">
    <div class="max-w-container-max mx-auto py-lg">

      <!-- Header -->
      <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-md mb-xl">
        <div>
          <div class="flex items-center gap-sm mb-xs">
            <span class="bg-primary text-on-primary font-mono text-[10px] px-2 py-0.5 rounded uppercase">Live
              comms</span>
            <span class="text-on-surface-variant font-mono text-[11px] uppercase tracking-widest">Red táctica</span>
          </div>
          <h1 class="font-display text-3xl sm:text-4xl text-on-surface uppercase tracking-tight">Foro de comando central
          </h1>
        </div>
        <button
          class="bg-accent text-on-accent px-lg py-3 font-display uppercase clipped hover:brightness-110 active:scale-95 transition-all flex items-center gap-2"
          onclick="toggleAuthPrompt()">
          <span class="material-symbols-outlined text-[18px]">add_circle</span> Nueva publicación
        </button>
      </div>

      <div class="grid grid-cols-1 xl:grid-cols-12 gap-lg items-start">

        <!-- Threads column -->
        <div class="xl:col-span-8 space-y-lg">

          <!-- Category selector -->
          <div class="grid grid-cols-2 md:grid-cols-4 gap-sm">
            <button
              class="group p-md bg-surface-container-low border border-outline-variant hover:border-primary/60 transition-colors text-left flex flex-col justify-between h-28 rounded-lg">
              <span class="material-symbols-outlined text-primary text-[28px]">military_tech</span>
              <span class="font-display text-sm text-on-surface uppercase leading-tight">Táctica y estrategia</span>
            </button>
            <button
              class="group p-md bg-surface-container-low border border-outline-variant hover:border-primary/60 transition-colors text-left flex flex-col justify-between h-28 rounded-lg">
              <span class="material-symbols-outlined text-primary text-[28px]">precision_manufacturing</span>
              <span class="font-display text-sm text-on-surface uppercase leading-tight">Equipamiento</span>
            </button>
            <button
              class="group p-md bg-surface-container-low border border-outline-variant hover:border-primary/60 transition-colors text-left flex flex-col justify-between h-28 rounded-lg">
              <span class="material-symbols-outlined text-primary text-[28px]">radar</span>
              <span class="font-display text-sm text-on-surface uppercase leading-tight">Zonas de juego</span>
            </button>
            <button
              class="group p-md bg-surface-container-low border border-outline-variant hover:border-accent/60 transition-colors text-left flex flex-col justify-between h-28 rounded-lg">
              <span class="material-symbols-outlined text-accent text-[28px]">payments</span>
              <span class="font-display text-sm text-accent uppercase leading-tight">Compra / venta</span>
            </button>
          </div>

          <!-- Threads list -->
          <div class="bg-surface-container border border-outline-variant rounded-xl overflow-hidden">
            <div
              class="bg-surface-container-high px-lg py-md border-b border-outline-variant flex justify-between items-center gap-2">
              <h2 class="font-mono text-[12px] uppercase text-primary tracking-wide">Inteligencia reciente / hilos</h2>
              <div class="flex items-center gap-2">
                <label for="sort-threads"
                  class="font-mono text-[11px] text-on-surface-variant uppercase hidden sm:block">Ordenar</label>
                <select id="sort-threads"
                  class="bg-transparent border-none font-mono text-[12px] text-on-surface p-0 cursor-pointer focus:ring-0">
                  <option>Última actividad</option>
                  <option>Más respuestas</option>
                </select>
              </div>
            </div>

            <ul class="divide-y divide-outline-variant">
              <li>
                <a href="#"
                  class="group px-lg py-md flex items-center gap-md hover:bg-surface-container-high transition-colors">
                  <img class="w-10 h-10 rounded object-cover border border-outline-variant shrink-0"
                    alt="Avatar de Viper_Operator, jugador de airsoft con equipo multicam."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6QbgfbmE0ZTBgi30lQNr6LPYtZYQTb8JhJVbJ4bodurRCW1IdlS0IxRwwukCUQriWksPny3RcJulzl7W8XOruIWqTQ6hNMpV4wMvnOroo7ugAwFec1aRHKx7FMAwY4b1aNVhI5NHzl3SNOFCmduzvo2LJyCIToiLEK8BDSzf3lIO05D4geSVXaW6LsLRsbfi8F3vegBT7NC5txOv9amByV7NBrFm9bRUHMygJq7POgvc8rNj_SApPig" />
                  <div class="flex-1 min-w-0">
                    <div class="flex items-center gap-2 mb-1">
                      <span
                        class="font-mono text-[10px] text-accent border border-accent/40 px-1.5 py-0.5 rounded uppercase">Fijado</span>
                      <h3
                        class="font-display text-base text-on-surface truncate group-hover:text-primary transition-colors uppercase">
                        Guía: mantenimiento preventivo de GBBR (2026)</h3>
                    </div>
                    <div class="flex items-center gap-md text-on-surface-variant text-sm flex-wrap">
                      <span>Por <span class="text-primary">Viper_Operator</span></span>
                      <span>Hace 24m</span>
                      <span class="hidden md:inline-flex items-center gap-1"><span
                          class="material-symbols-outlined text-[15px]">comment</span>142</span>
                    </div>
                  </div>
                  <div class="hidden md:flex flex-col items-end shrink-0">
                    <span class="font-mono text-[10px] text-on-surface-variant uppercase">Actividad</span>
                    <span class="text-sm text-primary">Hoy, 14:32</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="#"
                  class="group px-lg py-md flex items-center gap-md hover:bg-surface-container-high transition-colors">
                  <img class="w-10 h-10 rounded object-cover border border-outline-variant shrink-0"
                    alt="Avatar de Ghost_CL, jugador con pasamontañas y gafas tácticas."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZJV4EW1EpOcpE4WKuc_s6jiJ9lebhdG58UJcG00HqT9qr8RN0O4zlb_sd0zd2yr8Q4fbAfIarrg0_W3SG9vsEJwbW40kWvepCopWvN_LA03-Yp18tSdu_CaNK7rLQ6j-80ap4bNxmbTOzix-4E5csxNzPrOVOjzJwKifUlbLwXMc0D4Ehmc_WlACCxceLQfMquoi-hqwMusy2aUGIyiL3kFDTkn4au3kWNlZJpZyI___yVdVdYZchDg" />
                  <div class="flex-1 min-w-0">
                    <h3
                      class="font-display text-base text-on-surface truncate group-hover:text-primary transition-colors uppercase mb-1">
                      [Vendo] Tokyo Marui MWS + 4 cargadores</h3>
                    <div class="flex items-center gap-md text-on-surface-variant text-sm flex-wrap">
                      <span>Por <span class="text-primary">Ghost_CL</span></span>
                      <span>Hace 1h</span>
                      <span class="hidden md:inline-flex items-center gap-1"><span
                          class="material-symbols-outlined text-[15px]">comment</span>12</span>
                    </div>
                  </div>
                  <div class="hidden md:flex flex-col items-end shrink-0">
                    <span class="font-mono text-[10px] text-on-surface-variant uppercase">Actividad</span>
                    <span class="text-sm text-primary">Hoy, 15:01</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="#"
                  class="group px-lg py-md flex items-center gap-md hover:bg-surface-container-high transition-colors">
                  <img class="w-10 h-10 rounded object-cover border border-outline-variant shrink-0"
                    alt="Avatar de Coyote_1, jugador con chaleco táctico y parche de la bandera chilena."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAg_ukF23uDpgUt-PJpHgu4BnvR96jF54WUEMLrCE_NS8RzygWTk2gFcqUz8SeK7cqmhWW-5eeSkKxM9F-J4ytXUVt_MquhkBZQvrQhlq3ydYGa7VRMILjEQF0YRm-GMesv3tjiH5WgwUGxG8PGunTjjldFhgG3xC3F-wGVYpRSkOF7KXBTe5jlVqm6k2lVf7_SHIrlnWL4qJzduGZ-5rPr62bf_-U9ZWxsio9MQDTNxD7wUKnu4Ag8Q" />
                  <div class="flex-1 min-w-0">
                    <h3
                      class="font-display text-base text-on-surface truncate group-hover:text-primary transition-colors uppercase mb-1">
                      Nuevo campo en Melipilla: ¿alguien lo conoce?</h3>
                    <div class="flex items-center gap-md text-on-surface-variant text-sm flex-wrap">
                      <span>Por <span class="text-primary">Coyote_1</span></span>
                      <span>Hace 4h</span>
                      <span class="hidden md:inline-flex items-center gap-1"><span
                          class="material-symbols-outlined text-[15px]">comment</span>45</span>
                    </div>
                  </div>
                  <div class="hidden md:flex flex-col items-end shrink-0">
                    <span class="font-mono text-[10px] text-on-surface-variant uppercase">Actividad</span>
                    <span class="text-sm text-primary">Ayer, 22:15</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="#"
                  class="group px-lg py-md flex items-center gap-md hover:bg-surface-container-high transition-colors">
                  <img class="w-10 h-10 rounded object-cover border border-outline-variant shrink-0"
                    alt="Avatar de Nightfall, operador con camuflaje digital woodland y auriculares tácticos."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBqocGFfEUpNfihdJamaQRObCKgRVXWnDF6c3YmjDviAleZBNFsfgnrKtnoWf8q1BEmxAMrja_5jhsFY4b8vrEBHMtzrGz_RZYr9tuhwy6RjLjFhzWt2-qopoOleMMRNJoi4YkJO-65Q95A9GLBCgnfR7mjUNctVO36uqbEzM1dcELKw46XwSuUs6r6RbtKdBWCV0Lpw3LMzidZXWNnNn5zGKmwzwsZ89tAu3e6SOto-ZzWfswNcSH5Ow" />
                  <div class="flex-1 min-w-0">
                    <h3
                      class="font-display text-base text-on-surface truncate group-hover:text-primary transition-colors uppercase mb-1">
                      Debate: ¿HPA vs AEG en Milsim de larga duración?</h3>
                    <div class="flex items-center gap-md text-on-surface-variant text-sm flex-wrap">
                      <span>Por <span class="text-primary">Nightfall</span></span>
                      <span>Hace 6h</span>
                      <span class="hidden md:inline-flex items-center gap-1"><span
                          class="material-symbols-outlined text-[15px]">comment</span>89</span>
                    </div>
                  </div>
                  <div class="hidden md:flex flex-col items-end shrink-0">
                    <span class="font-mono text-[10px] text-on-surface-variant uppercase">Actividad</span>
                    <span class="text-sm text-primary">23 oct, 11:45</span>
                  </div>
                </a>
              </li>
            </ul>

            <div class="bg-surface-container-high p-md text-center">
              <button class="text-primary font-mono text-[12px] hover:underline uppercase tracking-widest">Cargar más
                comunicaciones</button>
            </div>
          </div>
        </div>

        <!-- Sidebar column -->
        <aside class="xl:col-span-4 space-y-lg">

          <!-- Online members -->
          <div class="bg-surface-container border border-outline-variant rounded-xl overflow-hidden">
            <div
              class="bg-primary-container/40 border-b border-primary/20 px-lg py-md flex justify-between items-center">
              <h3 class="font-display text-base text-primary uppercase">Operadores activos</h3>
              <span class="bg-primary text-on-primary font-mono text-[10px] px-2 py-0.5 rounded">142 en línea</span>
            </div>
            <div class="p-lg">
              <div class="flex flex-wrap gap-sm">
                <span
                  class="flex items-center gap-1.5 bg-surface-container-high px-2 py-1 rounded border border-outline-variant text-sm">
                  <span class="w-1.5 h-1.5 rounded-full bg-online"></span>Viper_Ops
                </span>
                <span
                  class="flex items-center gap-1.5 bg-surface-container-high px-2 py-1 rounded border border-outline-variant text-sm">
                  <span class="w-1.5 h-1.5 rounded-full bg-online"></span>Alpha_CL
                </span>
                <span
                  class="flex items-center gap-1.5 bg-surface-container-high px-2 py-1 rounded border border-outline-variant text-sm">
                  <span class="w-1.5 h-1.5 rounded-full bg-online"></span>Sierra7
                </span>
                <span
                  class="flex items-center gap-1.5 bg-surface-container-high px-2 py-1 rounded border border-outline-variant text-sm">
                  <span class="w-1.5 h-1.5 rounded-full bg-online"></span>Wolf_99
                </span>
                <span
                  class="flex items-center gap-1.5 bg-surface-container-high px-2 py-1 rounded border border-outline-variant text-sm">
                  <span class="w-1.5 h-1.5 rounded-full bg-online"></span>FoxTrot
                </span>
                <span
                  class="flex items-center gap-1.5 bg-surface-container-high px-2 py-1 rounded border border-outline-variant text-sm text-on-surface-variant">
                  <span class="w-1.5 h-1.5 rounded-full bg-away"></span>Admin_Bravo
                </span>
                <span class="text-on-surface-variant font-mono text-[12px] py-1">+136 más</span>
              </div>
            </div>
          </div>

          <!-- Rules -->
          <div class="bg-surface-container border border-outline-variant rounded-xl overflow-hidden">
            <div class="bg-surface-container-high px-lg py-md border-b border-outline-variant">
              <h3 class="font-display text-base text-primary uppercase">Procedimientos estándar</h3>
            </div>
            <div class="p-lg space-y-md">
              <div class="flex gap-md">
                <span class="font-mono text-primary text-lg leading-none">01</span>
                <p class="text-sm text-on-surface-variant leading-relaxed">
                  <strong class="text-on-surface">La honestidad es lo primero.</strong> El airsoft se basa en el honor:
                  cualquier reporte de trampa en campos será sancionado en el foro.
                </p>
              </div>
              <div class="flex gap-md">
                <span class="font-mono text-primary text-lg leading-none">02</span>
                <p class="text-sm text-on-surface-variant leading-relaxed">
                  <strong class="text-on-surface">Sin réplicas reales.</strong> Prohibido publicar armas de fuego reales
                  o accesorios restringidos por ley.
                </p>
              </div>
              <div class="flex gap-md">
                <span class="font-mono text-primary text-lg leading-none">03</span>
                <p class="text-sm text-on-surface-variant leading-relaxed">
                  <strong class="text-on-surface">Categorización.</strong> Mantén los hilos en su sección
                  correspondiente para facilitar la navegación.
                </p>
              </div>
              <button
                class="w-full border border-outline-variant hover:bg-surface-container-high py-2.5 rounded text-sm font-medium transition-colors text-on-surface-variant uppercase tracking-wide">
                Leer procedimientos completos
              </button>
            </div>
          </div>

          <!-- Sponsored -->
          <a href="#" class="relative group block h-44 rounded-xl overflow-hidden border border-outline-variant">
            <img
              class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
              alt="Vitrina de tienda de equipamiento táctico con réplicas de airsoft de alta gama iluminadas."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuAjANhbHWwmUMFdUCyo2nN4mkptBiLaOfxbg1Pob42endu4yFEHajfDlmaMj12JiIls31zWdPdvhYZRYvrxy6CbJJibkZphE9cn-aB1Z0X-35YJlPhL2yRxGstmmebflXnyUbNSdWaxf_-Bd2NK05eat62jYWklS03Fj1PwNuXG0_VFu0FotbsMis--WIcHM1VNPhDjrRTPTE-3GebZQALbUDxecYxtqzZGQI_3oiwg4-rI0Rkdh4YZNg" />
            <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/40 to-transparent"></div>
            <div class="absolute bottom-0 left-0 p-md">
              <span
                class="bg-accent text-on-accent font-mono text-[10px] px-2 py-0.5 rounded uppercase mb-2 inline-block">Contenido
                patrocinado</span>
              <h4 class="font-display text-base text-on-surface uppercase">Tactical Depot Chile</h4>
              <p class="text-sm text-on-surface-variant">15% de descuento para operadores registrados</p>
            </div>
          </a>
        </aside>
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
      <a aria-label="RSS"
        class="w-10 h-10 bg-surface-container rounded-lg border border-outline-variant flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors"
        href="#">
        <span class="material-symbols-outlined text-[20px]">rss_feed</span>
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
    <a href="{{ url('/foro') }}" class="flex flex-col items-center gap-0.5 text-accent" aria-current="page">
      <span class="material-symbols-outlined text-[22px] fill-icon">forum</span>
      <span class="text-[10px] font-mono uppercase">Foro</span>
    </a>
  </nav>

  <!-- AUTH MODAL -->
  <div class="fixed inset-0 z-[100] hidden items-center justify-center px-gutter" id="auth-modal">
    <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" onclick="toggleAuthPrompt()"></div>
    <div
      class="modal-panel relative w-full max-w-md bg-surface-container border border-outline-variant p-xl rounded-xl clipped shadow-2xl"
      role="dialog" aria-modal="true" aria-labelledby="auth-title">
      <div class="flex flex-col items-center text-center mb-lg">
        <span class="material-symbols-outlined text-primary text-[44px] mb-md">lock_person</span>
        <h2 id="auth-title" class="font-display text-2xl text-on-surface uppercase">Autenticación requerida</h2>
        <p class="text-on-surface-variant mt-sm">Debes ser un operador registrado para iniciar una nueva publicación.
        </p>
      </div>
      <div class="space-y-sm">
        <button
          class="w-full bg-primary text-on-primary py-3 rounded font-medium uppercase tracking-wide hover:brightness-110 transition-all">Iniciar
          sesión</button>
        <button
          class="w-full border border-outline-variant text-on-surface py-3 rounded font-medium uppercase tracking-wide hover:bg-surface-container-high transition-colors">Solicitar
          alistamiento (registrarse)</button>
      </div>
      <button
        class="mt-lg text-on-surface-variant font-mono text-[11px] uppercase hover:text-primary w-full text-center transition-colors"
        onclick="toggleAuthPrompt()">Abortar operación</button>
    </div>
  </div>

  <script>
    function toggleAuthPrompt() {
      const modal = document.getElementById('auth-modal');
      const isHidden = modal.classList.contains('hidden');
      if (isHidden) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
      } else {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = 'auto';
      }
    }
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        const modal = document.getElementById('auth-modal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = 'auto';
      }
    });

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
  </script>
</body>

</html>