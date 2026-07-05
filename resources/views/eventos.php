<!DOCTYPE html>

<html class="dark" lang="es"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Eventos | AIRSOFT CHILE</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@400;600;700&amp;family=Inter:wght@400;500;600&amp;family=Geist:wght@400;500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .clipped-corner {
            clip-path: polygon(0% 0%, 90% 0%, 100% 15%, 100% 100%, 10% 100%, 0% 85%);
        }
        .tactical-grid {
            background-image: radial-gradient(circle, #2d3748 1px, transparent 1px);
            background-size: 24px 24px;
        }
        .glass-panel {
            backdrop-filter: blur(4px);
            background: rgba(26, 29, 33, 0.85);
        }
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #111316;
        }
        ::-webkit-scrollbar-thumb {
            background: #333538;
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #c2c9b6;
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
<body class="bg-background text-on-background font-body-md overflow-x-hidden">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 flex justify-between items-center px-gutter h-16 bg-surface border-b border-outline-variant max-w-container-max mx-auto left-0 right-0">
<div class="flex items-center gap-xl">
<span class="font-display-lg text-display-lg-mobile md:text-display-lg text-primary uppercase tracking-tighter">AIRSOFT CHILE</span>
<div class="hidden md:flex gap-lg">
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Eventos</a>
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Foro</a>
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Canchas</a>
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Tiendas</a>
</div>
</div>
<div class="flex items-center gap-md">
<div class="relative hidden sm:block">
<input class="bg-surface-container-low border-b border-outline text-on-surface py-1 px-4 focus:outline-none focus:border-secondary transition-all w-48 font-mono-sm" placeholder="Buscar misión..." type="text"/>
</div>
<button class="material-symbols-outlined text-primary hover:bg-surface-container-high p-2 rounded-full transition-all Active: scale-95 duration-100">account_circle</button>
</div>
</nav>
<!-- SideNavBar (Desktop Only) -->
<aside class="hidden lg:flex flex-col fixed left-0 top-16 h-[calc(100vh-64px)] z-40 bg-surface-container w-64 border-r border-outline-variant shadow-md">
<div class="p-lg border-b border-outline-variant flex items-center gap-md">
<div class="w-10 h-10 bg-primary-container rounded-lg flex items-center justify-center border border-outline">
<span class="material-symbols-outlined text-primary">security</span>
</div>
<div>
<p class="font-headline-sm text-headline-sm text-primary uppercase leading-tight">OPERADOR</p>
<p class="font-label-md text-label-md text-on-surface-variant">Santiago, CL</p>
</div>
</div>
<div class="flex-grow py-md">
<a class="flex items-center gap-md text-on-surface-variant hover:text-on-surface px-4 py-3 hover:bg-surface-variant transition-transform duration-200 ease-in-out" href="#">
<span class="material-symbols-outlined">home</span>
<span class="font-label-md">Inicio</span>
</a>
<a class="flex items-center gap-md bg-primary-container text-on-primary-container rounded-lg mx-2 px-4 py-3" href="#">
<span class="material-symbols-outlined">event</span>
<span class="font-label-md">Eventos</span>
</a>
<a class="flex items-center gap-md text-on-surface-variant hover:text-on-surface px-4 py-3 hover:bg-surface-variant transition-transform duration-200 ease-in-out" href="#">
<span class="material-symbols-outlined">forum</span>
<span class="font-label-md">Foro</span>
</a>
<a class="flex items-center gap-md text-on-surface-variant hover:text-on-surface px-4 py-3 hover:bg-surface-variant transition-transform duration-200 ease-in-out" href="#">
<span class="material-symbols-outlined">map</span>
<span class="font-label-md">Canchas</span>
</a>
<a class="flex items-center gap-md text-on-surface-variant hover:text-on-surface px-4 py-3 hover:bg-surface-variant transition-transform duration-200 ease-in-out" href="#">
<span class="material-symbols-outlined">storefront</span>
<span class="font-label-md">Tiendas</span>
</a>
</div>
<div class="p-lg">
<button class="w-full bg-secondary text-on-secondary font-label-md py-3 font-bold uppercase tracking-widest clipped-corner hover:brightness-110 active:scale-95 transition-all">PUBLICAR EVENTO</button>
</div>
<div class="border-t border-outline-variant p-md">
<a class="flex items-center gap-md text-on-surface-variant hover:text-on-surface px-4 py-2 font-label-md" href="#">
<span class="material-symbols-outlined">settings</span>
            Configuración
        </a>
<a class="flex items-center gap-md text-on-surface-variant hover:text-on-surface px-4 py-2 font-label-md" href="#">
<span class="material-symbols-outlined">help</span>
            Soporte
        </a>
</div>
</aside>
<!-- Main Content Canvas -->
<main class="lg:ml-64 pt-20 px-gutter min-h-screen tactical-grid">
<div class="max-w-container-max mx-auto py-lg">
<!-- Header section -->
<div class="flex flex-col md:flex-row justify-between items-end gap-md mb-xl">
<div>
<h1 class="font-headline-lg text-headline-lg text-primary uppercase tracking-wider mb-xs">Calendario de Despliegue</h1>
<p class="font-body-md text-on-surface-variant max-w-xl">Monitorea los teatros de operaciones activos en todo el territorio. Todas las misiones requieren verificación previa y charlas de seguridad.</p>
</div>
<div class="text-right">
<span class="font-mono-sm text-secondary bg-secondary/10 px-3 py-1 border border-secondary/30">[ ESTADO: OPERATIVO ]</span>
</div>
</div>
<!-- Bento Filter Bar -->
<section class="grid grid-cols-1 md:grid-cols-4 gap-sm mb-xl p-xs bg-surface-container border border-outline-variant rounded-lg">
<div class="flex flex-col gap-xs p-md bg-surface-container-low rounded-lg border border-outline-variant/30">
<label class="font-label-md text-on-surface-variant uppercase">Región</label>
<select class="bg-transparent border-none text-primary font-headline-sm focus:ring-0 cursor-pointer">
<option>Todo Chile</option>
<option>Metropolitana</option>
<option>Valparaíso</option>
<option>Araucanía</option>
</select>
</div>
<div class="flex flex-col gap-xs p-md bg-surface-container-low rounded-lg border border-outline-variant/30">
<label class="font-label-md text-on-surface-variant uppercase">Tipo de Juego</label>
<div class="flex gap-xs mt-xs">
<button class="px-3 py-1 bg-primary text-on-primary font-mono-sm rounded-sm">MILSIM</button>
<button class="px-3 py-1 bg-surface-variant text-on-surface-variant font-mono-sm rounded-sm hover:text-on-surface">SPEED</button>
<button class="px-3 py-1 bg-surface-variant text-on-surface-variant font-mono-sm rounded-sm hover:text-on-surface">REC</button>
</div>
</div>
<div class="flex flex-col gap-xs p-md bg-surface-container-low rounded-lg border border-outline-variant/30">
<label class="font-label-md text-on-surface-variant uppercase">Rango de Fechas</label>
<input class="bg-transparent border-none text-primary font-headline-sm focus:ring-0 w-full" type="month" value="2024-11"/>
</div>
<div class="flex flex-col justify-center p-md bg-surface-variant/40 rounded-lg">
<button class="flex items-center justify-center gap-md w-full bg-outline-variant text-on-surface font-label-md py-3 rounded-sm hover:bg-primary hover:text-on-primary transition-all">
<span class="material-symbols-outlined">filter_list</span>
                    LIMPIAR FILTROS
                </button>
</div>
</section>
<!-- Event Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-lg">
<!-- Event Card 1 -->
<div class="group bg-surface-container border border-outline-variant rounded-lg overflow-hidden flex flex-col hover:border-secondary transition-all">
<div class="relative h-48 overflow-hidden">
<div class="absolute top-0 left-0 w-full bg-gradient-to-b from-black/60 to-transparent p-md z-10">
<span class="font-mono-sm text-secondary bg-black/40 px-2 py-1 border border-secondary/50">[ MILSIM OPERATIVO ]</span>
</div>
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Action shot of airsoft players in full tactical gear navigating a dense forest during a simulated night mission. The lighting is low-key with silhouettes and subtle green muzzle flashes. The overall aesthetic is gritty, professional, and military-grade, utilizing a color palette of deep olives and charcoal grays." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDPg6T3lP-Wd0Mq-Z9dl9IQ4TtI49PY6UoTgSDmX28SGtt9fcUjzwTkgXHrcROugANysrWqINHjVoARMyh9ruwV4MugVWKdkDkQ8l0jc8vXdrR0JtnPACxF9PK4Q-l9H4uU1qxMf4UMbN8NoMIgD6m3EDgOiXv9nqwAEbYq5kW_c61wEkUid5b80n7bDI2zdfnbdNniiErxQbBx0osTJN950UrFibJJ1etjlWvDkQ40YFImZo0w7kaCA"/>
</div>
<div class="p-lg flex flex-col flex-grow">
<div class="flex justify-between items-start mb-md">
<div>
<p class="font-mono-sm text-primary mb-xs">24 NOV | 08:00 HRS</p>
<h3 class="font-headline-md text-headline-md text-on-surface uppercase tracking-tight">Operación Cóndor</h3>
</div>
<div class="text-right">
<p class="font-label-md text-on-surface-variant uppercase">Costo de Entrada</p>
<p class="font-headline-sm text-secondary">$15.000</p>
</div>
</div>
<div class="flex items-center gap-sm mb-lg text-on-surface-variant">
<span class="material-symbols-outlined text-md">location_on</span>
<span class="font-body-sm">Cajón del Maipo, RM</span>
</div>
<div class="mt-auto pt-md border-t border-outline-variant/30 flex items-center justify-between">
<div class="flex -space-x-2">
<div class="w-8 h-8 rounded-full bg-surface-variant border-2 border-surface flex items-center justify-center text-[10px] font-bold">JD</div>
<div class="w-8 h-8 rounded-full bg-primary border-2 border-surface flex items-center justify-center text-[10px] font-bold text-on-primary">AT</div>
<div class="w-8 h-8 rounded-full bg-secondary border-2 border-surface flex items-center justify-center text-[10px] font-bold text-on-secondary">+42</div>
</div>
<button class="bg-primary text-on-primary font-label-md px-6 py-2 uppercase tracking-tighter rounded-sm hover:brightness-110 active:scale-95 transition-all">Registrarse</button>
</div>
</div>
</div>
<!-- Event Card 2 -->
<div class="group bg-surface-container border border-outline-variant rounded-lg overflow-hidden flex flex-col hover:border-secondary transition-all">
<div class="relative h-48 overflow-hidden">
<div class="absolute top-0 left-0 w-full bg-gradient-to-b from-black/60 to-transparent p-md z-10">
<span class="font-mono-sm text-on-tertiary bg-black/40 px-2 py-1 border border-tertiary/50">[ TORNEO SPEEDSOFT ]</span>
</div>
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="High-intensity speedsoft competition inside a neon-lit indoor arena. Players are wearing vibrant jerseys and lightweight masks, sprinting through inflatable bunkers. The lighting features sharp blue and amber glows against a dark industrial background. The style is modern, fast-paced, and high-contrast." src="https://lh3.googleusercontent.com/aida-public/AB6AXuADZYQKIyLtnKNFJtPjVYfyoXTuPIgALNTGh9Fl0c0GwwPfORG2OAyoLDD1NZzS0b3OG5JdggTvU7AI04oKXlYawHRTveX1_EgIBufG88kYj9eWzo0uVyQwZQgGwGVwKbJwTSnVJPk36q7W7TwdUKUCgTK6vfH-bBF8EfoDc3aWrDJkg4M6abikmFBm7x_iDR5NX3I84Qbp-83ERuJXBAv3_xvitREePqXs-FXN2OJJu2qiVS_572FLHw"/>
</div>
<div class="p-lg flex flex-col flex-grow">
<div class="flex justify-between items-start mb-md">
<div>
<p class="font-mono-sm text-primary mb-xs">02 DIC | 10:00 HRS</p>
<h3 class="font-headline-md text-headline-md text-on-surface uppercase tracking-tight">CQB Rush: Santiago</h3>
</div>
<div class="text-right">
<p class="font-label-md text-on-surface-variant uppercase">Costo de Entrada</p>
<p class="font-headline-sm text-secondary">$12.500</p>
</div>
</div>
<div class="flex items-center gap-sm mb-lg text-on-surface-variant">
<span class="material-symbols-outlined text-md">location_on</span>
<span class="font-body-sm">Quilicura, RM</span>
</div>
<div class="mt-auto pt-md border-t border-outline-variant/30 flex items-center justify-between">
<div class="flex items-center gap-xs text-on-surface-variant font-mono-sm">
<span class="material-symbols-outlined text-sm">group</span> 12/24 Cupos restantes
                        </div>
<button class="bg-primary text-on-primary font-label-md px-6 py-2 uppercase tracking-tighter rounded-sm hover:brightness-110 active:scale-95 transition-all">Registrarse</button>
</div>
</div>
</div>
<!-- Event Card 3 -->
<div class="group bg-surface-container border border-outline-variant rounded-lg overflow-hidden flex flex-col hover:border-secondary transition-all">
<div class="relative h-48 overflow-hidden">
<div class="absolute top-0 left-0 w-full bg-gradient-to-b from-black/60 to-transparent p-md z-10">
<span class="font-mono-sm text-primary bg-black/40 px-2 py-1 border border-primary/50">[ SESIÓN RECREATIVA ]</span>
</div>
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A wide-angle landscape shot of an abandoned industrial factory repurposed as an airsoft field. The setting is overgrown with weeds, featuring rusted metal structures and concrete walls. Soft morning sunlight filters through broken windows, creating a cinematic, atmospheric mood. The visual style is rugged, detailed, and immersive." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXFhN2U-mf_RY0vNsOf10z2NMsT4FGe9sCeZsvl7xDmA8ZyK2G8AunHAL9b6zZQBtGkxUnqqJoHBKSNFvj481xUn7KhmJTn8UM8m4x1TQ3TrCmuPdDvGEA39jqW1JjijHD4LkGzbLKGCW2tShSbPEvQQlX6NR4dLuBqVF27rGsGm_JfbaJl2NWzQfLH32HnSHKnmqH5nDq4vto7hKYTKJ9khPUARmNa128gA7gE806nggNIvuN575v2w"/>
</div>
<div class="p-lg flex flex-col flex-grow">
<div class="flex justify-between items-start mb-md">
<div>
<p class="font-mono-sm text-primary mb-xs">08 DIC | 09:30 HRS</p>
<h3 class="font-headline-md text-headline-md text-on-surface uppercase tracking-tight">Open Field Sunday</h3>
</div>
<div class="text-right">
<p class="font-label-md text-on-surface-variant uppercase">Costo de Entrada</p>
<p class="font-headline-sm text-secondary">$8.000</p>
</div>
</div>
<div class="flex items-center gap-sm mb-lg text-on-surface-variant">
<span class="material-symbols-outlined text-md">location_on</span>
<span class="font-body-sm">Puchuncaví, V Región</span>
</div>
<div class="mt-auto pt-md border-t border-outline-variant/30 flex items-center justify-between">
<div class="flex items-center gap-xs text-error font-mono-sm">
<span class="material-symbols-outlined text-sm">warning</span> Control de seguridad obligatorio
                        </div>
<button class="bg-primary text-on-primary font-label-md px-6 py-2 uppercase tracking-tighter rounded-sm hover:brightness-110 active:scale-95 transition-all">Registrarse</button>
</div>
</div>
</div>
<!-- Event Card 4 -->
<div class="group bg-surface-container border border-outline-variant rounded-lg overflow-hidden flex flex-col hover:border-secondary transition-all">
<div class="relative h-48 overflow-hidden">
<div class="absolute top-0 left-0 w-full bg-gradient-to-b from-black/60 to-transparent p-md z-10">
<span class="font-mono-sm text-secondary bg-black/40 px-2 py-1 border border-secondary/50">[ MILSIM 24H ]</span>
</div>
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Airsoft operators in camouflage Ghillie suits hidden in tall grass. The perspective is through a sniper scope lens with digital overlays. The color palette is earthy and subdued with pops of amber in the digital interface elements. Gritty texture and high detail highlight the specialized equipment." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAK2p_0SPicIuNZtFj7ERjvyFARaMedp0lQEzG5NKAKCSkyiMh7LOiXHh7IJlMexYKuqF98aqUG0WSYQJhXdtC4PsWSmqtHL8NQFosJsEj_hD1Jo1qHFpB4qv21Fr2ZVqJGXz27i7oSH0kHBByPwCtSrUAiqf3PRCgdk7cR2Llr8BjqHln94OFr8ZnfdI3mHYt8pL2j0_ZvIrsaRCaAd8X8yJnAF8c2jTSpFTKQI_anaXB41dP5KhINTg"/>
</div>
<div class="p-lg flex flex-col flex-grow">
<div class="flex justify-between items-start mb-md">
<div>
<p class="font-mono-sm text-primary mb-xs">15 DIC | 12:00 HRS</p>
<h3 class="font-headline-md text-headline-md text-on-surface uppercase tracking-tight">Silent Ghost 2</h3>
</div>
<div class="text-right">
<p class="font-label-md text-on-surface-variant uppercase">Costo de Entrada</p>
<p class="font-headline-sm text-secondary">$25.000</p>
</div>
</div>
<div class="flex items-center gap-sm mb-lg text-on-surface-variant">
<span class="material-symbols-outlined text-md">location_on</span>
<span class="font-body-sm">Temuco, IX Región</span>
</div>
<div class="mt-auto pt-md border-t border-outline-variant/30 flex items-center justify-between">
<div class="flex items-center gap-xs text-on-surface-variant font-mono-sm">
<span class="material-symbols-outlined text-sm">lock</span> Equipamiento restringido
                        </div>
<button class="bg-primary text-on-primary font-label-md px-6 py-2 uppercase tracking-tighter rounded-sm hover:brightness-110 active:scale-95 transition-all">Registrarse</button>
</div>
</div>
</div>
</div>
<!-- Tactical Map Integration (Visual Anchor) -->
<section class="mt-xl mb-xl">
<div class="bg-surface-container border border-outline-variant rounded-lg p-lg relative h-96 overflow-hidden flex flex-col md:flex-row gap-lg">
<div class="flex-grow rounded border border-outline-variant/50 relative overflow-hidden">
<!-- Simulated Map Interface -->
<div class="absolute inset-0 opacity-20 pointer-events-none" style="background-image: url('https://www.transparenttextures.com/patterns/carbon-fibre.png')"></div>
<div class="w-full h-full bg-surface-container-highest flex items-center justify-center">
<div class="relative w-full h-full">
<div class="w-full h-full bg-cover bg-center grayscale opacity-40" data-location="Chile" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCdstGHJ0gLGySrjdB4D5jzXdbfDNvGJA3RI8DOJoz8CLRc24J1F-w_YSGS8mpM3ySdONaeL2XLTwpa65wlz9cdsU145SWlOZqNw7CyfyntVFeW6Kdurx7HAZ6lfGZOK9_8jKbmDlng071RMoCs6ZP3TosNPNhilg2n-7G3G0-wc4XfJfMkky6S8JvAYodm-JSMjsAAC6gH11HhfkkpBl70AhOHd3ZiheF9b1W3wMWU73IbgOM74wy8Aw')"></div>
<!-- Pulse markers -->
<div class="absolute top-1/4 left-1/3 w-4 h-4 bg-primary rounded-full animate-ping"></div>
<div class="absolute top-1/4 left-1/3 w-3 h-3 bg-primary rounded-full shadow-[0_0_10px_#c2c9b6]"></div>
<div class="absolute bottom-1/3 right-1/4 w-4 h-4 bg-secondary rounded-full animate-ping"></div>
<div class="absolute bottom-1/3 right-1/4 w-3 h-3 bg-secondary rounded-full shadow-[0_0_10px_#ffc970]"></div>
</div>
</div>
</div>
<div class="w-full md:w-80 flex flex-col gap-md">
<h4 class="font-headline-sm text-headline-sm text-primary uppercase">Densidad Regional</h4>
<div class="space-y-sm">
<div class="flex justify-between font-mono-sm p-sm bg-surface-container-low border-l-2 border-primary">
<span class="text-on-surface-variant">Santiago (RM)</span>
<span class="text-primary font-bold">12 Activos</span>
</div>
<div class="flex justify-between font-mono-sm p-sm bg-surface-container-low border-l-2 border-outline">
<span class="text-on-surface-variant">Valparaíso (V)</span>
<span class="text-on-surface">5 Activos</span>
</div>
<div class="flex justify-between font-mono-sm p-sm bg-surface-container-low border-l-2 border-outline">
<span class="text-on-surface-variant">Biobío (VIII)</span>
<span class="text-on-surface">3 Activos</span>
</div>
</div>
<div class="mt-auto p-md bg-surface-variant/20 rounded border border-outline-variant/30">
<p class="font-body-sm text-on-surface-variant italic">Selecciona un marcador en la cuadrícula global para visualizar informes de misión regionales y topología del terreno.</p>
</div>
</div>
</div>
</section>
</div>
</main>
<!-- Footer -->
<footer class="w-full py-xl px-gutter flex flex-col md:flex-row justify-between items-center gap-md bg-surface-container-lowest border-t border-outline-variant">
<div class="flex flex-col items-center md:items-start">
<span class="font-headline-md text-headline-md text-primary uppercase">AIRSOFT CHILE</span>
<p class="font-mono-sm text-mono-sm text-on-tertiary-container mt-xs">© 2024 AIRSOFT CHILE - RED COMUNITARIA TÁCTICA</p>
</div>
<div class="flex flex-wrap justify-center gap-lg">
<a class="font-mono-sm text-mono-sm text-on-surface-variant hover:text-primary hover:underline transition-all" href="#">Política de Privacidad</a>
<a class="font-mono-sm text-mono-sm text-on-surface-variant hover:text-primary hover:underline transition-all" href="#">Directrices de Campo</a>
<a class="font-mono-sm text-mono-sm text-on-surface-variant hover:text-primary hover:underline transition-all" href="#">Patrocinios</a>
<a class="font-mono-sm text-mono-sm text-on-surface-variant hover:text-primary hover:underline transition-all" href="#">Contactar al Comando</a>
</div>
<div class="flex gap-md">
<button class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-all">rss_feed</button>
<button class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-all">public</button>
</div>
</footer>
<!-- Mobile Nav (Secondary UI Anchor) -->
<div class="md:hidden fixed bottom-0 left-0 w-full bg-surface border-t border-outline-variant z-50 flex justify-around items-center h-16 px-gutter">
<button class="flex flex-col items-center text-on-surface-variant">
<span class="material-symbols-outlined">home</span>
<span class="text-[10px] uppercase font-bold">Inicio</span>
</button>
<button class="flex flex-col items-center text-primary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">event</span>
<span class="text-[10px] uppercase font-bold">Eventos</span>
</button>
<button class="flex flex-col items-center text-on-surface-variant">
<span class="material-symbols-outlined">forum</span>
<span class="text-[10px] uppercase font-bold">Foro</span>
</button>
<button class="flex flex-col items-center text-on-surface-variant">
<span class="material-symbols-outlined">map</span>
<span class="text-[10px] uppercase font-bold">Mapas</span>
</button>
</div>
<script>
    // Simple micro-interaction for cards
    document.querySelectorAll('.group').forEach(card => {
        card.addEventListener('mousedown', () => {
            card.style.transform = 'scale(0.98)';
        });
        card.addEventListener('mouseup', () => {
            card.style.transform = 'scale(1)';
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'scale(1)';
        });
    });
</script>
</body></html>