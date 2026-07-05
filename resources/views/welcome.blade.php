<!DOCTYPE html>

<html class="dark" lang="es"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>AIRSOFT CHILE - Tactical Community Network</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@400;600;700&amp;family=Inter:wght@400;500;600&amp;family=Geist:wght@400;500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
<style>
        body {
            background-color: #111316;
            color: #e2e2e6;
            -webkit-font-smoothing: antialiased;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .tactical-border {
            border: 1px solid #2D3748;
            box-shadow: inset 0 1px 0 0 rgba(255, 255, 255, 0.05);
        }
        .clipped-corner {
            clip-path: polygon(0 0, 95% 0, 100% 15%, 100% 100%, 5% 100%, 0 85%);
        }
        .glass-panel {
            backdrop-filter: blur(8px);
            background: rgba(26, 29, 33, 0.85);
        }
        .map-grid-overlay {
            background-image: radial-gradient(circle, #2D3748 1px, transparent 1px);
            background-size: 24px 24px;
        }
        .hero-gradient {
            background: linear-gradient(0deg, rgba(17,19,22,1) 0%, rgba(17,19,22,0.4) 50%, rgba(17,19,22,0) 100%);
        }
    </style>
</head>
<body class="font-body-md text-body-md overflow-x-hidden">
<!-- Top Navigation -->
<nav class="fixed top-0 w-full z-50 flex justify-between items-center px-gutter h-16 max-w-container-max mx-auto border-b border-outline-variant bg-surface">
<div class="font-display-lg text-display-lg text-primary uppercase tracking-tighter">AIRSOFT CHILE</div>
<div class="hidden md:flex items-center gap-lg">
<a class="text-secondary border-b-2 border-secondary pb-1 font-body-md" href="#">Eventos</a>
<a class="text-on-surface-variant hover:text-primary transition-colors font-body-md" href="#">Foro</a>
<a class="text-on-surface-variant hover:text-primary transition-colors font-body-md" href="#">Campos</a>
<a class="text-on-surface-variant hover:text-primary transition-colors font-body-md" href="#">Tiendas</a>
</div>
<div class="flex items-center gap-md">
<button class="p-2 text-on-surface-variant hover:bg-surface-container-high transition-all rounded-full active:scale-95 duration-100">
<span class="material-symbols-outlined">search</span>
</button>
<button class="p-2 text-on-surface-variant hover:bg-surface-container-high transition-all rounded-full active:scale-95 duration-100">
<span class="material-symbols-outlined">account_circle</span>
</button>
</div>
</nav>
<!-- Side Navigation (Web) -->
<aside class="hidden lg:flex flex-col fixed left-0 top-0 h-full z-40 bg-surface-container border-r border-outline-variant w-64 pt-20">
<div class="px-4 mb-xl">
<div class="flex items-center gap-sm mb-xs">
<div class="w-10 h-10 bg-primary-container rounded-lg flex items-center justify-center text-primary">
<span class="material-symbols-outlined">shield</span>
</div>
<div>
<p class="font-headline-sm text-headline-sm text-primary uppercase leading-none">OPERADOR</p>
<p class="font-label-md text-label-md text-on-surface-variant uppercase">Santiago, CL</p>
</div>
</div>
</div>
<nav class="flex-1 flex flex-col gap-xs">
<a class="bg-primary-container text-on-primary-container rounded-lg mx-2 px-4 py-3 flex items-center gap-md font-label-md uppercase" href="#">
<span class="material-symbols-outlined">home</span> Inicio
        </a>
<a class="text-on-surface-variant hover:text-on-surface hover:bg-surface-variant px-4 py-3 mx-2 rounded-lg flex items-center gap-md font-label-md uppercase transition-all" href="#">
<span class="material-symbols-outlined">event</span> Eventos
        </a>
<a class="text-on-surface-variant hover:text-on-surface hover:bg-surface-variant px-4 py-3 mx-2 rounded-lg flex items-center gap-md font-label-md uppercase transition-all" href="#">
<span class="material-symbols-outlined">forum</span> Foro
        </a>
<a class="text-on-surface-variant hover:text-on-surface hover:bg-surface-variant px-4 py-3 mx-2 rounded-lg flex items-center gap-md font-label-md uppercase transition-all" href="#">
<span class="material-symbols-outlined">map</span> Campos
        </a>
<a class="text-on-surface-variant hover:text-on-surface hover:bg-surface-variant px-4 py-3 mx-2 rounded-lg flex items-center gap-md font-label-md uppercase transition-all" href="#">
<span class="material-symbols-outlined">storefront</span> Tiendas
        </a>
</nav>
<div class="p-4">
<button class="w-full bg-secondary text-on-secondary font-headline-sm py-4 uppercase tracking-wider clipped-corner active:scale-95 transition-transform duration-100">
            PUBLICAR EVENTO
        </button>
</div>
<div class="p-4 border-t border-outline-variant">
<a class="text-on-surface-variant hover:text-on-surface px-4 py-2 flex items-center gap-md font-label-md uppercase transition-all" href="#">
<span class="material-symbols-outlined">settings</span> Ajustes
        </a>
<a class="text-on-surface-variant hover:text-on-surface px-4 py-2 flex items-center gap-md font-label-md uppercase transition-all" href="#">
<span class="material-symbols-outlined">help</span> Soporte
        </a>
</div>
</aside>
<!-- Main Content -->
<main class="lg:pl-64 pt-16">
<!-- Hero Section -->
<section class="relative h-[870px] w-full overflow-hidden">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover" data-alt="A cinematic, low-angle shot of a highly detailed airsoft operator in Chile's rugged central mountains. The player wears advanced camouflage gear, a tactical helmet with NVG mounts, and holds a realistic AEG rifle. Dust and atmospheric particles catch the low golden-hour sunlight against deep shadows, creating a gritty, professional military aesthetic. The color palette is dominated by olive drabs, muted slates, and high-contrast amber highlights." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBIDZXl2rvdBFuW1bc-j3U9VX5pCtIVcpgEbUc54XVhwaPYqz5oV2W6oKmxwt3dJlZvUcq7c_C7kNT0zwjCuN3-JT7qtQAuAaNi4DtpzBpfVGPV2w5QJmXjuyodR6PGIGrPFP3FIWVPAp5qW-nnfGtWwCXzvnfcCLVaLGdC0jxzVG3yzYxhUBdpHHjkeeSsshYMuZly6EJe9IOs7nYNjB1dpaM2B5UqJgo3cz1d3lm2_45C8I-RebECoA"/>
<div class="absolute inset-0 hero-gradient"></div>
</div>
<div class="relative z-10 h-full flex flex-col justify-end px-gutter pb-xl max-w-4xl">
<div class="inline-block px-3 py-1 bg-secondary text-on-secondary font-mono-sm uppercase mb-md">
                [MISIÓN PREPARADA]
            </div>
<h1 class="font-display-lg text-display-lg text-on-surface uppercase mb-md leading-[0.9]">LA RED DE ÉLITE DEL AIRSOFT CHILENO</h1>
<p class="font-body-lg text-on-surface-variant mb-lg max-w-2xl">
                Coordina misiones, encuentra campos certificados y conéctate con la comunidad más disciplinada del Hemisferio Sur. La precisión táctica comienza aquí.
            </p>
<div class="flex flex-wrap gap-md">
<button class="bg-secondary text-on-secondary px-xl py-4 font-headline-sm uppercase clipped-corner hover:brightness-110 transition-all">
                    ÚNETE A LA COMUNIDAD
                </button>
<button class="bg-transparent border border-outline text-on-surface px-xl py-4 font-headline-sm uppercase hover:bg-surface-variant transition-all">
                    VER MAPA DE CAMPOS
                </button>
</div>
</div>
</section>
<!-- Dynamic Bento Grid Section -->
<section class="p-gutter grid grid-cols-1 md:grid-cols-12 gap-lg max-w-container-max mx-auto">
<!-- Latest Events Carousel (Large) -->
<div class="md:col-span-8 space-y-md">
<div class="flex justify-between items-end border-b border-outline-variant pb-xs">
<h2 class="font-headline-lg uppercase text-primary tracking-tighter">ÚLTIMAS MISIONES</h2>
<div class="flex gap-xs">
<button class="p-1 border border-outline hover:bg-surface-variant text-on-surface">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="p-1 border border-outline hover:bg-surface-variant text-on-surface">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-md">
<!-- Event Card 1 -->
<div class="bg-surface-container-low tactical-border rounded-lg overflow-hidden group">
<div class="h-48 relative overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A tactical airsoft field setup with shipping containers and wooden barricades in a forested area of Santiago, Chile. The lighting is moody with shafts of light breaking through the trees. The style is sharp and high-definition, emphasizing the rugged materials and tactical environment." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBOsxQiGSr_tPvFfETxQy6xxXWHHImQCiuqsJQGmONjY2i2uk9BXqG5Rmgdmz6W2VgZVKQvktivqFVpurpnM6CPs8MNvGYysR9GXEYtb46rn3XkdhF0qSe2mF1fGsuGkcZwF3Q35PbmjVEVci-TmxsJ65MiBi3q7F5bWVV9UAcwyzR2exMjXcsII7b8-Jm2uG_MvEbG4dNtyNRyjCYBqDnA0dnS7tJQOslIC7LeyZcP_Y-DiyFBWuz0LA"/>
<div class="absolute top-0 right-0 p-2">
<span class="bg-primary text-on-primary font-mono-sm px-2 py-1 uppercase">24 OCT</span>
</div>
</div>
<div class="p-md">
<div class="flex justify-between items-start mb-xs">
<h3 class="font-headline-sm text-on-surface uppercase">Operación: Silent Shield</h3>
<span class="text-secondary font-mono-sm">[ACTIVO]</span>
</div>
<p class="font-body-sm text-on-surface-variant mb-md line-clamp-2">Simulación de operaciones nocturnas en el valle central. Cupos limitados solo para equipos con visión nocturna.</p>
<div class="flex items-center gap-md font-mono-sm text-on-tertiary-container">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">location_on</span> Rancagua</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">group</span> 45/60</span>
</div>
</div>
</div>
<!-- Event Card 2 -->
<div class="bg-surface-container-low tactical-border rounded-lg overflow-hidden group">
<div class="h-48 relative overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A group of airsoft players in full desert MARPAT gear standing in a circle during a briefing in an arid Chilean landscape. Harsh midday sun creates strong shadows and highlights the textures of the gear and the dry earth. Cinematic and documentary style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCk44glCCTpPt1duL5Euf5lPrir2gLI27f6ygae7VQmpociXL_P-O38ZvdTlw_4Lt2qKIQJhT4ezjTcyABdzN7oOD5npRS2Daf3popqtHkEEH3MGqEIZMUK9oFyIZvQtnjruI7U-dlFUxFCv_OV8QRlS9sVcf8mjmanCxfLYJaSHSxmn11RQ1Ac81412WSwsR0HrQ22-vy887w-2E7drg9VXMBz4eaGwIDZGjuKV-MluRsnLZfHTq446g"/>
<div class="absolute top-0 right-0 p-2">
<span class="bg-primary text-on-primary font-mono-sm px-2 py-1 uppercase">02 NOV</span>
</div>
</div>
<div class="p-md">
<div class="flex justify-between items-start mb-xs">
<h3 class="font-headline-sm text-on-surface uppercase">Desert Storm III</h3>
<span class="text-on-surface-variant font-mono-sm">[PENDIENTE]</span>
</div>
<p class="font-body-sm text-on-surface-variant mb-md line-clamp-2">Evento Milsim de día completo en la franja de Atacama. Se requiere alta resistencia.</p>
<div class="flex items-center gap-md font-mono-sm text-on-tertiary-container">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">location_on</span> Copiapó</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">group</span> 120/200</span>
</div>
</div>
</div>
</div>
</div>
<!-- Forum Sidebar (Narrow) -->
<aside class="md:col-span-4 bg-surface-container-high tactical-border rounded-lg p-md">
<h2 class="font-headline-md uppercase text-primary border-b border-outline-variant pb-sm mb-md flex items-center gap-sm">
<span class="material-symbols-outlined">forum</span> NOTICIAS DE INTELIGENCIA
            </h2>
<div class="space-y-md">
<!-- Forum Topic -->
<div class="group cursor-pointer">
<div class="flex items-center gap-xs text-secondary font-mono-sm mb-xs">
<span class="material-symbols-outlined text-[14px]">push_pin</span> FIJADO
                    </div>
<h4 class="font-body-md text-on-surface font-semibold group-hover:text-primary transition-colors">¿Mejores pistolas GBB para climas fríos en el sur de Chile?</h4>
<div class="flex items-center justify-between mt-sm font-mono-sm text-on-surface-variant">
<span>142 Respuestas</span>
<span>Hace 2h</span>
</div>
<div class="h-px bg-outline-variant mt-md"></div>
</div>
<!-- Forum Topic -->
<div class="group cursor-pointer">
<h4 class="font-body-md text-on-surface font-semibold group-hover:text-primary transition-colors">Reseña del Campo: BattleZone Santiago - Nuevas barricadas</h4>
<div class="flex items-center justify-between mt-sm font-mono-sm text-on-surface-variant">
<span>28 Respuestas</span>
<span>Hace 5h</span>
</div>
<div class="h-px bg-outline-variant mt-md"></div>
</div>
<!-- Forum Topic -->
<div class="group cursor-pointer">
<div class="flex items-center gap-xs text-secondary font-mono-sm mb-xs">
<span class="material-symbols-outlined text-[14px]">local_fire_department</span> DESTACADO
                    </div>
<h4 class="font-body-md text-on-surface font-semibold group-hover:text-primary transition-colors">Próximas regulaciones legales para airsoft en 2025</h4>
<div class="flex items-center justify-between mt-sm font-mono-sm text-on-surface-variant">
<span>539 Respuestas</span>
<span>Hace 15m</span>
</div>
</div>
</div>
<button class="w-full mt-lg border border-outline text-on-surface py-2 font-label-md uppercase hover:bg-surface-variant transition-all">
                ENTRAR AL FORO
            </button>
</aside>
</section>
<!-- Interactive Map Section -->
<section class="p-gutter max-w-container-max mx-auto mb-xl">
<div class="bg-surface-container-lowest tactical-border rounded-xl overflow-hidden relative">
<div class="absolute top-6 left-6 z-20 glass-panel p-md tactical-border max-w-xs">
<h3 class="font-headline-md text-primary uppercase mb-xs">MAPA ESTRATÉGICO</h3>
<p class="font-body-sm text-on-surface-variant mb-md">Ubica más de 45 campos de airsoft certificados en todo el territorio. Disponibilidad en tiempo real y calificaciones técnicas.</p>
<div class="space-y-sm">
<div class="flex items-center gap-md">
<div class="w-3 h-3 bg-primary rotate-45"></div>
<span class="font-mono-sm">Arenas CQB</span>
</div>
<div class="flex items-center gap-md">
<div class="w-3 h-3 bg-secondary rotate-45"></div>
<span class="font-mono-sm">Campos Milsim</span>
</div>
<div class="flex items-center gap-md">
<div class="w-3 h-3 bg-tertiary rotate-45"></div>
<span class="font-mono-sm">Campos de Práctica</span>
</div>
</div>
<button class="w-full mt-lg bg-surface-container-high text-on-surface border border-outline-variant py-3 font-label-md uppercase hover:bg-surface-variant transition-all">
                    Filtros [0 Seleccionados]
                </button>
</div>
<div class="h-[600px] w-full relative map-grid-overlay overflow-hidden">
<!-- Map Imagery Placeholder -->
<img class="w-full h-full object-cover opacity-50 grayscale contrast-125" data-alt="A high-contrast topographic map of Chile with tactical UI overlays, data-location: Santiago, Chile. The map features minimalist dark slate and charcoal tones with glowing geometric diamond pins in olive green and amber orange indicating field locations. Digital scanlines and coordinate grids give it a military satellite imagery feel." data-location="Chile" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD7Jk4BirwM_t77htBHzb6TyCqcsdTshT5CTVGLHRVbg2NYp-faKvcdxab4lgwnvy3gNJi6fSZSsG1sxnojkN_lWvB9RstX52uNuxhPa3wnwTB5xm0sp3-c3L2eSh7zY7Bi5AtXWvogDAnLNRfo2Ujd8osbMJS_FGsnaLu9HBByDWH8rgQq0uI69PbGQ0X7Sn0BDCSJLGWSwyi7hVoaT0M4_LS15wqyV43tbplubh6hEqu4rqoag0UQHA"/>
<!-- Decorative Map UI Pins -->
<div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 cursor-pointer group">
<div class="w-4 h-4 bg-primary rotate-45 border-2 border-surface animate-pulse"></div>
<div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 hidden group-hover:block glass-panel p-2 text-xs font-mono-sm border border-primary whitespace-nowrap">
                        [HQ] SANTIAGO BATTLEZONE
                    </div>
</div>
<div class="absolute top-1/2 left-1/2 translate-x-8 translate-y-12 cursor-pointer group">
<div class="w-4 h-4 bg-secondary rotate-45 border-2 border-surface"></div>
<div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 hidden group-hover:block glass-panel p-2 text-xs font-mono-sm border border-secondary whitespace-nowrap">
                        OPERACIONES PUERTO VALPARAISO
                    </div>
</div>
<div class="absolute bottom-1/4 left-1/2 -translate-x-20 cursor-pointer group">
<div class="w-4 h-4 bg-tertiary rotate-45 border-2 border-surface"></div>
<div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 hidden group-hover:block glass-panel p-2 text-xs font-mono-sm border border-tertiary whitespace-nowrap">
                        CAMPO FORESTAL CONCEPCION
                    </div>
</div>
<!-- Map Legend / Data Overlay -->
<div class="absolute bottom-6 right-6 z-20 flex flex-col gap-sm items-end">
<div class="bg-surface text-on-surface-variant font-mono-sm px-3 py-1 border border-outline-variant text-[10px]">
                        LAT: -33.4489 / LONG: -70.6693
                    </div>
<div class="bg-surface text-on-surface-variant font-mono-sm px-3 py-1 border border-outline-variant text-[10px]">
                        OPS ACTIVAS: 12 SITIOS
                    </div>
</div>
</div>
</div>
</section>
<!-- Community Call to Action -->
<section class="bg-surface-container relative py-xl overflow-hidden px-gutter">
<div class="max-w-container-max mx-auto flex flex-col items-center text-center relative z-10">
<div class="font-mono-sm text-secondary uppercase mb-sm tracking-widest">ALÍSTATE EN LA RED</div>
<h2 class="font-display-lg text-on-surface uppercase mb-md">CONVIÉRTETE EN OPERADOR</h2>
<p class="font-body-lg text-on-surface-variant max-w-2xl mb-xl">Accede a eventos tácticos exclusivos, foros de comercio certificados y comunicaciones regionales de comando.</p>
<form class="flex flex-col md:flex-row gap-xs w-full max-w-md">
<input class="flex-1 bg-surface border-0 border-b-2 border-outline-variant focus:border-secondary focus:ring-0 text-on-surface font-mono-sm px-4 py-3 placeholder:text-on-surface-variant/50" placeholder="INGRESAR FRECUENCIA (EMAIL)" type="email"/>
<button class="bg-secondary text-on-secondary px-xl py-3 font-headline-sm uppercase clipped-corner active:scale-95 transition-all">
                    INICIAR
                </button>
</form>
</div>
</section>
<!-- Footer -->
<footer class="w-full py-xl px-gutter flex flex-col md:flex-row justify-between items-center gap-md bg-surface-container-lowest border-t border-outline-variant">
<div class="flex flex-col items-center md:items-start gap-sm">
<div class="font-headline-md text-headline-md text-primary uppercase">AIRSOFT CHILE</div>
<p class="font-mono-sm text-mono-sm text-on-tertiary-container uppercase tracking-tight">© 2024 AIRSOFT CHILE - TACTICAL COMMUNITY NETWORK</p>
</div>
<div class="flex flex-wrap justify-center gap-lg">
<a class="font-mono-sm text-on-surface-variant hover:text-primary transition-colors hover:underline uppercase" href="#">Política de Privacidad</a>
<a class="font-mono-sm text-on-surface-variant hover:text-primary transition-colors hover:underline uppercase" href="#">Guías de Campo</a>
<a class="font-mono-sm text-on-surface-variant hover:text-primary transition-colors hover:underline uppercase" href="#">Patrocinios</a>
<a class="font-mono-sm text-on-surface-variant hover:text-primary transition-colors hover:underline uppercase" href="#">Contactar Comando</a>
</div>
<div class="flex gap-md">
<a class="w-10 h-10 bg-surface-container rounded-lg border border-outline-variant flex items-center justify-center text-on-surface-variant hover:text-primary transition-all" href="#">
<span class="material-symbols-outlined">share</span>
</a>
<a class="w-10 h-10 bg-surface-container rounded-lg border border-outline-variant flex items-center justify-center text-on-surface-variant hover:text-primary transition-all" href="#">
<span class="material-symbols-outlined">public</span>
</a>
</div>
</footer>
</main>
<!-- Mobile Navigation Bar -->
<nav class="md:hidden fixed bottom-0 left-0 w-full bg-surface border-t border-outline-variant z-50 flex justify-around items-center h-16 px-gutter">
<button class="flex flex-col items-center text-secondary">
<span class="material-symbols-outlined">home</span>
<span class="text-[10px] font-mono-sm uppercase">Inicio</span>
</button>
<button class="flex flex-col items-center text-on-surface-variant">
<span class="material-symbols-outlined">event</span>
<span class="text-[10px] font-mono-sm uppercase">Eventos</span>
</button>
<button class="flex flex-col items-center text-on-surface-variant">
<span class="material-symbols-outlined">map</span>
<span class="text-[10px] font-mono-sm uppercase">Mapa</span>
</button>
<button class="flex flex-col items-center text-on-surface-variant">
<span class="material-symbols-outlined">forum</span>
<span class="text-[10px] font-mono-sm uppercase">Intel</span>
</button>
</nav>
<script>
    // Simple map interactivity mock
    document.querySelectorAll('.group').forEach(pin => {
        pin.addEventListener('click', () => {
            const label = pin.querySelector('div:nth-child(2)');
            if(label) label.classList.toggle('hidden');
        });
    });

    // Sticky Header scroll effect
    const nav = document.querySelector('nav.fixed');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            nav.classList.add('bg-opacity-95', 'backdrop-blur-md');
        } else {
            nav.classList.remove('bg-opacity-95', 'backdrop-blur-md');
        }
    });
</script>
</body></html>