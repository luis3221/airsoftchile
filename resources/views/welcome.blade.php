<!DOCTYPE html>
<html class="dark" lang="es">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>AIRSOFT CHILE — Red Táctica</title>
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

    .clipped {
      clip-path: polygon(0 0, 94% 0, 100% 22%, 100% 100%, 6% 100%, 0 78%);
    }

    .glass {
      backdrop-filter: blur(10px);
      background: rgba(20, 23, 26, 0.82);
    }

    .grid-overlay {
      background-image: radial-gradient(circle, #2b3033 1px, transparent 1px);
      background-size: 22px 22px;
    }

    .hero-fade {
      background: linear-gradient(180deg, rgba(10, 12, 13, 0.15) 0%, rgba(10, 12, 13, 0.55) 55%, rgba(10, 12, 13, 1) 100%);
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

    a,
    button {
      outline-offset: 2px;
    }

    a:focus-visible,
    button:focus-visible,
    input:focus-visible {
      outline: 2px solid #ff8a3d;
      outline-offset: 2px;
    }

    #mobile-menu {
      transition: transform .25s ease, opacity .2s ease;
    }
  </style>
</head>

<body class="font-body text-[15px] overflow-x-hidden">
  <!-- Login Modal Overlay -->
  <div class="hidden fixed inset-0 z-[100] flex items-center justify-center bg-black/80 backdrop-blur-sm px-gutter"
    id="login-modal">
    <div class="w-full max-w-md bg-surface-container-lowest tactical-border clipped-corner relative overflow-hidden">
      <!-- Decoration Lines -->
      <div class="absolute top-0 left-0 w-full h-1 bg-secondary opacity-50"></div>
      <div class="absolute bottom-0 left-0 w-full h-1 bg-secondary opacity-20"></div>

      <div class="p-xl space-y-lg">
        <!-- Header -->
        <div class="space-y-xs">
          <div class="flex items-center gap-xs text-secondary">
            <span class="material-symbols-outlined text-[18px]">lock</span>
            <span class="font-mono-sm uppercase tracking-widest text-[10px]">AUTH_REQUIRED_V4.2</span>
          </div>
          <h2 class="font-headline-lg text-primary uppercase leading-tight tracking-tighter">
            ACCESO RESTRINGIDO<br />INICIAR SESIÓN
          </h2>
        </div>

        <!-- Form -->
        <form class="space-y-md">
          <div class="space-y-xs">
            <label class="font-mono-sm text-[11px] text-on-surface-variant uppercase block">CORREO ELECTRÓNICO</label>
            <div class="relative">
              <input
                class="w-full bg-surface-container border border-outline-variant focus:border-secondary focus:ring-1 focus:ring-secondary/30 text-on-surface font-mono-sm px-4 py-3 placeholder:text-on-surface-variant/30 outline-none transition-all"
                placeholder="[USUARIO@COMANDO.CL]" type="email" />
            </div>
          </div>

          <div class="space-y-xs">
            <label class="font-mono-sm text-[11px] text-on-surface-variant uppercase block">CONTRASEÑA</label>
            <div class="relative">
              <input
                class="w-full bg-surface-container border border-outline-variant focus:border-secondary focus:ring-1 focus:ring-secondary/30 text-on-surface font-mono-sm px-4 py-3 placeholder:text-on-surface-variant/30 outline-none transition-all"
                placeholder="[********]" type="password" />
            </div>
          </div>

          <button
            class="w-full bg-secondary text-on-secondary font-headline-sm py-4 uppercase tracking-wider clipped-corner-sm hover:brightness-110 active:scale-95 transition-all duration-100 mt-md"
            type="submit">
            INICIAR SESIÓN
          </button>
        </form>

        <!-- Links -->
        <div class="flex flex-col gap-sm pt-md border-t border-outline-variant">
          <a class="font-label-md text-on-surface-variant hover:text-secondary transition-colors uppercase text-center tracking-wider"
            href="#">
            REGISTRARSE
          </a>
          <a class="font-label-md text-on-surface-variant/60 hover:text-primary transition-colors uppercase text-center text-[10px] tracking-tight"
            href="#">
            ¿OLVIDASTE TU CONTRASEÑA?
          </a>
        </div>

        <!-- Modal Footer -->
        <div class="text-center">
          <p class="font-mono-sm text-[9px] text-on-surface-variant/40 uppercase tracking-[0.2em]">
            SISTEMA DE COMUNICACIONES ENCRIPTADO
          </p>
        </div>
      </div>
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
        <a class="text-on-surface border-b-2 border-accent pb-1 text-sm font-medium"
          href="{{ url('/eventos') }}">Eventos</a>
        <a class="text-on-surface-variant hover:text-on-surface transition-colors text-sm font-medium"
          href="{{ url('/foro') }}">Foro</a>
        <a class="text-on-surface-variant hover:text-on-surface transition-colors text-sm font-medium"
          href="{{ url('/canchas') }}">Canchas</a>
        <a class="text-on-surface-variant hover:text-on-surface transition-colors text-sm font-medium"
          href="{{ url('/tiendas') }}">Tiendas</a>
      </div>
      <div class="flex items-center gap-sm">
        <button aria-label="Buscar"
          class="p-2 text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors rounded-full">
          <span class="material-symbols-outlined text-[20px]">search</span>
        </button>
        <button id="btn-login" aria-label="Cuenta"
          class="hidden sm:flex p-2 text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors rounded-full cursor-pointer">
          <span class="material-symbols-outlined text-[20px]">account_circle</span>
        </button>
        <button id="menu-btn" aria-label="Abrir menú" aria-expanded="false"
          class="md:hidden p-2 text-on-surface-variant hover:bg-surface-container-high rounded-full">
          <span class="material-symbols-outlined text-[20px]">menu</span>
        </button>
      </div>
    </nav>

    <!-- Signature element: live ops status ticker -->
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
              <span>12 operaciones activas hoy</span>
              <span>·</span>
              <span>1.204 operadores conectados</span>
              <span>·</span>
              <span class="text-accent">Próxima misión: Desert Storm III — 02 NOV</span>
              <span>·</span>
              <span>Rancagua: cupos al 75%</span>
            </span>
            <span class="flex gap-xl pr-xl" aria-hidden="true">
              <span>12 operaciones activas hoy</span>
              <span>·</span>
              <span>1.204 operadores conectados</span>
              <span>·</span>
              <span class="text-accent">Próxima misión: Desert Storm III — 02 NOV</span>
              <span>·</span>
              <span>Rancagua: cupos al 75%</span>
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
      <button
        class="w-full bg-accent text-on-accent font-display text-base py-3.5 uppercase tracking-wide clipped hover:brightness-110 active:scale-[0.98] transition-all">
        Publicar evento
      </button>
    </div>
    <div class="p-2 pb-4 border-t border-outline-variant pt-2">
      <a class="text-on-surface-variant hover:text-on-surface px-4 py-2 flex items-center gap-md text-sm transition-colors"
        href="#">
        <span class="material-symbols-outlined text-[20px]">settings</span> Ajustes
      </a>
      <a class="text-on-surface-variant hover:text-on-surface px-4 py-2 flex items-center gap-md text-sm transition-colors"
        href="#">
        <span class="material-symbols-outlined text-[20px]">help</span> Soporte
      </a>
    </div>
  </aside>

  <!-- ============ MAIN ============ -->
  <main class="lg:pl-60 pt-[6.5rem] pb-20 lg:pb-0">

    <!-- HERO -->
    <section class="relative h-[640px] w-full overflow-hidden">
      <div class="absolute inset-0 z-0">
        <img class="w-full h-full object-cover" alt="Operadores de airsoft"
          src="https://t3.ftcdn.net/jpg/10/03/46/00/360_F_1003460091_ceaEGClHjxKewiBOQl99fwDQebgA9g8O.jpg" />
        <div class="absolute inset-0 hero-fade"></div>
      </div>
      <div class="relative z-10 h-full flex flex-col justify-end px-gutter pb-xl max-w-3xl">
        <div
          class="inline-flex w-fit items-center gap-1 px-3 py-1 bg-accent text-on-accent font-mono text-[11px] uppercase tracking-wide mb-md">
          <span class="material-symbols-outlined text-[14px]">bolt</span> Misión preparada
        </div>
        <h1 class="font-display text-[42px] sm:text-[56px] leading-[0.95] text-on-surface uppercase mb-md">La red del
          airsoft chileno</h1>
        <p class="text-on-surface-variant text-base sm:text-lg mb-lg max-w-xl leading-relaxed">
          Coordina misiones, encuentra campos verificados y conéctate con equipos de todo Chile. Todo lo que necesitas
          para tu próxima operación, en un solo lugar.
        </p>
        <div class="flex flex-wrap gap-md">
          <button
            class="bg-accent text-on-accent px-lg py-3.5 font-display text-base uppercase clipped hover:brightness-110 transition-all">
            Únete a la comunidad
          </button>
          <a href="#mapa"
            class="flex items-center gap-2 bg-transparent border border-outline-variant text-on-surface px-lg py-3.5 font-display text-base uppercase hover:bg-surface-container-high transition-colors">
            Ver mapa de campos
          </a>
        </div>
      </div>
    </section>

    <!-- BENTO: eventos + foro -->
    <section id="eventos"
      class="p-gutter grid grid-cols-1 md:grid-cols-12 gap-lg max-w-container-max mx-auto scroll-mt-24">
      <div class="md:col-span-8 space-y-md">
        <div class="flex justify-between items-end border-b border-outline-variant pb-sm">
          <h2 class="font-display text-2xl uppercase text-on-surface tracking-tight">Últimas misiones</h2>
          <div class="flex gap-xs">
            <button aria-label="Anterior"
              class="p-1.5 border border-outline-variant rounded hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-colors">
              <span class="material-symbols-outlined text-[18px]">chevron_left</span>
            </button>
            <button aria-label="Siguiente"
              class="p-1.5 border border-outline-variant rounded hover:bg-surface-container-high text-on-surface-variant hover:text-on-surface transition-colors">
              <span class="material-symbols-outlined text-[18px]">chevron_right</span>
            </button>
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-md">
          <!-- Event 1 -->
          <article
            class="bg-surface-container-low border border-outline-variant rounded-lg overflow-hidden group hover:border-primary/40 transition-colors">
            <div class="h-44 relative overflow-hidden">
              <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                alt="Campo táctico de airsoft con contenedores y barricadas de madera en zona boscosa cerca de Santiago."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBOsxQiGSr_tPvFfETxQy6xxXWHHImQCiuqsJQGmONjY2i2uk9BXqG5Rmgdmz6W2VgZVKQvktivqFVpurpnM6CPs8MNvGYysR9GXEYtb46rn3XkdhF0qSe2mF1fGsuGkcZwF3Q35PbmjVEVci-TmxsJ65MiBi3q7F5bWVV9UAcwyzR2exMjXcsII7b8-Jm2uG_MvEbG4dNtyNRyjCYBqDnA0dnS7tJQOslIC7LeyZcP_Y-DiyFBWuz0LA" />
              <span
                class="absolute top-2 right-2 bg-on-surface text-surface font-mono text-[11px] px-2 py-1 uppercase rounded">24
                Oct</span>
            </div>
            <div class="p-md">
              <div class="flex justify-between items-start mb-xs gap-2">
                <h3 class="font-display text-lg text-on-surface uppercase leading-tight">Operación Silent Shield</h3>
                <span class="shrink-0 text-accent font-mono text-[11px] uppercase">Activo</span>
              </div>
              <p class="text-sm text-on-surface-variant mb-md leading-relaxed">Simulación nocturna en el valle central.
                Cupos limitados para equipos con visión nocturna.</p>
              <div class="flex items-center gap-md font-mono text-[11px] text-on-surface-variant">
                <span class="flex items-center gap-1"><span
                    class="material-symbols-outlined text-[15px]">location_on</span>Rancagua</span>
                <span class="flex items-center gap-1"><span
                    class="material-symbols-outlined text-[15px]">group</span>45/60</span>
              </div>
            </div>
          </article>

          <!-- Event 2 -->
          <article
            class="bg-surface-container-low border border-outline-variant rounded-lg overflow-hidden group hover:border-primary/40 transition-colors">
            <div class="h-44 relative overflow-hidden">
              <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                alt="Jugadores de airsoft con equipo desértico reunidos en un círculo de briefing bajo el sol de la zona árida de Chile."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCk44glCCTpPt1duL5Euf5lPrir2gLI27f6ygae7VQmpociXL_P-O38ZvdTlw_4Lt2qKIQJhT4ezjTcyABdzN7oOD5npRS2Daf3popqtHkEEH3MGqEIZMUK9oFyIZvQtnjruI7U-dlFUxFCv_OV8QRlS9sVcf8mjmanCxfLYJaSHSxmn11RQ1Ac81412WSwsR0HrQ22-vy887w-2E7drg9VXMBz4eaGwIDZGjuKV-MluRsnLZfHTq446g" />
              <span
                class="absolute top-2 right-2 bg-on-surface text-surface font-mono text-[11px] px-2 py-1 uppercase rounded">02
                Nov</span>
            </div>
            <div class="p-md">
              <div class="flex justify-between items-start mb-xs gap-2">
                <h3 class="font-display text-lg text-on-surface uppercase leading-tight">Desert Storm III</h3>
                <span class="shrink-0 text-on-surface-variant font-mono text-[11px] uppercase">Pendiente</span>
              </div>
              <p class="text-sm text-on-surface-variant mb-md leading-relaxed">Milsim de día completo en la franja de
                Atacama. Se requiere alta resistencia física.</p>
              <div class="flex items-center gap-md font-mono text-[11px] text-on-surface-variant">
                <span class="flex items-center gap-1"><span
                    class="material-symbols-outlined text-[15px]">location_on</span>Copiapó</span>
                <span class="flex items-center gap-1"><span
                    class="material-symbols-outlined text-[15px]">group</span>120/200</span>
              </div>
            </div>
          </article>
        </div>
      </div>

      <!-- FORO -->
      <aside id="foro"
        class="md:col-span-4 bg-surface-container-high border border-outline-variant rounded-lg p-md h-fit scroll-mt-24">
        <h2
          class="font-display text-xl uppercase text-on-surface border-b border-outline-variant pb-sm mb-md flex items-center gap-sm">
          <span class="material-symbols-outlined text-accent">forum</span> Noticias de inteligencia
        </h2>
        <div class="space-y-md">
          <a href="#" class="group block">
            <div class="flex items-center gap-xs text-accent font-mono text-[11px] mb-xs uppercase">
              <span class="material-symbols-outlined text-[14px]">push_pin</span> Fijado
            </div>
            <h4 class="text-sm text-on-surface font-semibold group-hover:text-primary transition-colors leading-snug">
              ¿Mejores pistolas GBB para climas fríos en el sur de Chile?</h4>
            <div class="flex items-center justify-between mt-sm font-mono text-[11px] text-on-surface-variant">
              <span>142 respuestas</span><span>Hace 2h</span>
            </div>
            <div class="h-px bg-outline-variant mt-md"></div>
          </a>
          <a href="#" class="group block">
            <h4 class="text-sm text-on-surface font-semibold group-hover:text-primary transition-colors leading-snug">
              Reseña del campo: BattleZone Santiago estrena barricadas nuevas</h4>
            <div class="flex items-center justify-between mt-sm font-mono text-[11px] text-on-surface-variant">
              <span>28 respuestas</span><span>Hace 5h</span>
            </div>
            <div class="h-px bg-outline-variant mt-md"></div>
          </a>
          <a href="#" class="group block">
            <div class="flex items-center gap-xs text-accent font-mono text-[11px] mb-xs uppercase">
              <span class="material-symbols-outlined text-[14px]">local_fire_department</span> Destacado
            </div>
            <h4 class="text-sm text-on-surface font-semibold group-hover:text-primary transition-colors leading-snug">
              Nuevas regulaciones legales para airsoft en 2026</h4>
            <div class="flex items-center justify-between mt-sm font-mono text-[11px] text-on-surface-variant">
              <span>539 respuestas</span><span>Hace 15m</span>
            </div>
          </a>
        </div>
        <button
          class="w-full mt-lg border border-outline-variant text-on-surface py-2.5 text-sm font-medium uppercase hover:bg-surface-container transition-colors rounded">
          Entrar al foro
        </button>
      </aside>
    </section>

    <!-- MAPA -->
    <section id="mapa" class="p-gutter max-w-container-max mx-auto mb-xl scroll-mt-24">
      <div class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden relative">
        <div
          class="absolute top-4 left-4 sm:top-6 sm:left-6 z-20 glass border border-outline-variant rounded-lg p-md max-w-xs">
          <h3 class="font-display text-lg text-primary uppercase mb-xs">Mapa estratégico</h3>
          <p class="text-sm text-on-surface-variant mb-md leading-relaxed">Más de 45 campos verificados en todo Chile.
            Disponibilidad y calificaciones en tiempo real.</p>
          <div class="space-y-sm">
            <div class="flex items-center gap-md text-sm">
              <span class="w-3 h-3 bg-primary rotate-45 shrink-0"></span><span class="font-mono text-[12px]">Arenas
                CQB</span>
            </div>
            <div class="flex items-center gap-md text-sm">
              <span class="w-3 h-3 bg-accent rotate-45 shrink-0"></span><span class="font-mono text-[12px]">Campos
                Milsim</span>
            </div>
            <div class="flex items-center gap-md text-sm">
              <span class="w-3 h-3 bg-on-surface-variant rotate-45 shrink-0"></span><span
                class="font-mono text-[12px]">Campos de práctica</span>
            </div>
          </div>
          <button
            class="w-full mt-lg bg-surface-container-high text-on-surface border border-outline-variant py-2.5 text-sm font-medium uppercase hover:bg-surface-container-high/70 transition-colors rounded">
            Filtros (0)
          </button>
        </div>

        <div class="h-[520px] w-full relative grid-overlay overflow-hidden">
          <img class="w-full h-full object-cover opacity-40 grayscale contrast-125"
            alt="Mapa topográfico de Chile con marcadores de ubicación de campos de airsoft."
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD7Jk4BirwM_t77htBHzb6TyCqcsdTshT5CTVGLHRVbg2NYp-faKvcdxab4lgwnvy3gNJi6fSZSsG1sxnojkN_lWvB9RstX52uNuxhPa3wnwTB5xm0sp3-c3L2eSh7zY7Bi5AtXWvogDAnLNRfo2Ujd8osbMJS_FGsnaLu9HBByDWH8rgQq0uI69PbGQ0X7Sn0BDCSJLGWSwyi7hVoaT0M4_LS15wqyV43tbplubh6hEqu4rqoag0UQHA" />

          <button class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 group"
            aria-label="Santiago BattleZone">
            <span class="block w-4 h-4 bg-primary rotate-45 border-2 border-surface animate-pulse"></span>
            <span
              class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 hidden group-hover:block group-focus:block glass border border-primary rounded p-2 text-xs font-mono whitespace-nowrap">[HQ]
              Santiago BattleZone</span>
          </button>
          <button class="absolute top-1/2 left-1/2 translate-x-8 translate-y-12 group"
            aria-label="Operaciones Puerto Valparaíso">
            <span class="block w-4 h-4 bg-accent rotate-45 border-2 border-surface"></span>
            <span
              class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 hidden group-hover:block group-focus:block glass border border-accent rounded p-2 text-xs font-mono whitespace-nowrap">Operaciones
              Puerto Valparaíso</span>
          </button>
          <button class="absolute bottom-1/4 left-1/2 -translate-x-20 group" aria-label="Campo Forestal Concepción">
            <span class="block w-4 h-4 bg-on-surface-variant rotate-45 border-2 border-surface"></span>
            <span
              class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 hidden group-hover:block group-focus:block glass border border-outline-variant rounded p-2 text-xs font-mono whitespace-nowrap">Campo
              Forestal Concepción</span>
          </button>

          <div class="absolute bottom-4 right-4 sm:bottom-6 sm:right-6 z-20 flex flex-col gap-sm items-end">
            <div
              class="bg-surface text-on-surface-variant font-mono px-3 py-1 border border-outline-variant text-[10px] rounded">
              LAT -33.4489 / LONG -70.6693</div>
            <div
              class="bg-surface text-on-surface-variant font-mono px-3 py-1 border border-outline-variant text-[10px] rounded">
              12 operaciones activas</div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="bg-surface-container relative py-xl px-gutter">
      <div class="max-w-container-max mx-auto flex flex-col items-center text-center">
        <div class="font-mono text-accent uppercase mb-sm tracking-widest text-xs">Alístate en la red</div>
        <h2 class="font-display text-3xl sm:text-4xl text-on-surface uppercase mb-md">Conviértete en operador</h2>
        <p class="text-on-surface-variant max-w-xl mb-lg leading-relaxed">Accede a eventos exclusivos, foros de comercio
          verificados y comunicaciones regionales.</p>
        <form class="flex flex-col sm:flex-row gap-xs w-full max-w-md" onsubmit="return false">
          <label for="email" class="sr-only">Correo electrónico</label>
          <input id="email"
            class="flex-1 bg-surface border-0 border-b-2 border-outline-variant focus:border-accent focus:ring-0 text-on-surface font-mono text-sm px-4 py-3 placeholder:text-on-surface-variant/50 rounded-t"
            placeholder="Ingresar correo" type="email" />
          <button
            class="bg-accent text-on-accent px-lg py-3 font-display uppercase clipped active:scale-95 transition-all">Iniciar</button>
        </form>
      </div>
    </section>

    <!-- FOOTER -->
    <footer
      class="w-full py-xl px-gutter flex flex-col md:flex-row justify-between items-center gap-md bg-surface-container-lowest border-t border-outline-variant">
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
  </main>

  <!-- MOBILE BOTTOM NAV -->
  <nav
    class="lg:hidden fixed bottom-0 left-0 w-full bg-surface border-t border-outline-variant z-50 flex justify-around items-center h-16 px-gutter">
    <a href="{{ url('/') }}" class="flex flex-col items-center gap-0.5 text-accent">
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
    // map pin toggle for keyboard/touch users
    document.querySelectorAll('button[aria-label] > span + span').forEach(() => { });

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

    // sticky header subtle elevation
    const header = document.querySelector('header');
    window.addEventListener('scroll', () => {
      header.classList.toggle('shadow-lg', window.scrollY > 20);
    });
    // login modal toggle
    document.addEventListener('DOMContentLoaded', () => {
      const btnLogin = document.getElementById('btn-login');
      const modal = document.getElementById('login-modal');

      // Abrir el modal
      btnLogin.addEventListener('click', () => {
        modal.classList.remove('hidden');
      });

      // Cerrar el modal al hacer clic en el fondo oscuro
      modal.addEventListener('click', (event) => {
        // Verifica que el clic fue en el fondo y no dentro de la caja del formulario
        if (event.target === modal) {
          modal.classList.add('hidden');
        }
      });
    });
  </script>
</body>

</html>