<!DOCTYPE html>
<html class="dark" lang="es">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Eventos — Airsoft Chile</title>
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
          borderRadius: {
            DEFAULT: "0.2rem",
            lg: "0.35rem",
            xl: "0.6rem",
            full: "0.75rem",
          },
          spacing: {
            "container-max": "1280px",
            gutter: "20px",
            md: "16px",
            xs: "4px",
            lg: "24px",
            xl: "48px",
            sm: "8px",
          },
          fontFamily: {
            display: ["Archivo Narrow", "sans-serif"],
            body: ["Inter", "sans-serif"],
            mono: ["JetBrains Mono", "monospace"],
          },
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

    #mobile-menu {
      transition: transform .25s ease, opacity .2s ease;
    }

    @keyframes slideDownFade {
      from {
        opacity: 0;
        transform: translateY(-15px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-new-card {
      animation: slideDownFade 0.5s ease-out forwards;
    }
  </style>
</head>

<body class="font-body text-[15px] overflow-x-hidden">
  //publicar evento modal
  <!-- MODAL OVERLAY -->
  <div class="hidden fixed inset-0 z-[100] flex items-center justify-center p-md md:p-xl" id="publish-modal">
    <!-- BACKDROP (Fondo oscuro) -->
    <div class="absolute inset-0 bg-surface-container-lowest/90 backdrop-blur-sm cursor-pointer"
      id="publish-modal-backdrop"></div>

    <!-- MODAL CONTAINER -->
    <div
      class="relative w-full max-w-5xl max-h-[90vh] bg-surface-container border border-outline-variant rounded-none flex flex-col md:flex-row overflow-hidden tactical-border shadow-2xl z-10">

      <!-- LEFT COLUMN: FORM -->
      <div class="flex-1 p-lg overflow-y-auto border-r border-outline-variant">
        <div class="flex items-center gap-sm mb-lg">
          <span class="material-symbols-outlined text-secondary"
            style="font-variation-settings: 'FILL' 1;">add_circle</span>
          <h2 class="font-headline-md text-headline-md uppercase tracking-widest text-secondary">Draft New Mission</h2>
        </div>

        <form id="publish-form" class="space-y-lg">
          <!-- Event Name -->
          <div class="space-y-xs">
            <label class="font-label-md text-label-md text-outline uppercase">Operation Name</label>
            <input id="in-name"
              class="w-full bg-surface-container-low border-b-2 border-outline-variant focus:border-secondary focus:ring-0 text-body-lg font-headline-sm px-0 py-sm transition-all placeholder:text-surface-variant"
              placeholder="e.g. OPERATION DESERT FOX" type="text" required />
          </div>

          <!-- Date & Time Row -->
          <div class="grid grid-cols-2 gap-md">
            <div class="space-y-xs">
              <label class="font-label-md text-label-md text-outline uppercase">Insertion Date</label>
              <input id="in-date"
                class="w-full bg-surface-container-lowest border border-outline-variant text-on-surface-variant p-sm rounded-none focus:border-secondary focus:ring-0"
                type="date" required />
            </div>
            <div class="space-y-xs">
              <label class="font-label-md text-label-md text-outline uppercase">Deployment Time</label>
              <input id="in-time"
                class="w-full bg-surface-container-lowest border border-outline-variant text-on-surface-variant p-sm rounded-none focus:border-secondary focus:ring-0"
                type="time" required />
            </div>
          </div>

          <!-- Location -->
          <div class="space-y-xs">
            <label class="font-label-md text-label-md text-outline uppercase">AO Location (Coordinates/Field)</label>
            <div class="relative">
              <span
                class="material-symbols-outlined absolute left-sm top-1/2 -translate-y-1/2 text-outline-variant">location_on</span>
              <input id="in-location"
                class="w-full bg-surface-container-lowest border border-outline-variant text-on-surface-variant pl-xl pr-sm py-sm rounded-none focus:border-secondary focus:ring-0"
                placeholder="Sector 7 Field, Santiago" type="text" required />
            </div>
          </div>

          <!-- Grid Layout for Specs -->
          <div class="grid grid-cols-3 gap-md">
            <div class="space-y-xs">
              <label class="font-label-md text-label-md text-outline uppercase">Game Type</label>
              <select id="in-type"
                class="w-full bg-surface-container-lowest border border-outline-variant text-on-surface-variant p-sm rounded-none focus:border-secondary focus:ring-0 appearance-none">
                <option>OPEN PLAY</option>
                <option selected>MILSIM</option>
                <option>SPEEDSOFT</option>
                <option>NIGHT OPS</option>
              </select>
            </div>
            <div class="space-y-xs">
              <label class="font-label-md text-label-md text-outline uppercase">Fee (CLP)</label>
              <input id="in-fee"
                class="w-full bg-surface-container-lowest border border-outline-variant text-on-surface-variant p-sm rounded-none focus:border-secondary focus:ring-0"
                placeholder="10.000" type="number" required />
            </div>
            <div class="space-y-xs">
              <label class="font-label-md text-label-md text-outline uppercase">Slots</label>
              <input id="in-slots"
                class="w-full bg-surface-container-lowest border border-outline-variant text-on-surface-variant p-sm rounded-none focus:border-secondary focus:ring-0"
                placeholder="50" type="number" required />
            </div>
          </div>

          <!-- Image Upload Area -->
          <div class="space-y-xs">
            <label class="font-label-md text-label-md text-outline uppercase">Intel Assets (Banner)</label>
            <div
              class="relative w-full h-32 border-2 border-dashed border-outline-variant flex flex-col items-center justify-center gap-sm bg-surface-container-lowest hover:bg-surface-container-high transition-colors cursor-pointer group overflow-hidden">
              <span
                class="material-symbols-outlined text-outline-variant group-hover:text-secondary z-10 pointer-events-none">add_a_photo</span>
              <span id="upload-label"
                class="font-label-md text-label-md text-outline-variant uppercase z-10 pointer-events-none">Upload
                Mission Visuals</span>
              <!-- Input file real -->
              <input id="in-image" type="file" accept="image/*"
                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20" />
            </div>
          </div>

          <!-- Action Buttons (Movidos dentro del form) -->
          <div class="mt-xl flex items-center justify-end gap-md border-t border-outline-variant pt-lg">
            <button type="button" id="btn-close-modal"
              class="px-lg py-md font-label-md text-label-md text-on-surface-variant uppercase hover:text-on-surface transition-colors cursor-pointer">
              Abort Mission
            </button>
            <button type="submit" id="btn-submit-mission"
              class="px-xl py-md bg-secondary text-surface-container-lowest font-headline-sm uppercase clip-corner hover:bg-secondary-container active:scale-95 transition-all flex items-center gap-sm cursor-pointer">
              Confirm &amp; Publish
              <span class="material-symbols-outlined text-body-md"
                style="font-variation-settings: 'FILL' 1;">send</span>
            </button>
          </div>
        </form>
      </div>

      <!-- RIGHT COLUMN: PREVIEW CARD -->
      <div class="hidden md:flex w-[400px] bg-surface-container-low p-lg flex-col">
        <div class="flex items-center justify-between mb-md">
          <span class="font-label-md text-label-md text-outline uppercase">Live Preview</span>
          <span
            class="px-sm py-xs bg-error/10 text-error font-mono-sm text-label-md rounded-none border border-error/20">[STANDBY]</span>
        </div>

        <!-- PREVIEW CARD COMPONENT -->
        <div class="w-full bg-surface-container-lowest border border-outline-variant relative group">
          <!-- Status Bar -->
          <div class="h-6 bg-surface-variant border-b border-outline-variant px-sm flex items-center justify-between">
            <span class="font-mono-sm text-[10px] text-on-surface-variant">OPERATIONAL INTEL</span>
            <div class="flex gap-1">
              <div class="w-1.5 h-1.5 bg-secondary rounded-full animate-pulse"></div>
            </div>
          </div>
          <!-- Mock Image -->
          <div class="aspect-video relative overflow-hidden bg-surface-container-high">
            <img id="prev-image"
              class="w-full h-full object-cover grayscale brightness-75 group-hover:grayscale-0 transition-all duration-500"
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuDMYhZc4Ekgjm4LHOARUbfLTNjrsdW_neQMSBUdNVAGDx54nncVIDmxjALXeRKedvb1y5l03UViL0XA5Bawx03jA3lz9GoZj3TmpJmn0CLw7Un3zHe2JCJexiLX-S9lW6l8NCImRAwYV3ZK2xWPcP_lbHOeLGqZMM6SUq1MWKUXhsCNHhq453VqDQOtIPQNLQ7JI-h7JCCDDSVkJmviujktVUotxy6LJN9FjnXL3UajOdNJ8TXCq7rWYw" />
            <div class="scanner-line"></div>
            <div
              class="absolute top-sm right-sm px-sm py-1 bg-surface-container-lowest/80 backdrop-blur-md border border-outline-variant">
              <span id="prev-type" class="font-label-md text-label-md text-secondary uppercase">Milsim</span>
            </div>
          </div>
          <!-- Card Body -->
          <div class="p-md space-y-md">
            <div class="space-y-xs">
              <h3 id="prev-name"
                class="font-headline-sm text-headline-sm text-primary uppercase leading-tight truncate">Operation Desert
                Fox
              </h3>
              <div class="flex items-center gap-sm text-on-surface-variant">
                <span class="material-symbols-outlined text-body-sm">calendar_month</span>
                <span id="prev-date" class="font-mono-sm text-mono-sm uppercase">24 OCT 2024</span>
              </div>
            </div>
            <div class="grid grid-cols-2 gap-sm border-t border-outline-variant pt-md">
              <div class="flex flex-col">
                <span class="font-label-md text-[10px] text-outline uppercase">Logistics</span>
                <span id="prev-fee" class="font-mono-sm text-mono-sm text-secondary">$10.000 CLP</span>
              </div>
              <div class="flex flex-col border-l border-outline-variant pl-sm">
                <span class="font-label-md text-[10px] text-outline uppercase">Capacity</span>
                <span id="prev-slots" class="font-mono-sm text-mono-sm">0 / 50 OP.</span>
              </div>
            </div>
            <div
              class="flex items-center gap-sm p-sm bg-surface-container-high border-l-2 border-secondary overflow-hidden">
              <span class="material-symbols-outlined text-secondary text-body-md shrink-0">location_on</span>
              <span id="prev-location"
                class="font-label-md text-label-md text-on-surface-variant uppercase truncate">Sector 7, Santiago</span>
            </div>
          </div>
          <!-- Footer Micro-data -->
          <div class="p-sm flex justify-between items-center border-t border-outline-variant/30">
            <span class="font-mono-sm text-[9px] text-outline-variant uppercase">AUTH: HQ_COMMAND</span>
            <span class="font-mono-sm text-[9px] text-outline-variant">0.1.2-ALPHA</span>
          </div>
        </div>

        <!-- PREVIEW UI HINTS -->
        <div class="mt-auto space-y-sm">
          <p class="font-body-sm text-body-sm text-outline-variant text-center italic">
            "Ensure all intel is accurate before field deployment."
          </p>
          <div class="flex justify-center gap-2">
            <div class="w-1 h-1 bg-outline-variant"></div>
            <div class="w-1 h-1 bg-outline-variant"></div>
            <div class="w-1 h-1 bg-secondary"></div>
            <div class="w-1 h-1 bg-outline-variant"></div>
            <div class="w-1 h-1 bg-outline-variant"></div>
          </div>
        </div>
      </div>

      <!-- MODAL CLOSE ICON (Mobile) -->
      <button type="button" id="btn-close-icon"
        class="absolute top-md right-md text-on-surface-variant hover:text-secondary transition-colors md:hidden z-20 cursor-pointer">
        <span class="material-symbols-outlined">close</span>
      </button>
    </div>
  </div>
  <!-- ============ TOP NAV ============ -->
  <header class="fixed top-0 w-full z-50 bg-surface border-b border-outline-variant">
    <nav class="flex justify-between items-center px-gutter h-16 max-w-container-max mx-auto">
      <a href="{{ url('/') }}" class="flex items-center gap-sm">
        <span class="material-symbols-outlined text-accent">shield</span>
        <span class="font-display text-xl text-on-surface uppercase tracking-tight">Airsoft Chile</span>
      </a>
      <div class="hidden md:flex items-center gap-xl">
        <a class="text-on-surface border-b-2 border-accent pb-1 text-sm font-medium" href="{{ url('/eventos') }}"
          aria-current="page">Eventos</a>
        <a class="text-on-surface-variant hover:text-on-surface transition-colors text-sm font-medium"
          href="{{ url('/foro') }}">Foro</a>
        <a class="text-on-surface-variant hover:text-on-surface transition-colors text-sm font-medium"
          href="{{ url('/canchas') }}">Canchas</a>
        <a class="text-on-surface-variant hover:text-on-surface transition-colors text-sm font-medium"
          href="{{ url('/tiendas') }}">Tiendas</a>
      </div>
      <div class="flex items-center gap-sm">
        <div class="relative hidden sm:block">
          <label for="search-mission" class="sr-only">Buscar misión</label>
          <span
            class="material-symbols-outlined absolute left-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">search</span>
          <input id="search-mission"
            class="bg-surface-container-low border border-outline-variant rounded text-on-surface text-sm py-2 pl-9 pr-3 focus:border-accent focus:ring-0 w-48 font-mono placeholder:text-on-surface-variant/60"
            placeholder="Buscar misión…" type="text" />
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
              <span>4 misiones esta semana</span><span>·</span>
              <span>Operación Cóndor: 12/60 cupos tomados</span><span>·</span>
              <span class="text-accent">CQB Rush Santiago cierra inscripciones en 3 días</span><span>·</span>
              <span>Silent Ghost 2: equipamiento restringido</span>
            </span>
            <span class="flex gap-xl pr-xl" aria-hidden="true">
              <span>4 misiones esta semana</span><span>·</span>
              <span>Operación Cóndor: 12/60 cupos tomados</span><span>·</span>
              <span class="text-accent">CQB Rush Santiago cierra inscripciones en 3 días</span><span>·</span>
              <span>Silent Ghost 2: equipamiento restringido</span>
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
        class="px-4 py-3 rounded-lg bg-primary-container text-on-primary-container font-medium">Eventos</a>
      <a href="{{ url('/foro') }}"
        class="px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high">Foro</a>
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
      <button id="btn-publish-event"
        class="w-full bg-accent text-on-accent font-display text-base py-3.5 uppercase tracking-wide clipped hover:brightness-110 active:scale-[0.98] transition-all cursor-pointer">
        Publicar evento
      </button>
    </div>
  </aside>

  <!-- ============ MAIN ============ -->
  <main class="lg:pl-60 pt-[6.5rem] pb-24 lg:pb-12 px-gutter grid-overlay min-h-screen">
    <div class="max-w-container-max mx-auto py-lg">

      <!-- Header -->
      <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-md mb-lg">
        <div>
          <h1 class="font-display text-3xl sm:text-4xl text-on-surface uppercase tracking-tight mb-xs">Calendario de
            despliegue</h1>
          <p class="text-on-surface-variant max-w-xl leading-relaxed">Monitorea los teatros de operaciones activos en
            todo el territorio. Todas las misiones requieren verificación previa y charla de seguridad.</p>
        </div>
        <span
          class="font-mono text-[11px] text-primary bg-primary-container px-3 py-1.5 rounded border border-primary/30 uppercase tracking-wide shrink-0">Estado:
          operativo</span>
      </div>

      <!-- Filter bar -->
      <section
        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-sm mb-xl p-xs bg-surface-container border border-outline-variant rounded-lg"
        aria-label="Filtros de eventos">
        <div class="flex flex-col gap-1 p-md bg-surface-container-low rounded-lg border border-outline-variant/50">
          <label for="filter-region"
            class="font-mono text-[11px] text-on-surface-variant uppercase tracking-wide">Región</label>
          <select id="filter-region"
            class="bg-transparent border-none text-on-surface font-display text-lg focus:ring-0 cursor-pointer p-0">
            <option>Todo Chile</option>
            <option>Metropolitana</option>
            <option>Valparaíso</option>
            <option>Araucanía</option>
          </select>
        </div>
        <div class="flex flex-col gap-1.5 p-md bg-surface-container-low rounded-lg border border-outline-variant/50">
          <span class="font-mono text-[11px] text-on-surface-variant uppercase tracking-wide">Tipo de juego</span>
          <div class="flex gap-xs" role="group" aria-label="Tipo de juego">
            <button class="px-3 py-1 bg-primary text-on-primary font-mono text-[12px] rounded"
              aria-pressed="true">Milsim</button>
            <button
              class="px-3 py-1 bg-surface-container-high text-on-surface-variant font-mono text-[12px] rounded hover:text-on-surface"
              aria-pressed="false">Speed</button>
            <button
              class="px-3 py-1 bg-surface-container-high text-on-surface-variant font-mono text-[12px] rounded hover:text-on-surface"
              aria-pressed="false">Rec</button>
          </div>
        </div>
        <div class="flex flex-col gap-1 p-md bg-surface-container-low rounded-lg border border-outline-variant/50">
          <label for="filter-month" class="font-mono text-[11px] text-on-surface-variant uppercase tracking-wide">Rango
            de fechas</label>
          <input id="filter-month"
            class="bg-transparent border-none text-on-surface font-display text-lg focus:ring-0 w-full p-0" type="month"
            value="2026-07" />
        </div>
        <div class="flex items-center p-md">
          <button
            class="flex items-center justify-center gap-2 w-full bg-surface-container-high text-on-surface font-mono text-[12px] uppercase py-3 rounded border border-outline-variant hover:bg-accent hover:text-on-accent hover:border-accent transition-colors">
            <span class="material-symbols-outlined text-[18px]">filter_list_off</span> Limpiar filtros
          </button>
        </div>
      </section>

      <!-- Event grid -->
      <div id="deployment-calendar" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-lg">

        <!-- Event 1 -->
        <article
          class="group bg-surface-container border border-outline-variant rounded-lg overflow-hidden flex flex-col hover:border-primary/50 transition-colors">
          <div class="relative h-44 overflow-hidden">
            <div class="absolute top-0 left-0 w-full bg-gradient-to-b from-black/70 to-transparent p-md z-10">
              <span
                class="font-mono text-[11px] text-accent bg-black/40 px-2 py-1 border border-accent/40 rounded uppercase">Milsim
                operativo</span>
            </div>
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
              alt="Jugadores de airsoft en equipo táctico completo avanzando por un bosque denso durante una misión nocturna simulada."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDPg6T3lP-Wd0Mq-Z9dl9IQ4TtI49PY6UoTgSDmX28SGtt9fcUjzwTkgXHrcROugANysrWqINHjVoARMyh9ruwV4MugVWKdkDkQ8l0jc8vXdrR0JtnPACxF9PK4Q-l9H4uU1qxMf4UMbN8NoMIgD6m3EDgOiXv9nqwAEbYq5kW_c61wEkUid5b80n7bDI2zdfnbdNniiErxQbBx0osTJN950UrFibJJ1etjlWvDkQ40YFImZo0w7kaCA" />
          </div>
          <div class="p-lg flex flex-col flex-grow">
            <div class="flex justify-between items-start gap-2 mb-md">
              <div>
                <p class="font-mono text-[12px] text-primary mb-1">24 Nov · 08:00 hrs</p>
                <h3 class="font-display text-xl text-on-surface uppercase leading-tight">Operación Cóndor</h3>
              </div>
              <div class="text-right shrink-0">
                <p class="font-mono text-[10px] text-on-surface-variant uppercase">Entrada</p>
                <p class="font-display text-lg text-accent">$15.000</p>
              </div>
            </div>
            <div class="flex items-center gap-1.5 mb-lg text-on-surface-variant text-sm">
              <span class="material-symbols-outlined text-[18px]">location_on</span> Cajón del Maipo, RM
            </div>
            <div class="mt-auto pt-md border-t border-outline-variant flex items-center justify-between gap-2">
              <div class="flex -space-x-2" aria-label="42 operadores inscritos">
                <div
                  class="w-8 h-8 rounded-full bg-surface-container-high border-2 border-surface-container flex items-center justify-center text-[10px] font-bold">
                  JD</div>
                <div
                  class="w-8 h-8 rounded-full bg-primary border-2 border-surface-container flex items-center justify-center text-[10px] font-bold text-on-primary">
                  AT</div>
                <div
                  class="w-8 h-8 rounded-full bg-accent border-2 border-surface-container flex items-center justify-center text-[10px] font-bold text-on-accent">
                  +42</div>
              </div>
              <button
                class="bg-primary text-on-primary font-mono text-[12px] px-5 py-2 uppercase rounded hover:brightness-110 active:scale-95 transition-all">Registrarse</button>
            </div>
          </div>
        </article>

        <!-- Event 2 -->
        <article
          class="group bg-surface-container border border-outline-variant rounded-lg overflow-hidden flex flex-col hover:border-primary/50 transition-colors">
          <div class="relative h-44 overflow-hidden">
            <div class="absolute top-0 left-0 w-full bg-gradient-to-b from-black/70 to-transparent p-md z-10">
              <span
                class="font-mono text-[11px] text-on-surface bg-black/40 px-2 py-1 border border-outline-variant rounded uppercase">Torneo
                speedsoft</span>
            </div>
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
              alt="Competencia de speedsoft de alta intensidad en una arena techada iluminada con luces de neón."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuADZYQKIyLtnKNFJtPjVYfyoXTuPIgALNTGh9Fl0c0GwwPfORG2OAyoLDD1NZzS0b3OG5JdggTvU7AI04oKXlYawHRTveX1_EgIBufG88kYj9eWzo0uVyQwZQgGwGVwKbJwTSnVJPk36q7W7TwdUKUCgTK6vfH-bBF8EfoDc3aWrDJkg4M6abikmFBm7x_iDR5NX3I84Qbp-83ERuJXBAv3_xvitREePqXs-FXN2OJJu2qiVS_572FLHw" />
          </div>
          <div class="p-lg flex flex-col flex-grow">
            <div class="flex justify-between items-start gap-2 mb-md">
              <div>
                <p class="font-mono text-[12px] text-primary mb-1">02 Dic · 10:00 hrs</p>
                <h3 class="font-display text-xl text-on-surface uppercase leading-tight">CQB Rush: Santiago</h3>
              </div>
              <div class="text-right shrink-0">
                <p class="font-mono text-[10px] text-on-surface-variant uppercase">Entrada</p>
                <p class="font-display text-lg text-accent">$12.500</p>
              </div>
            </div>
            <div class="flex items-center gap-1.5 mb-lg text-on-surface-variant text-sm">
              <span class="material-symbols-outlined text-[18px]">location_on</span> Quilicura, RM
            </div>
            <div class="mt-auto pt-md border-t border-outline-variant flex items-center justify-between gap-2">
              <div class="flex items-center gap-1.5 text-on-surface-variant font-mono text-[12px]">
                <span class="material-symbols-outlined text-[16px]">group</span> 12/24 cupos
              </div>
              <button
                class="bg-primary text-on-primary font-mono text-[12px] px-5 py-2 uppercase rounded hover:brightness-110 active:scale-95 transition-all">Registrarse</button>
            </div>
          </div>
        </article>

        <!-- Event 3 -->
        <article
          class="group bg-surface-container border border-outline-variant rounded-lg overflow-hidden flex flex-col hover:border-primary/50 transition-colors">
          <div class="relative h-44 overflow-hidden">
            <div class="absolute top-0 left-0 w-full bg-gradient-to-b from-black/70 to-transparent p-md z-10">
              <span
                class="font-mono text-[11px] text-primary bg-black/40 px-2 py-1 border border-primary/40 rounded uppercase">Sesión
                recreativa</span>
            </div>
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
              alt="Fábrica industrial abandonada reconvertida en campo de airsoft, con estructuras oxidadas y luz de mañana."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXFhN2U-mf_RY0vNsOf10z2NMsT4FGe9sCeZsvl7xDmA8ZyK2G8AunHAL9b6zZQBtGkxUnqqJoHBKSNFvj481xUn7KhmJTn8UM8m4x1TQ3TrCmuPdDvGEA39jqW1JjijHD4LkGzbLKGCW2tShSbPEvQQlX6NR4dLuBqVF27rGsGm_JfbaJl2NWzQfLH32HnSHKnmqH5nDq4vto7hKYTKJ9khPUARmNa128gA7gE806nggNIvuN575v2w" />
          </div>
          <div class="p-lg flex flex-col flex-grow">
            <div class="flex justify-between items-start gap-2 mb-md">
              <div>
                <p class="font-mono text-[12px] text-primary mb-1">08 Dic · 09:30 hrs</p>
                <h3 class="font-display text-xl text-on-surface uppercase leading-tight">Open Field Sunday</h3>
              </div>
              <div class="text-right shrink-0">
                <p class="font-mono text-[10px] text-on-surface-variant uppercase">Entrada</p>
                <p class="font-display text-lg text-accent">$8.000</p>
              </div>
            </div>
            <div class="flex items-center gap-1.5 mb-lg text-on-surface-variant text-sm">
              <span class="material-symbols-outlined text-[18px]">location_on</span> Puchuncaví, V Región
            </div>
            <div class="mt-auto pt-md border-t border-outline-variant flex items-center justify-between gap-2">
              <div class="flex items-center gap-1.5 text-danger font-mono text-[12px]">
                <span class="material-symbols-outlined text-[16px]">warning</span> Control obligatorio
              </div>
              <button
                class="bg-primary text-on-primary font-mono text-[12px] px-5 py-2 uppercase rounded hover:brightness-110 active:scale-95 transition-all">Registrarse</button>
            </div>
          </div>
        </article>

        <!-- Event 4 -->
        <article
          class="group bg-surface-container border border-outline-variant rounded-lg overflow-hidden flex flex-col hover:border-primary/50 transition-colors">
          <div class="relative h-44 overflow-hidden">
            <div class="absolute top-0 left-0 w-full bg-gradient-to-b from-black/70 to-transparent p-md z-10">
              <span
                class="font-mono text-[11px] text-accent bg-black/40 px-2 py-1 border border-accent/40 rounded uppercase">Milsim
                24h</span>
            </div>
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
              alt="Operadores de airsoft con trajes ghillie ocultos entre pastizales altos, vistos a través de una mira."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuAK2p_0SPicIuNZtFj7ERjvyFARaMedp0lQEzG5NKAKCSkyiMh7LOiXHh7IJlMexYKuqF98aqUG0WSYQJhXdtC4PsWSmqtHL8NQFosJsEj_hD1Jo1qHFpB4qv21Fr2ZVqJGXz27i7oSH0kHBByPwCtSrUAiqf3PRCgdk7cR2Llr8BjqHln94OFr8ZnfdI3mHYt8pL2j0_ZvIrsaRCaAd8X8yJnAF8c2jTSpFTKQI_anaXB41dP5KhINTg" />
          </div>
          <div class="p-lg flex flex-col flex-grow">
            <div class="flex justify-between items-start gap-2 mb-md">
              <div>
                <p class="font-mono text-[12px] text-primary mb-1">15 Dic · 12:00 hrs</p>
                <h3 class="font-display text-xl text-on-surface uppercase leading-tight">Silent Ghost 2</h3>
              </div>
              <div class="text-right shrink-0">
                <p class="font-mono text-[10px] text-on-surface-variant uppercase">Entrada</p>
                <p class="font-display text-lg text-accent">$25.000</p>
              </div>
            </div>
            <div class="flex items-center gap-1.5 mb-lg text-on-surface-variant text-sm">
              <span class="material-symbols-outlined text-[18px]">location_on</span> Temuco, IX Región
            </div>
            <div class="mt-auto pt-md border-t border-outline-variant flex items-center justify-between gap-2">
              <div class="flex items-center gap-1.5 text-on-surface-variant font-mono text-[12px]">
                <span class="material-symbols-outlined text-[16px]">lock</span> Equipo restringido
              </div>
              <button
                class="bg-primary text-on-primary font-mono text-[12px] px-5 py-2 uppercase rounded hover:brightness-110 active:scale-95 transition-all">Registrarse</button>
            </div>
          </div>
        </article>
      </div>


      <!-- Regional density / tactical map anchor -->
      <section class="mt-xl">
        <div
          class="bg-surface-container border border-outline-variant rounded-lg p-lg flex flex-col md:flex-row gap-lg">
          <div class="flex-grow rounded border border-outline-variant relative overflow-hidden h-72 md:h-auto">
            <div class="absolute inset-0 bg-surface-container-highest grid-overlay"></div>
            <img class="absolute inset-0 w-full h-full object-cover grayscale opacity-30"
              alt="Mapa de Chile mostrando la densidad regional de operaciones de airsoft activas."
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdstGHJ0gLGySrjdB4D5jzXdbfDNvGJA3RI8DOJoz8CLRc24J1F-w_YSGS8mpM3ySdONaeL2XLTwpa65wlz9cdsU145SWlOZqNw7CyfyntVFeW6Kdurx7HAZ6lfGZOK9_8jKbmDlng071RMoCs6ZP3TosNPNhilg2n-7G3G0-wc4XfJfMkky6S8JvAYodm-JSMjsAAC6gH11HhfkkpBl70AhOHd3ZiheF9b1W3wMWU73IbgOM74wy8Aw" />
            <div class="absolute top-1/4 left-1/3">
              <span class="block w-3 h-3 bg-primary rounded-full animate-ping absolute"></span>
              <span class="block w-3 h-3 bg-primary rounded-full shadow-[0_0_10px_#a8b48c]"></span>
            </div>
            <div class="absolute bottom-1/3 right-1/4">
              <span class="block w-3 h-3 bg-accent rounded-full animate-ping absolute"></span>
              <span class="block w-3 h-3 bg-accent rounded-full shadow-[0_0_10px_#ff8a3d]"></span>
            </div>
          </div>
          <div class="w-full md:w-80 flex flex-col gap-md shrink-0">
            <h4 class="font-display text-lg text-primary uppercase">Densidad regional</h4>
            <div class="space-y-sm">
              <div
                class="flex justify-between font-mono text-[12px] p-sm bg-surface-container-low border-l-2 border-primary rounded-r">
                <span class="text-on-surface-variant">Santiago (RM)</span><span class="text-primary font-semibold">12
                  activos</span>
              </div>
              <div
                class="flex justify-between font-mono text-[12px] p-sm bg-surface-container-low border-l-2 border-outline-variant rounded-r">
                <span class="text-on-surface-variant">Valparaíso (V)</span><span class="text-on-surface">5
                  activos</span>
              </div>
              <div
                class="flex justify-between font-mono text-[12px] p-sm bg-surface-container-low border-l-2 border-outline-variant rounded-r">
                <span class="text-on-surface-variant">Biobío (VIII)</span><span class="text-on-surface">3 activos</span>
              </div>
            </div>
            <div class="mt-auto p-md bg-surface-container-low rounded border border-outline-variant">
              <p class="text-sm text-on-surface-variant leading-relaxed">Selecciona un marcador para ver los informes de
                misión y la topología del terreno de esa región.</p>
            </div>
          </div>
        </div>
      </section>

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
    <a href="index.html" class="flex flex-col items-center gap-0.5 text-on-surface-variant hover:text-on-surface">
      <span class="material-symbols-outlined text-[22px]">home</span>
      <span class="text-[10px] font-mono uppercase">Inicio</span>
    </a>
    <a href="#" class="flex flex-col items-center gap-0.5 text-accent" aria-current="page">
      <span class="material-symbols-outlined text-[22px] fill-icon">event</span>
      <span class="text-[10px] font-mono uppercase">Eventos</span>
    </a>
    <a href="#" class="flex flex-col items-center gap-0.5 text-on-surface-variant hover:text-on-surface">
      <span class="material-symbols-outlined text-[22px]">map</span>
      <span class="text-[10px] font-mono uppercase">Mapa</span>
    </a>
    <a href="#" class="flex flex-col items-center gap-0.5 text-on-surface-variant hover:text-on-surface">
      <span class="material-symbols-outlined text-[22px]">forum</span>
      <span class="text-[10px] font-mono uppercase">Intel</span>
    </a>
  </nav>

  <script>
    // filter pill toggle (visual only)
    document.querySelectorAll('[role="group"] button').forEach(btn => {
      btn.addEventListener('click', () => {
        document.querySelectorAll('[role="group"] button').forEach(b => {
          b.setAttribute('aria-pressed', 'false');
          b.classList.remove('bg-primary', 'text-on-primary');
          b.classList.add('bg-surface-container-high', 'text-on-surface-variant');
        });
        btn.setAttribute('aria-pressed', 'true');
        btn.classList.add('bg-primary', 'text-on-primary');
        btn.classList.remove('bg-surface-container-high', 'text-on-surface-variant');
      });
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

    // card press micro-interaction
    document.querySelectorAll('article.group').forEach(card => {
      card.addEventListener('mousedown', () => card.style.transform = 'scale(0.99)');
      ['mouseup', 'mouseleave'].forEach(evt => card.addEventListener(evt, () => card.style.transform = 'scale(1)'));
    });

    //publicar evento button
    document.addEventListener('DOMContentLoaded', () => {
      const btnPublish = document.getElementById('btn-publish-event');
      const modalPublish = document.getElementById('publish-modal');
      const backdrop = document.getElementById('publish-modal-backdrop');
      const btnCloseModal = document.getElementById('btn-close-modal');
      const btnCloseIcon = document.getElementById('btn-close-icon');

      // Abrir el modal
      if (btnPublish && modalPublish) {
        btnPublish.addEventListener('click', () => {
          modalPublish.classList.remove('hidden');
          modalPublish.style.opacity = '1'; // Asegurarnos de que sea visible
        });
      }

      // Función reutilizable con animación para cerrar la misión
      const closePublishModal = () => {
        if (modalPublish) {
          modalPublish.style.opacity = '0';
          modalPublish.style.transition = 'opacity 300ms ease';
          setTimeout(() => {
            modalPublish.classList.add('hidden');
            modalPublish.style.opacity = '1'; // Resetear para la próxima apertura
          }, 300);
        }
      };

      // Asignar el evento de cerrar a los diferentes disparadores
      if (backdrop) backdrop.addEventListener('click', closePublishModal);
      if (btnCloseModal) btnCloseModal.addEventListener('click', closePublishModal);
      if (btnCloseIcon) btnCloseIcon.addEventListener('click', closePublishModal);

      // Efecto visual interactivo para los inputs (mantenido de tu código original)
      if (modalPublish) {
        const inputs = modalPublish.querySelectorAll('input, select');
        inputs.forEach(input => {
          input.addEventListener('focus', () => {
            if (input.parentElement) input.parentElement.classList.add('border-secondary');
          });
          input.addEventListener('blur', () => {
            if (input.parentElement) input.parentElement.classList.remove('border-secondary');
          });
        });
      }
    });
    //publicar evento button
    document.addEventListener('DOMContentLoaded', () => {
      // 1. CONTROL DEL MODAL
      const modal = document.getElementById('publish-modal');
      const backdrop = document.getElementById('publish-modal-backdrop');
      const btnClose = document.getElementById('btn-close-modal');
      const btnCloseIcon = document.getElementById('btn-close-icon');

      const closeModal = () => {
        if (modal) {
          modal.style.opacity = '0';
          modal.style.transition = 'opacity 300ms ease';
          setTimeout(() => {
            modal.classList.add('hidden');
            modal.style.opacity = '1';
          }, 300);
        }
      };

      if (backdrop) backdrop.addEventListener('click', closeModal);
      if (btnClose) btnClose.addEventListener('click', closeModal);
      if (btnCloseIcon) btnCloseIcon.addEventListener('click', closeModal);

      // 2. LIVE PREVIEW (Sincronización de datos)
      const form = document.getElementById('publish-form');

      // Función para formatear fechas (ej: 24 OCT 2024)
      const updateDatePreview = () => {
        const dateVal = document.getElementById('in-date').value;
        const timeVal = document.getElementById('in-time').value;
        const prevDate = document.getElementById('prev-date');

        if (dateVal) {
          const dateObj = new Date(dateVal + 'T00:00:00');
          const options = { day: '2-digit', month: 'short', year: 'numeric' };
          let formatted = dateObj.toLocaleDateString('en-GB', options).toUpperCase();
          if (timeVal) formatted += ` - ${timeVal}`;
          prevDate.textContent = formatted;
        } else {
          prevDate.textContent = '24 OCT 2024';
        }
      };

      // Nombre
      document.getElementById('in-name').addEventListener('input', (e) => {
        document.getElementById('prev-name').textContent = e.target.value || 'Operation Desert Fox';
      });

      // Fechas y Hora
      document.getElementById('in-date').addEventListener('input', updateDatePreview);
      document.getElementById('in-time').addEventListener('input', updateDatePreview);

      // Ubicación
      document.getElementById('in-location').addEventListener('input', (e) => {
        document.getElementById('prev-location').textContent = e.target.value || 'Sector 7, Santiago';
      });

      // Tipo de Juego
      document.getElementById('in-type').addEventListener('change', (e) => {
        document.getElementById('prev-type').textContent = e.target.value;
      });

      // Tarifa (Formato CLP)
      document.getElementById('in-fee').addEventListener('input', (e) => {
        const val = e.target.value;
        const prevFee = document.getElementById('prev-fee');
        if (val) {
          const formatted = new Intl.NumberFormat('es-CL', { style: 'currency', currency: 'CLP' }).format(val);
          prevFee.textContent = `${formatted} CLP`;
        } else {
          prevFee.textContent = '$10.000 CLP';
        }
      });

      // Cupos
      document.getElementById('in-slots').addEventListener('input', (e) => {
        document.getElementById('prev-slots').textContent = `0 / ${e.target.value || '50'} OP.`;
      });

      // Previsualización de Imagen
      document.getElementById('in-image').addEventListener('change', (e) => {
        const file = e.target.files[0];
        if (file) {
          document.getElementById('prev-image').src = URL.createObjectURL(file);
          document.getElementById('upload-label').textContent = file.name.substring(0, 20) + "...";
        }
      });

      // 3. SIMULAR ENVÍO DE FORMULARIO
      if (form) {
        form.addEventListener('submit', (e) => {
          e.preventDefault();
          const btnSubmit = document.getElementById('btn-submit-mission');
          const originalText = btnSubmit.innerHTML;

          // Efecto visual de carga
          btnSubmit.innerHTML = `<span class="material-symbols-outlined text-body-md" style="font-variation-settings: 'FILL' 1;">sync</span> TRANSMITTING...`;

          setTimeout(() => {
            closeModal();

            // --- INICIO CÓDIGO PARA INYECTAR LA NUEVA TARJETA ---
            const calendar = document.getElementById('deployment-calendar');
            if (calendar) {
              // Extraer datos de los inputs
              const name = document.getElementById('in-name').value || 'Operación Confidencial';
              const location = document.getElementById('in-location').value || 'Ubicación clasificada';
              const type = document.getElementById('in-type').value || 'MILSIM';
              const slots = document.getElementById('in-slots').value || '50';
              const imgSrc = document.getElementById('prev-image').src;

              // Formatear la tarifa a moneda chilena ($ CLP)
              const feeVal = document.getElementById('in-fee').value;
              const feeFormated = feeVal ? new Intl.NumberFormat('es-CL', { style: 'currency', currency: 'CLP' }).format(feeVal) : 'Gratis';

              // Formatear Fecha y Hora al estilo de las otras tarjetas (ej: "24 Nov · 08:00 hrs")
              const dateVal = document.getElementById('in-date').value;
              const timeVal = document.getElementById('in-time').value;
              let dateText = 'Fecha por definir';

              if (dateVal) {
                const d = new Date(dateVal + 'T00:00:00');
                const day = d.toLocaleDateString('es-CL', { day: '2-digit' });
                // Obtiene el mes abreviado y quita el punto que a veces añade JS
                const month = d.toLocaleDateString('es-CL', { month: 'short' }).replace('.', '');
                // Capitaliza la primera letra del mes
                const monthCap = month.charAt(0).toUpperCase() + month.slice(1);

                dateText = `${day} ${monthCap} · ${timeVal || '00:00'} hrs`;
              }

              // Estructura HTML idéntica a tus tarjetas de la clase 'article.group'
              const newEventHTML = `
                <article class="group bg-surface-container border border-outline-variant rounded-lg overflow-hidden flex flex-col hover:border-primary/50 transition-colors animate-new-card">
                  <div class="relative h-44 overflow-hidden">
                    <div class="absolute top-0 left-0 w-full bg-gradient-to-b from-black/70 to-transparent p-md z-10">
                      <span class="font-mono text-[11px] text-accent bg-black/40 px-2 py-1 border border-accent/40 rounded uppercase">${type}</span>
                    </div>
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="${name}" src="${imgSrc}" />
                  </div>
                  <div class="p-lg flex flex-col flex-grow">
                    <div class="flex justify-between items-start gap-2 mb-md">
                      <div>
                        <p class="font-mono text-[12px] text-primary mb-1">${dateText}</p>
                        <h3 class="font-display text-xl text-on-surface uppercase leading-tight">${name}</h3>
                      </div>
                      <div class="text-right shrink-0">
                        <p class="font-mono text-[10px] text-on-surface-variant uppercase">Entrada</p>
                        <p class="font-display text-lg text-accent">${feeFormated}</p>
                      </div>
                    </div>
                    <div class="flex items-center gap-1.5 mb-lg text-on-surface-variant text-sm">
                      <span class="material-symbols-outlined text-[18px]">location_on</span> ${location}
                    </div>
                    <div class="mt-auto pt-md border-t border-outline-variant flex items-center justify-between gap-2">
                      <div class="flex items-center gap-1.5 text-on-surface-variant font-mono text-[12px]">
                        <span class="material-symbols-outlined text-[16px]">group</span> 0/${slots} cupos
                      </div>
                      <button class="bg-primary text-on-primary font-mono text-[12px] px-5 py-2 uppercase rounded hover:brightness-110 active:scale-95 transition-all">Registrarse</button>
                    </div>
                  </div>
                </article>
              `;

              // Insertar al inicio de la grilla (afterbegin)
              calendar.insertAdjacentHTML('afterbegin', newEventHTML);

              // Aplicarle el mismo efecto 'hover' que tienen las otras tarjetas usando JS
              const addedCard = calendar.firstElementChild;
              addedCard.addEventListener('mousedown', () => addedCard.style.transform = 'scale(0.99)');
              ['mouseup', 'mouseleave'].forEach(evt => addedCard.addEventListener(evt, () => addedCard.style.transform = 'scale(1)'));
            }
            // --- FIN CÓDIGO NUEVA TARJETA ---

            setTimeout(() => {
              btnSubmit.innerHTML = originalText;
              form.reset();
              // Disparar eventos para resetear la previsualización
              ['in-name', 'in-location', 'in-fee', 'in-slots', 'in-date', 'in-type'].forEach(id => {
                document.getElementById(id).dispatchEvent(new Event('input'));
                document.getElementById(id).dispatchEvent(new Event('change'));
              });
              document.getElementById('prev-image').src = "https://lh3.googleusercontent.com/aida-public/AB6AXuDMYhZc4Ekgjm4LHOARUbfLTNjrsdW_neQMSBUdNVAGDx54nncVIDmxjALXeRKedvb1y5l03UViL0XA5Bawx03jA3lz9GoZj3TmpJmn0CLw7Un3zHe2JCJexiLX-S9lW6l8NCImRAwYV3ZK2xWPcP_lbHOeLGqZMM6SUq1MWKUXhsCNHhq453VqDQOtIPQNLQ7JI-h7JCCDDSVkJmviujktVUotxy6LJN9FjnXL3UajOdNJ8TXCq7rWYw";
              document.getElementById('upload-label').textContent = "Upload Mission Visuals";
            }, 500);
          }, 1500);
        });
      }
    });
  </script>
</body>

</html>