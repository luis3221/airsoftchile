<!DOCTYPE html>

<html class="dark" lang="es"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Foro | AIRSOFT CHILE</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@400;600;700&amp;family=Inter:wght@400;500;600&amp;family=Geist:wght@400;500;700&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .tactical-grid {
            background-image: radial-gradient(circle at 2px 2px, rgba(45, 55, 72, 0.2) 1px, transparent 0);
            background-size: 24px 24px;
        }
        .chamfer-edge {
            clip-path: polygon(0 0, calc(100% - 8px) 0, 100% 8px, 100% 100%, 8px 100%, 0 calc(100% - 8px));
        }
        .glass-panel {
            backdrop-filter: blur(4px);
            background: rgba(26, 29, 33, 0.85);
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-variant": "#333538",
                        "surface-container": "#1e2023",
                        "primary-fixed": "#dee5d2",
                        "on-tertiary-container": "#a0acc1",
                        "primary-container": "#3b4234",
                        "on-secondary": "#432c00",
                        "on-background": "#e2e2e6",
                        "on-tertiary-fixed": "#111c2c",
                        "tertiary-fixed-dim": "#bcc7dd",
                        "secondary": "#ffc970",
                        "on-secondary-container": "#614100",
                        "surface-container-high": "#282a2d",
                        "on-surface-variant": "#c6c7be",
                        "on-primary": "#2c3325",
                        "on-primary-fixed": "#171d12",
                        "tertiary-container": "#354052",
                        "on-tertiary": "#263142",
                        "on-secondary-fixed": "#281900",
                        "surface-tint": "#c2c9b6",
                        "primary": "#c2c9b6",
                        "inverse-primary": "#5a6151",
                        "secondary-container": "#f1a800",
                        "outline-variant": "#454841",
                        "secondary-fixed-dim": "#ffba3b",
                        "surface": "#111316",
                        "inverse-surface": "#e2e2e6",
                        "secondary-fixed": "#ffdead",
                        "tertiary-fixed": "#d8e3fa",
                        "on-error": "#690005",
                        "primary-fixed-dim": "#c2c9b6",
                        "error-container": "#93000a",
                        "background": "#111316",
                        "surface-container-low": "#1a1c1f",
                        "surface-container-lowest": "#0c0e11",
                        "on-surface": "#e2e2e6",
                        "surface-dim": "#111316",
                        "on-primary-fixed-variant": "#42493b",
                        "on-primary-container": "#a7ae9c",
                        "tertiary": "#bcc7dd",
                        "on-secondary-fixed-variant": "#604100",
                        "inverse-on-surface": "#2f3034",
                        "surface-container-highest": "#333538",
                        "error": "#ffb4ab",
                        "on-error-container": "#ffdad6",
                        "outline": "#909289",
                        "surface-bright": "#37393d",
                        "on-tertiary-fixed-variant": "#3c475a"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "container-max": "1280px",
                        "gutter": "20px",
                        "md": "16px",
                        "xs": "4px",
                        "lg": "24px",
                        "xl": "48px",
                        "sm": "8px",
                        "unit": "4px"
                    },
                    "fontFamily": {
                        "body-lg": ["Inter"],
                        "label-md": ["Geist"],
                        "headline-lg": ["Archivo Narrow"],
                        "headline-md": ["Archivo Narrow"],
                        "body-sm": ["Inter"],
                        "mono-sm": ["Geist"],
                        "body-md": ["Inter"],
                        "headline-sm": ["Archivo Narrow"],
                        "display-lg": ["Archivo Narrow"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "label-md": ["12px", {"lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "500"}],
                        "headline-lg": ["32px", {"lineHeight": "1.2", "letterSpacing": "0.02em", "fontWeight": "600"}],
                        "headline-md": ["24px", {"lineHeight": "1.2", "fontWeight": "600"}],
                        "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "mono-sm": ["13px", {"lineHeight": "1.4", "fontWeight": "400"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "headline-sm": ["20px", {"lineHeight": "1.2", "fontWeight": "600"}],
                        "display-lg": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}]
                    }
                },
            },
        }
    </script>
