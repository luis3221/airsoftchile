<!DOCTYPE html>
<html class="dark" lang="es">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>@yield('title', 'Airsoft Chile')</title>
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
  @stack('estilos')
</head>

<body class="font-body text-[15px] overflow-x-hidden">

  {{-- Header, menú móvil, sidebar y footer viven en partials reutilizables --}}
  @include('partials.nav')

  <aside
    class="hidden lg:flex flex-col fixed left-0 top-[6.5rem] h-[calc(100%-6.5rem)] z-30 bg-surface-container border-r border-outline-variant w-60">
    @include('partials.sidebar')
  </aside>

  <main class="lg:pl-60 pt-[6.5rem] pb-24 lg:pb-12 px-gutter grid-overlay min-h-screen">
    <div class="max-w-container-max mx-auto py-lg">

      @if (session('exito'))
        <div class="mb-lg p-md rounded-lg border border-primary/40 bg-primary-container text-on-primary-container text-sm flex items-center gap-2">
          <span class="material-symbols-outlined text-[18px]">check_circle</span>
          {{ session('exito') }}
        </div>
      @endif

      @yield('content')

    </div>
  </main>

  @include('partials.footer')
  @include('partials.bottom-nav')

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
  @stack('scripts')
</body>

</html>