</head>
<body class="bg-surface text-on-surface font-body-md tactical-grid selection:bg-secondary selection:text-on-secondary">
<!-- TopNavBar Shell -->
<header class="fixed top-0 w-full z-50 flex justify-between items-center px-gutter h-16 max-w-container-max mx-auto border-b border-outline-variant bg-surface">
<div class="flex items-center gap-xl">
<span class="font-display-lg text-display-lg-mobile md:text-display-lg text-primary uppercase tracking-tighter">AIRSOFT CHILE</span>
<nav class="hidden md:flex gap-lg items-center">
<a class="text-on-surface-variant hover:text-primary transition-colors font-body-md text-body-md" href="#">Eventos</a>
<a class="text-secondary border-b-2 border-secondary pb-1 font-body-md text-body-md" href="#">Foro</a>
<a class="text-on-surface-variant hover:text-primary transition-colors font-body-md text-body-md" href="#">Campos</a>
<a class="text-on-surface-variant hover:text-primary transition-colors font-body-md text-body-md" href="#">Tiendas</a>
</nav>
</div>
<div class="flex items-center gap-md">
<div class="hidden md:flex items-center bg-surface-container-high px-md py-xs rounded border border-outline-variant">
<span class="material-symbols-outlined text-on-surface-variant text-[18px]">search</span>
<input class="bg-transparent border-none focus:ring-0 text-mono-sm font-mono-sm placeholder:text-on-surface-variant/50 w-48" placeholder="BUSCAR COMMS..." type="text"/>
</div>
<button class="material-symbols-outlined text-primary hover:bg-surface-container-high p-sm transition-all active:scale-95 duration-100">account_circle</button>
</div>
</header>
<!-- SideNavBar Shell -->
<aside class="hidden lg:flex flex-col fixed left-0 top-16 h-[calc(100vh-64px)] z-40 bg-surface-container border-r border-outline-variant w-64 pt-lg pb-md">
<div class="px-lg mb-xl">
<div class="flex items-center gap-md mb-sm">
<div class="w-10 h-10 rounded-lg bg-surface-container-highest border border-outline overflow-hidden">
<img class="w-full h-full object-cover" data-alt="A gritty, professional portrait of a tactical airsoft operator wearing high-end headgear, a dark matte helmet, and communication headsets. The lighting is dramatic and low-key with sharp edges, following a dark-tactical aesthetic with olive and charcoal tones. High-resolution digital art style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJceABaeg6kZq-Az09KN2qKKYYT3cilyN9SwU61SOuLRXRUq9gsLAx2IbjJfUt-EdIZ1uHD0ny07YRGtu4-l-EPj0qkQW-wfg_NoivriICDFMsDahrOM2nMgpy5wSnnWd6DPdYSVN55df_GjYDR1QR1ddUXi5rV1rbj5G-_imtFTQ7V2gBaiV8A3adgKHyaeil7F7LOmLqSSszN9O4lzo3BP4kJ6zw41Lxpf1yFCfH9LnK1FGiaeXLEw"/>
</div>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-primary">OPERADOR</span>
<span class="font-label-md text-label-md text-on-surface-variant">Santiago, CL</span>
</div>
</div>
<button class="w-full bg-secondary text-on-secondary font-label-md py-sm rounded-lg hover:brightness-110 active:scale-95 transition-all chamfer-edge" onclick="toggleAuthPrompt()">PUBLICAR EVENTO</button>
</div>
<nav class="flex-1 overflow-y-auto">
<a class="text-on-surface-variant hover:text-on-surface px-4 py-3 flex items-center gap-md hover:bg-surface-variant transition-transform duration-200 ease-in-out" href="#">
<span class="material-symbols-outlined">home</span>
<span class="font-label-md">Inicio</span>
</a>
<a class="text-on-surface-variant hover:text-on-surface px-4 py-3 flex items-center gap-md hover:bg-surface-variant transition-transform duration-200 ease-in-out" href="#">
<span class="material-symbols-outlined">event</span>
<span class="font-label-md">Eventos</span>
</a>
<a class="bg-primary-container text-on-primary-container rounded-lg mx-2 px-4 py-3 flex items-center gap-md transition-transform duration-200 ease-in-out" href="#">
<span class="material-symbols-outlined">forum</span>
<span class="font-label-md">Foro</span>
</a>
<a class="text-on-surface-variant hover:text-on-surface px-4 py-3 flex items-center gap-md hover:bg-surface-variant transition-transform duration-200 ease-in-out" href="#">
<span class="material-symbols-outlined">map</span>
<span class="font-label-md">Campos</span>
</a>
<a class="text-on-surface-variant hover:text-on-surface px-4 py-3 flex items-center gap-md hover:bg-surface-variant transition-transform duration-200 ease-in-out" href="#">
<span class="material-symbols-outlined">storefront</span>
<span class="font-label-md">Tiendas</span>
</a>
</nav>
<div class="mt-auto px-2">
<a class="text-on-surface-variant hover:text-on-surface px-4 py-3 flex items-center gap-md hover:bg-surface-variant rounded-lg transition-all" href="#">
<span class="material-symbols-outlined">settings</span>
<span class="font-label-md">Configuración</span>
</a>
<a class="text-on-surface-variant hover:text-on-surface px-4 py-3 flex items-center gap-md hover:bg-surface-variant rounded-lg transition-all" href="#">
<span class="material-symbols-outlined">help</span>
<span class="font-label-md">Soporte</span>
</a>
</div>
</aside>
<!-- Main Canvas -->
<main class="lg:ml-64 pt-24 pb-xl px-gutter max-w-container-max mx-auto">
<!-- Forum Header -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-md mb-xl">
<div>
<div class="flex items-center gap-sm mb-xs">
<span class="bg-primary text-on-primary font-mono-sm text-[10px] px-xs py-[2px] rounded uppercase">Live_Comms</span>
<span class="text-on-surface-variant font-mono-sm text-mono-sm uppercase tracking-widest">Red Táctica</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-primary uppercase">FORO DE COMANDO CENTRAL</h1>
</div>
<button class="bg-secondary text-on-secondary px-lg py-md font-label-md uppercase tracking-wider rounded-lg shadow-lg hover:shadow-secondary/20 transition-all flex items-center gap-sm chamfer-edge active:scale-95" onclick="toggleAuthPrompt()">
<span class="material-symbols-outlined text-[18px]">add_circle</span>
                NUEVA PUBLICACIÓN
            </button>
</div>
<div class="grid grid-cols-1 xl:grid-cols-12 gap-lg items-start">
<!-- Category & Threads Column -->
<div class="xl:col-span-8 space-y-lg">
<!-- Category Selector (Bento Style) -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-sm">
<button class="group p-lg bg-surface-container-low border border-outline-variant hover:border-primary transition-all text-left flex flex-col justify-between h-32 rounded-lg">
<span class="material-symbols-outlined text-primary text-[32px] group-hover:scale-110 transition-transform">military_tech</span>
<span class="font-headline-sm text-headline-sm uppercase text-on-surface">Táctica y Estrategia</span>
</button>
<button class="group p-lg bg-surface-container-low border border-outline-variant hover:border-primary transition-all text-left flex flex-col justify-between h-32 rounded-lg">
<span class="material-symbols-outlined text-primary text-[32px] group-hover:scale-110 transition-transform">precision_manufacturing</span>
<span class="font-headline-sm text-headline-sm uppercase text-on-surface">Equipamiento</span>
</button>
<button class="group p-lg bg-surface-container-low border border-outline-variant hover:border-primary transition-all text-left flex flex-col justify-between h-32 rounded-lg">
<span class="material-symbols-outlined text-primary text-[32px] group-hover:scale-110 transition-transform">radar</span>
<span class="font-headline-sm text-headline-sm uppercase text-on-surface">Zonas de Juego</span>
</button>
<button class="group p-lg bg-surface-container-low border border-outline-variant hover:border-primary transition-all text-left flex flex-col justify-between h-32 rounded-lg">
<span class="material-symbols-outlined text-secondary text-[32px] group-hover:scale-110 transition-transform">payments</span>
<span class="font-headline-sm text-headline-sm uppercase text-secondary">Compra/Venta</span>
</button>
</div>
<!-- Recent Threads List -->
<div class="bg-surface-container border border-outline-variant rounded-xl overflow-hidden">
<div class="bg-surface-container-high px-lg py-md border-b border-outline-variant flex justify-between items-center">
<h3 class="font-mono-sm text-mono-sm uppercase text-primary-fixed">INTELIGENCIA RECIENTE / HILOS</h3>
<div class="flex gap-sm">
<span class="font-label-md text-on-surface-variant">ORDENAR POR:</span>
<select class="bg-transparent border-none font-label-md text-primary p-0 cursor-pointer focus:ring-0">
<option>ÚLTIMA ACTIVIDAD</option>
<option>MÁS RESPUESTAS</option>
</select>
</div>
</div>
<div class="divide-y divide-outline-variant/30">
<!-- Thread Item -->
<div class="group px-lg py-md flex items-center gap-md hover:bg-surface-container-highest transition-colors cursor-pointer">
<img class="w-10 h-10 rounded bg-surface-variant object-cover border border-outline-variant" data-alt="A small circular avatar of an airsoft player in multicam gear with a tactical cap and protective glasses. High-contrast lighting against a dark equipment-filled background. Tactical-professional style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6QbgfbmE0ZTBgi30lQNr6LPYtZYQTb8JhJVbJ4bodurRCW1IdlS0IxRwwukCUQriWksPny3RcJulzl7W8XOruIWqTQ6hNMpV4wMvnOroo7ugAwFec1aRHKx7FMAwY4b1aNVhI5NHzl3SNOFCmduzvo2LJyCIToiLEK8BDSzf3lIO05D4geSVXaW6LsLRsbfi8F3vegBT7NC5txOv9amByV7NBrFm9bRUHMygJq7POgvc8rNj_SApPig"/>
<div class="flex-1 min-w-0">
<div class="flex items-center gap-sm mb-xs">
<span class="font-mono-sm text-[11px] text-secondary border border-secondary/30 px-xs rounded">FIJADO</span>
<h4 class="font-headline-sm text-on-surface truncate group-hover:text-primary transition-colors uppercase">Guía: Mantenimiento Preventivo de GBBR (2024)</h4>
</div>
<div class="flex items-center gap-md text-on-surface-variant font-body-sm text-body-sm">
<span>Por <span class="text-primary-fixed">Viper_Operator</span></span>
<span>• hace 24m</span>
<span class="hidden md:inline-flex items-center gap-xs"><span class="material-symbols-outlined text-[14px]">comment</span> 142</span>
</div>
</div>
<div class="hidden md:flex flex-col items-end shrink-0">
<span class="font-mono-sm text-mono-sm text-on-surface-variant uppercase">Última Actividad</span>
<span class="font-body-sm text-primary">Hoy, 14:32</span>
</div>
</div>
<!-- Thread Item -->
<div class="group px-lg py-md flex items-center gap-md hover:bg-surface-container-highest transition-colors cursor-pointer">
<img class="w-10 h-10 rounded bg-surface-variant object-cover border border-outline-variant" data-alt="A portrait avatar of a player wearing a black balaclava and clear tactical goggles, holding a radio. Industrial dark atmosphere with sharp yellow accent lighting. Professional airsoft community profile aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZJV4EW1EpOcpE4WKuc_s6jiJ9lebhdG58UJcG00HqT9qr8RN0O4zlb_sd0zd2yr8Q4fbAfIarrg0_W3SG9vsEJwbW40kWvepCopWvN_LA03-Yp18tSdu_CaNK7rLQ6j-80ap4bNxmbTOzix-4E5csxNzPrOVOjzJwKifUlbLwXMc0D4Ehmc_WlACCxceLQfMquoi-hqwMusy2aUGIyiL3kFDTkn4au3kWNlZJpZyI___yVdVdYZchDg"/>
<div class="flex-1 min-w-0">
<div class="flex items-center gap-sm mb-xs">
<h4 class="font-headline-sm text-on-surface truncate group-hover:text-primary transition-colors uppercase">[VENDO] Tokyo Marui MWS + 4 Mags</h4>
</div>
<div class="flex items-center gap-md text-on-surface-variant font-body-sm text-body-sm">
<span>Por <span class="text-primary-fixed">Ghost_CL</span></span>
<span>• hace 1h</span>
<span class="hidden md:inline-flex items-center gap-xs"><span class="material-symbols-outlined text-[14px]">comment</span> 12</span>
</div>
</div>
<div class="hidden md:flex flex-col items-end shrink-0">
<span class="font-mono-sm text-mono-sm text-on-surface-variant uppercase">Última Actividad</span>
<span class="font-body-sm text-primary">Hoy, 15:01</span>
</div>
</div>
<!-- Thread Item -->
<div class="group px-lg py-md flex items-center gap-md hover:bg-surface-container-highest transition-colors cursor-pointer">
<img class="w-10 h-10 rounded bg-surface-variant object-cover border border-outline-variant" data-alt="Close-up avatar of a person wearing a coyote brown tactical vest with Chilean flag patch. Sunlight filtering through trees in the background, creating a woodland field atmosphere. Sharp focus on the texture of the fabric." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAg_ukF23uDpgUt-PJpHgu4BnvR96jF54WUEMLrCE_NS8RzygWTk2gFcqUz8SeK7cqmhWW-5eeSkKxM9F-J4ytXUVt_MquhkBZQvrQhlq3ydYGa7VRMILjEQF0YRm-GMesv3tjiH5WgwUGxG8PGunTjjldFhgG3xC3F-wGVYpRSkOF7KXBTe5jlVqm6k2lVf7_SHIrlnWL4qJzduGZ-5rPr62bf_-U9ZWxsio9MQDTNxD7wUKnu4Ag8Q"/>
<div class="flex-1 min-w-0">
<div class="flex items-center gap-sm mb-xs">
<h4 class="font-headline-sm text-on-surface truncate group-hover:text-primary transition-colors uppercase">Nuevo Campo en Melipilla: ¿Alguien lo conoce?</h4>
</div>
<div class="flex items-center gap-md text-on-surface-variant font-body-sm text-body-sm">
<span>Por <span class="text-primary-fixed">Coyote_1</span></span>
<span>• hace 4h</span>
<span class="hidden md:inline-flex items-center gap-xs"><span class="material-symbols-outlined text-[14px]">comment</span> 45</span>
</div>
</div>
<div class="hidden md:flex flex-col items-end shrink-0">
<span class="font-mono-sm text-mono-sm text-on-surface-variant uppercase">Última Actividad</span>
<span class="font-body-sm text-primary">Ayer, 22:15</span>
</div>
</div>
<!-- Thread Item -->
<div class="group px-lg py-md flex items-center gap-md hover:bg-surface-container-highest transition-colors cursor-pointer">
<img class="w-10 h-10 rounded bg-surface-variant object-cover border border-outline-variant" data-alt="Circular avatar of an operator in high-end woodland digital camo, wearing a tactical headset and dark glasses. Low depth of field, focused on the sharp details of the gear. Matte colors, professional finish." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBqocGFfEUpNfihdJamaQRObCKgRVXWnDF6c3YmjDviAleZBNFsfgnrKtnoWf8q1BEmxAMrja_5jhsFY4b8vrEBHMtzrGz_RZYr9tuhwy6RjLjFhzWt2-qopoOleMMRNJoi4YkJO-65Q95A9GLBCgnfR7mjUNctVO36uqbEzM1dcELKw46XwSuUs6r6RbtKdBWCV0Lpw3LMzidZXWNnNn5zGKmwzwsZ89tAu3e6SOto-ZzWfswNcSH5Ow"/>
<div class="flex-1 min-w-0">
<div class="flex items-center gap-sm mb-xs">
<h4 class="font-headline-sm text-on-surface truncate group-hover:text-primary transition-colors uppercase">Debate: ¿HPA vs AEG en Milsim de larga duración?</h4>
</div>
<div class="flex items-center gap-md text-on-surface-variant font-body-sm text-body-sm">
<span>Por <span class="text-primary-fixed">Nightfall</span></span>
<span>• hace 6h</span>
<span class="hidden md:inline-flex items-center gap-xs"><span class="material-symbols-outlined text-[14px]">comment</span> 89</span>
</div>
</div>
<div class="hidden md:flex flex-col items-end shrink-0">
<span class="font-mono-sm text-mono-sm text-on-surface-variant uppercase">Última Actividad</span>
<span class="font-body-sm text-primary">Oct 23, 11:45</span>
</div>
</div>
</div>
<div class="bg-surface-container-high p-md text-center">
<button class="text-primary font-label-md hover:underline uppercase tracking-widest">CARGAR MÁS COMUNICACIONES</button>
</div>
</div>
</div>
<!-- Sidebar Column -->
<aside class="xl:col-span-4 space-y-lg">
<!-- Online Members Widget -->
<div class="bg-surface-container border border-outline-variant rounded-xl overflow-hidden">
<div class="bg-primary/10 border-b border-primary/20 px-lg py-md flex justify-between items-center">
<h3 class="font-headline-sm text-headline-sm text-primary uppercase">Operadores Activos</h3>
<span class="bg-primary text-on-primary font-mono-sm px-xs py-0.5 rounded text-[10px]">142 EN LÍNEA</span>
</div>
<div class="p-lg">
<div class="flex flex-wrap gap-sm">
<!-- Operator Tooltip-like Chips -->
<div class="flex items-center gap-xs bg-surface-container-highest px-sm py-1 rounded border border-outline-variant">
<div class="w-2 h-2 rounded-full bg-green-500"></div>
<span class="font-mono-sm text-mono-sm text-on-surface">Viper_Ops</span>
</div>
<div class="flex items-center gap-xs bg-surface-container-highest px-sm py-1 rounded border border-outline-variant">
<div class="w-2 h-2 rounded-full bg-green-500"></div>
<span class="font-mono-sm text-mono-sm text-on-surface">Alpha_CL</span>
</div>
<div class="flex items-center gap-xs bg-surface-container-highest px-sm py-1 rounded border border-outline-variant">
<div class="w-2 h-2 rounded-full bg-green-500"></div>
<span class="font-mono-sm text-mono-sm text-on-surface">Sierra7</span>
</div>
<div class="flex items-center gap-xs bg-surface-container-highest px-sm py-1 rounded border border-outline-variant">
<div class="w-2 h-2 rounded-full bg-green-500"></div>
<span class="font-mono-sm text-mono-sm text-on-surface">Wolf_99</span>
</div>
<div class="flex items-center gap-xs bg-surface-container-highest px-sm py-1 rounded border border-outline-variant">
<div class="w-2 h-2 rounded-full bg-green-500"></div>
<span class="font-mono-sm text-mono-sm text-on-surface">FoxTrot</span>
</div>
<div class="flex items-center gap-xs bg-surface-container-highest px-sm py-1 rounded border border-outline-variant">
<div class="w-2 h-2 rounded-full bg-amber-500"></div>
<span class="font-mono-sm text-mono-sm text-on-surface-variant">Admin_Bravo</span>
</div>
<div class="text-on-surface-variant font-mono-sm text-mono-sm py-1">+136 más</div>
</div>
</div>
</div>
<!-- Forum Rules Widget -->
<div class="bg-surface-container border border-outline-variant rounded-xl overflow-hidden">
<div class="bg-surface-container-high px-lg py-md border-b border-outline-variant">
<h3 class="font-headline-sm text-headline-sm text-primary uppercase">PROCEDIMIENTOS ESTÁNDAR DE OPERACIÓN</h3>
</div>
<div class="p-lg space-y-md">
<div class="flex gap-md">
<span class="font-mono-sm text-primary text-lg">01</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">
<strong class="text-on-surface uppercase">LA HONESTIDAD ES LO PRIMERO:</strong> El airsoft se basa en el honor. Cualquier reporte de trampa en campos será sancionado en el foro.
                            </p>
</div>
<div class="flex gap-md">
<span class="font-mono-sm text-primary text-lg">02</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">
<strong class="text-on-surface uppercase">SIN RÉPLICAS REALES:</strong> Prohibido publicar armas de fuego reales o accesorios prohibidos por ley.
                            </p>
</div>
<div class="flex gap-md">
<span class="font-mono-sm text-primary text-lg">03</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">
<strong class="text-on-surface uppercase">CATEGORIZACIÓN:</strong> Mantén los hilos en su sección correspondiente para facilitar la navegación.
                            </p>
</div>
<button class="w-full border border-outline-variant hover:bg-surface-variant py-sm rounded font-label-md transition-all text-on-surface-variant uppercase tracking-widest">Leer SOPs completos</button>
</div>
</div>
<!-- Featured Store / Sponsorship -->
<div class="relative group h-48 rounded-xl overflow-hidden border border-outline-variant">
<div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500" data-alt="A cinematic, high-contrast image of a tactical gear store display. Glowing glass cases featuring high-end airsoft replicas (AEG, GBB) and professional olive-drab tactical vests. The lighting is cool-toned with sharp white highlights on metallic surfaces. Professional photography for a luxury gear store." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAjANhbHWwmUMFdUCyo2nN4mkptBiLaOfxbg1Pob42endu4yFEHajfDlmaMj12JiIls31zWdPdvhYZRYvrxy6CbJJibkZphE9cn-aB1Z0X-35YJlPhL2yRxGstmmebflXnyUbNSdWaxf_-Bd2NK05eat62jYWklS03Fj1PwNuXG0_VFu0FotbsMis--WIcHM1VNPhDjrRTPTE-3GebZQALbUDxecYxtqzZGQI_3oiwg4-rI0Rkdh4YZNg')"></div>
<div class="absolute inset-0 bg-gradient-to-t from-surface to-transparent opacity-80"></div>
<div class="absolute bottom-0 left-0 p-lg">
<span class="bg-secondary text-on-secondary font-mono-sm text-[10px] px-xs py-0.5 rounded uppercase mb-sm inline-block">Soporte Patrocinado</span>
<h4 class="font-headline-sm text-on-surface uppercase">TACTICAL DEPOT CHILE</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">15% de Descuento para Operadores Registrados</p>
</div>
</div>
</aside>
</div>
</main>
<!-- Footer Shell -->
<footer class="w-full py-xl px-gutter flex flex-col md:flex-row justify-between items-center gap-md border-t border-outline-variant bg-surface-container-lowest text-on-tertiary-container font-mono-sm text-mono-sm">
<div class="flex flex-col items-center md:items-start">
<span class="font-headline-md text-headline-md text-primary mb-xs">AIRSOFT CHILE</span>
<p>© 2024 AIRSOFT CHILE - RED DE COMUNIDAD TÁCTICA</p>
</div>
<div class="flex gap-lg flex-wrap justify-center">
<a class="text-on-surface-variant hover:text-primary hover:underline transition-all" href="#">Política de Privacidad</a>
<a class="text-on-surface-variant hover:text-primary hover:underline transition-all" href="#">Guía de Campo</a>
<a class="text-on-surface-variant hover:text-primary hover:underline transition-all" href="#">Patrocinios</a>
<a class="text-on-surface-variant hover:text-primary hover:underline transition-all" href="#">Contactar Comando</a>
</div>
</footer>
<!-- Login Prompt Modal (Initial state: Hidden) -->
<div class="fixed inset-0 z-[100] flex items-center justify-center hidden" id="auth-modal">
<div class="absolute inset-0 bg-black/80 backdrop-blur-sm" onclick="toggleAuthPrompt()"></div>
<div class="relative w-full max-w-md bg-surface-container border border-outline-variant p-xl rounded-xl glass-panel chamfer-edge shadow-2xl">
<div class="flex flex-col items-center text-center mb-xl">
<span class="material-symbols-outlined text-primary text-[48px] mb-md">lock_person</span>
<h2 class="font-headline-lg text-headline-lg text-on-surface uppercase">AUTENTICACIÓN REQUERIDA</h2>
<p class="font-body-md text-on-surface-variant mt-sm">Debes ser un Operador registrado para iniciar una nueva transmisión de inteligencia.</p>
</div>
<div class="space-y-md">
<button class="w-full bg-primary text-on-primary font-label-md py-md rounded uppercase tracking-widest hover:brightness-110 transition-all chamfer-edge">Iniciar Sesión en la Base</button>
<button class="w-full border border-outline-variant text-on-surface font-label-md py-md rounded uppercase tracking-widest hover:bg-surface-variant transition-all chamfer-edge">Solicitar Alistamiento (Registrarse)</button>
</div>
<button class="mt-xl text-on-surface-variant font-mono-sm text-mono-sm uppercase hover:text-primary w-full text-center" onclick="toggleAuthPrompt()">Abortar Operación</button>
</div>
</div>
<script>
        function toggleAuthPrompt() {
            const modal = document.getElementById('auth-modal');
            if (modal.classList.contains('hidden')) {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            } else {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        }

        // Close on ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                document.getElementById('auth-modal').classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        });
    </script>
</body></html>