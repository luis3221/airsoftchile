<!DOCTYPE html>

<html class="dark" lang="es"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Directorio Táctico - AIRSOFT CHILE</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@400;600;700&amp;family=Inter:wght@400;500;600&amp;family=Geist:wght@400;500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        /* Tactical chamfered edge effect */
        .tactical-edge {
            clip-path: polygon(0 0, 95% 0, 100% 15%, 100% 100%, 5% 100%, 0 85%);
        }
        .chamfer-br {
            clip-path: polygon(0 0, 100% 0, 100% calc(100% - 12px), calc(100% - 12px) 100%, 0 100%);
        }
        /* Custom scrollbar for tactical feel */
        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-track { background: #111316; }
        ::-webkit-scrollbar-thumb { background: #3b4234; border-radius: 2px; }
        ::-webkit-scrollbar-thumb:hover { background: #c2c9b6; }
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
<body class="bg-surface text-on-surface font-body-md selection:bg-secondary selection:text-on-secondary">
<!-- TopNavBar -->
<header class="fixed top-0 w-full z-50 flex justify-between items-center px-gutter h-16 max-w-container-max mx-auto border-b border-outline-variant bg-surface">
<div class="flex items-center gap-md">
<span class="font-display-lg text-primary uppercase tracking-tighter">AIRSOFT CHILE</span>
</div>
<nav class="hidden md:flex items-center gap-lg">
<a class="text-on-surface-variant hover:text-primary transition-colors font-body-md" href="#">Eventos</a>
<a class="text-on-surface-variant hover:text-primary transition-colors font-body-md" href="#">Foro</a>
<a class="text-on-surface-variant hover:text-primary transition-colors font-body-md" href="#">Canchas</a>
<a class="text-secondary border-b-2 border-secondary pb-1 font-body-md" href="#">Tiendas</a>
</nav>
<div class="flex items-center gap-md">
<div class="relative hidden sm:block">
<input class="bg-surface-container-low border-b border-outline text-on-surface font-body-sm px-sm py-1 focus:outline-none focus:border-secondary transition-all w-48 lg:w-64" placeholder="Buscar áreas operativas..." type="text"/>
<span class="material-symbols-outlined absolute right-2 top-1.5 text-on-surface-variant text-sm">search</span>
</div>
<button class="material-symbols-outlined text-primary hover:bg-surface-container-high transition-all p-2 rounded-full">account_circle</button>
</div>
</header>
<!-- SideNavBar (Desktop Only) -->
<aside class="hidden lg:flex flex-col fixed left-0 top-0 h-full z-40 bg-surface-container border-r border-outline-variant w-64 pt-20">
<div class="px-gutter mb-xl">
<div class="flex items-center gap-sm p-sm bg-surface-container-high rounded-lg border border-outline-variant">
<div class="w-10 h-10 bg-primary-container flex items-center justify-center rounded-lg">
<span class="material-symbols-outlined text-primary">person</span>
</div>
<div>
<p class="font-headline-sm text-primary leading-tight">OPERADOR</p>
<p class="font-label-md text-on-surface-variant uppercase">Santiago, CL</p>
</div>
</div>
</div>
<nav class="flex-1 px-2 space-y-1">
<a class="flex items-center gap-md text-on-surface-variant hover:text-on-surface px-4 py-3 hover:bg-surface-variant transition-transform duration-200 ease-in-out" href="#">
<span class="material-symbols-outlined">home</span>
<span class="font-label-md">Inicio</span>
</a>
<a class="flex items-center gap-md text-on-surface-variant hover:text-on-surface px-4 py-3 hover:bg-surface-variant transition-transform duration-200 ease-in-out" href="#">
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
<a class="flex items-center gap-md bg-primary-container text-on-primary-container rounded-lg mx-2 px-4 py-3" href="#">
<span class="material-symbols-outlined">storefront</span>
<span class="font-label-md">Tiendas</span>
</a>
</nav>
<div class="p-gutter border-t border-outline-variant">
<button class="w-full bg-secondary text-on-secondary font-headline-sm py-md hover:brightness-110 transition-all uppercase tracking-widest chamfer-br">
                PUBLICAR EVENTO
            </button>
<div class="mt-md space-y-2">
<a class="flex items-center gap-sm text-on-surface-variant font-label-md hover:text-primary" href="#"><span class="material-symbols-outlined text-sm">settings</span> Ajustes</a>
<a class="flex items-center gap-sm text-on-surface-variant font-label-md hover:text-primary" href="#"><span class="material-symbols-outlined text-sm">help</span> Soporte</a>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="lg:ml-64 pt-20 pb-xl px-gutter max-w-container-max mx-auto min-h-screen">
<!-- Header & Category Switcher -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-md mb-xl">
<div class="space-y-xs">
<h1 class="font-display-lg text-primary uppercase">Directorio Táctico</h1>
<p class="font-mono-sm text-on-tertiary-container uppercase tracking-widest">[ SELECCIONAR UNIDAD DE OPERACIÓN ]</p>
</div>
<div class="flex bg-surface-container-high p-1 rounded-lg border border-outline-variant">
<button class="px-lg py-sm font-label-md uppercase transition-all bg-primary text-on-primary rounded" id="tab-stores" onclick="switchTab('stores')">
                    Tiendas de Airsoft
                </button>
<button class="px-lg py-sm font-label-md uppercase transition-all text-on-surface-variant hover:text-primary" id="tab-fields" onclick="switchTab('fields')">
                    Canchas
                </button>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-lg">
<!-- Filter Sidebar -->
<aside class="lg:col-span-3 space-y-lg">
<div class="bg-surface-container-low p-md border border-outline-variant rounded-lg">
<h3 class="font-headline-sm text-primary mb-md border-b border-outline-variant pb-xs flex items-center justify-between">
                        REGIONES 
                        <span class="material-symbols-outlined text-on-surface-variant text-sm">filter_alt</span>
</h3>
<div class="space-y-1 max-h-[500px] overflow-y-auto pr-2 custom-scrollbar">
<label class="flex items-center gap-sm p-xs hover:bg-surface-variant cursor-pointer rounded transition-colors group">
<input class="form-checkbox bg-surface-container border-outline text-secondary focus:ring-secondary rounded-none" type="checkbox"/>
<span class="font-mono-sm uppercase text-on-surface-variant group-hover:text-primary">XV - Arica y Parinacota</span>
</label>
<label class="flex items-center gap-sm p-xs hover:bg-surface-variant cursor-pointer rounded transition-colors group">
<input class="form-checkbox bg-surface-container border-outline text-secondary focus:ring-secondary rounded-none" type="checkbox"/>
<span class="font-mono-sm uppercase text-on-surface-variant group-hover:text-primary">I - Tarapacá</span>
</label>
<label class="flex items-center gap-sm p-xs hover:bg-surface-variant cursor-pointer rounded transition-colors group">
<input checked="" class="form-checkbox bg-surface-container border-outline text-secondary focus:ring-secondary rounded-none" type="checkbox"/>
<span class="font-mono-sm uppercase text-on-surface-variant group-hover:text-primary">RM - Metropolitana</span>
</label>
<label class="flex items-center gap-sm p-xs hover:bg-surface-variant cursor-pointer rounded transition-colors group">
<input class="form-checkbox bg-surface-container border-outline text-secondary focus:ring-secondary rounded-none" type="checkbox"/>
<span class="font-mono-sm uppercase text-on-surface-variant group-hover:text-primary">V - Valparaíso</span>
</label>
<label class="flex items-center gap-sm p-xs hover:bg-surface-variant cursor-pointer rounded transition-colors group">
<input class="form-checkbox bg-surface-container border-outline text-secondary focus:ring-secondary rounded-none" type="checkbox"/>
<span class="font-mono-sm uppercase text-on-surface-variant group-hover:text-primary">VI - O'Higgins</span>
</label>
<label class="flex items-center gap-sm p-xs hover:bg-surface-variant cursor-pointer rounded transition-colors group">
<input class="form-checkbox bg-surface-container border-outline text-secondary focus:ring-secondary rounded-none" type="checkbox"/>
<span class="font-mono-sm uppercase text-on-surface-variant group-hover:text-primary">VIII - Biobío</span>
</label>
<label class="flex items-center gap-sm p-xs hover:bg-surface-variant cursor-pointer rounded transition-colors group">
<input class="form-checkbox bg-surface-container border-outline text-secondary focus:ring-secondary rounded-none" type="checkbox"/>
<span class="font-mono-sm uppercase text-on-surface-variant group-hover:text-primary">XII - Magallanes</span>
</label>
</div>
</div>
<div class="bg-primary-container/20 p-md border border-primary/20 rounded-lg">
<p class="font-mono-sm text-primary mb-sm uppercase">[ VISTA DE MAPA DISPONIBLE ]</p>
<div class="aspect-video bg-surface-container-high rounded border border-outline relative overflow-hidden group cursor-pointer">
<div class="absolute inset-0 opacity-40 group-hover:opacity-60 transition-opacity bg-cover bg-center" data-alt="Una vista de mapa táctico de Chile que muestra puntos de interés para canchas y tiendas de airsoft con marcadores verde militar de alto contraste y superposiciones de cuadrícula. La estética es profesional y limpia." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD5m8DoqSmRREK87JNwlwCvh-rQBJQ1dZ-yQWQZYQ6EQ3gb-9OM0ZVSkMi0Z5AS2AOcGbP5qPvwbFCDB8KhlvE_pNwKd3Ckq_zBq4rE3kg17W5YMXWw4sFH-UbPumK77_tCyrd_d2SY5gRzgDoJzla8TvWztdbELQYxJ7_QtlMPi2ZZhQmlrPgA9MmwzKpe6wDUKT2JctkXjFJGBzrowjuTu98dbcgue8kyrXoWwubja_9wjWnXq6pBrA')"></div>
<div class="absolute inset-0 flex items-center justify-center">
<span class="bg-surface/80 px-md py-xs font-label-md text-primary border border-primary backdrop-blur-sm">ABRIR MAPA TÁCTICO</span>
</div>
</div>
</div>
</aside>
<!-- Directory Grid -->
<div class="lg:col-span-9">
<div class="grid grid-cols-1 md:grid-cols-2 gap-md transition-opacity duration-300" id="content-stores">
<!-- Store Card 1 -->
<article class="bg-surface-container border border-outline-variant group hover:border-primary/50 transition-all">
<div class="h-2 bg-secondary/80 w-full"></div>
<div class="p-lg">
<div class="flex justify-between items-start mb-sm">
<div>
<span class="font-mono-sm text-secondary bg-secondary/10 px-sm py-0.5 rounded uppercase">[ OPERATIVO ]</span>
<h2 class="font-headline-md text-on-surface mt-1 group-hover:text-primary transition-colors">Tactical Gear Santiago</h2>
</div>
<span class="material-symbols-outlined text-on-surface-variant">verified</span>
</div>
<p class="flex items-center gap-xs font-label-md text-on-surface-variant mb-md">
<span class="material-symbols-outlined text-sm">location_on</span> Providencia, Región Metropolitana
                            </p>
<p class="text-body-sm text-on-tertiary-container mb-lg line-clamp-2">
                                Especialistas en GBB y equipamiento Milsim de alta gama. Distribuidor oficial de marcas líderes en el mercado chileno.
                            </p>
<div class="flex items-center gap-md">
<button class="flex-1 bg-primary text-on-primary font-label-md py-md uppercase tracking-widest hover:brightness-110 active:scale-95 transition-all chamfer-br flex items-center justify-center gap-sm">
                                    Contactar <span class="material-symbols-outlined text-sm">chat</span>
</button>
<button class="p-md border border-outline-variant hover:bg-surface-variant transition-all rounded">
<span class="material-symbols-outlined text-on-surface">share</span>
</button>
</div>
</div>
</article>
<!-- Store Card 2 -->
<article class="bg-surface-container border border-outline-variant group hover:border-primary/50 transition-all">
<div class="h-2 bg-primary/40 w-full"></div>
<div class="p-lg">
<div class="flex justify-between items-start mb-sm">
<div>
<span class="font-mono-sm text-primary bg-primary/10 px-sm py-0.5 rounded uppercase">[ STOCK ACTUALIZADO ]</span>
<h2 class="font-headline-md text-on-surface mt-1 group-hover:text-primary transition-colors">Airsoft Zone Valpo</h2>
</div>
</div>
<p class="flex items-center gap-xs font-label-md text-on-surface-variant mb-md">
<span class="material-symbols-outlined text-sm">location_on</span> Valparaíso, V Región
                            </p>
<p class="text-body-sm text-on-tertiary-container mb-lg line-clamp-2">
                                Servicio técnico especializado y venta de AEGs. Gran variedad de consumibles y protecciones para iniciados.
                            </p>
<div class="flex items-center gap-md">
<button class="flex-1 bg-primary text-on-primary font-label-md py-md uppercase tracking-widest hover:brightness-110 active:scale-95 transition-all chamfer-br flex items-center justify-center gap-sm">
                                    Contactar <span class="material-symbols-outlined text-sm">call</span>
</button>
<button class="p-md border border-outline-variant hover:bg-surface-variant transition-all rounded">
<span class="material-symbols-outlined text-on-surface">share</span>
</button>
</div>
</div>
</article>
<!-- Store Card 3 -->
<article class="bg-surface-container border border-outline-variant group hover:border-primary/50 transition-all">
<div class="h-2 bg-secondary/80 w-full"></div>
<div class="p-lg">
<div class="flex justify-between items-start mb-sm">
<div>
<span class="font-mono-sm text-secondary bg-secondary/10 px-sm py-0.5 rounded uppercase">[ OPERATIVO ]</span>
<h2 class="font-headline-md text-on-surface mt-1 group-hover:text-primary transition-colors">Biobío Tactical Supply</h2>
</div>
</div>
<p class="flex items-center gap-xs font-label-md text-on-surface-variant mb-md">
<span class="material-symbols-outlined text-sm">location_on</span> Concepción, VIII Región
                            </p>
<p class="text-body-sm text-on-tertiary-container mb-lg line-clamp-2">
                                La tienda más grande del sur de Chile. Equipamiento táctico, botas, y réplicas para todo tipo de terreno.
                            </p>
<div class="flex items-center gap-md">
<button class="flex-1 bg-primary text-on-primary font-label-md py-md uppercase tracking-widest hover:brightness-110 active:scale-95 transition-all chamfer-br flex items-center justify-center gap-sm">
                                    Contactar <span class="material-symbols-outlined text-sm">chat</span>
</button>
<button class="p-md border border-outline-variant hover:bg-surface-variant transition-all rounded">
<span class="material-symbols-outlined text-on-surface">share</span>
</button>
</div>
</div>
</article>
</div>
<div class="hidden grid grid-cols-1 md:grid-cols-2 gap-md transition-opacity duration-300" id="content-fields">
<!-- Field Card 1 -->
<article class="bg-surface-container border border-outline-variant group hover:border-primary/50 transition-all">
<div class="h-2 bg-error/40 w-full"></div>
<div class="p-lg">
<div class="flex justify-between items-start mb-sm">
<div>
<span class="font-mono-sm text-error bg-error/10 px-sm py-0.5 rounded uppercase">[ EN ESPERA ]</span>
<h2 class="font-headline-md text-on-surface mt-1 group-hover:text-primary transition-colors">CQB Factory Chile</h2>
</div>
</div>
<p class="flex items-center gap-xs font-label-md text-on-surface-variant mb-md">
<span class="material-symbols-outlined text-sm">location_on</span> Quilicura, RM
                            </p>
<p class="text-body-sm text-on-tertiary-container mb-lg line-clamp-2">
                                Centro de entrenamiento CQB de 2000m2. Escenarios urbanos dinámicos y zonas de descanso climatizadas.
                            </p>
<div class="flex items-center gap-md">
<button class="flex-1 bg-primary text-on-primary font-label-md py-md uppercase tracking-widest hover:brightness-110 active:scale-95 transition-all chamfer-br flex items-center justify-center gap-sm">
                                    Contactar <span class="material-symbols-outlined text-sm">chat</span>
</button>
<button class="p-md border border-outline-variant hover:bg-surface-variant transition-all rounded">
<span class="material-symbols-outlined text-on-surface">share</span>
</button>
</div>
</div>
</article>
<!-- Field Card 2 -->
<article class="bg-surface-container border border-outline-variant group hover:border-primary/50 transition-all">
<div class="h-2 bg-secondary/80 w-full"></div>
<div class="p-lg">
<div class="flex justify-between items-start mb-sm">
<div>
<span class="font-mono-sm text-secondary bg-secondary/10 px-sm py-0.5 rounded uppercase">[ ABIERTO PARA OPS ]</span>
<h2 class="font-headline-md text-on-surface mt-1 group-hover:text-primary transition-colors">Delta Field Milsim</h2>
</div>
</div>
<p class="flex items-center gap-xs font-label-md text-on-surface-variant mb-md">
<span class="material-symbols-outlined text-sm">location_on</span> Lampa, RM
                            </p>
<p class="text-body-sm text-on-tertiary-container mb-lg line-clamp-2">
                                Bosque natural de 5 hectáreas para operaciones de larga duración. Trincheras, bunkers y zona de camping.
                            </p>
<div class="flex items-center gap-md">
<button class="flex-1 bg-primary text-on-primary font-label-md py-md uppercase tracking-widest hover:brightness-110 active:scale-95 transition-all chamfer-br flex items-center justify-center gap-sm">
                                    Contactar <span class="material-symbols-outlined text-sm">calendar_month</span>
</button>
<button class="p-md border border-outline-variant hover:bg-surface-variant transition-all rounded">
<span class="material-symbols-outlined text-on-surface">share</span>
</button>
</div>
</div>
</article>
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="w-full py-xl px-gutter flex flex-col md:flex-row justify-between items-center gap-md border-t border-outline-variant bg-surface-container-lowest">
<div class="flex flex-col gap-xs items-center md:items-start">
<span class="font-headline-md text-primary uppercase">AIRSOFT CHILE</span>
<p class="font-mono-sm text-on-tertiary-container uppercase">© 2024 AIRSOFT CHILE - RED DE COMUNIDAD TÁCTICA</p>
</div>
<div class="flex flex-wrap justify-center gap-md">
<a class="font-mono-sm text-on-surface-variant hover:text-primary hover:underline uppercase transition-all" href="#">Política de Privacidad</a>
<a class="font-mono-sm text-on-surface-variant hover:text-primary hover:underline uppercase transition-all" href="#">Reglas de Cancha</a>
<a class="font-mono-sm text-on-surface-variant hover:text-primary hover:underline uppercase transition-all" href="#">Patrocinios</a>
<a class="font-mono-sm text-on-surface-variant hover:text-primary hover:underline uppercase transition-all" href="#">Contactar Comando</a>
</div>
</footer>
<!-- FAB for quick action -->
<button class="fixed bottom-gutter right-gutter w-14 h-14 bg-secondary text-on-secondary rounded-full shadow-lg hover:scale-110 active:scale-95 transition-all z-50 flex items-center justify-center">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">add</span>
</button>
<script>
        function switchTab(type) {
            const storesContent = document.getElementById('content-stores');
            const fieldsContent = document.getElementById('content-fields');
            const storesTab = document.getElementById('tab-stores');
            const fieldsTab = document.getElementById('tab-fields');

            if (type === 'stores') {
                storesContent.classList.remove('hidden');
                fieldsContent.classList.add('hidden');
                
                storesTab.classList.add('bg-primary', 'text-on-primary');
                storesTab.classList.remove('text-on-surface-variant');
                
                fieldsTab.classList.remove('bg-primary', 'text-on-primary');
                fieldsTab.classList.add('text-on-surface-variant');
            } else {
                fieldsContent.classList.remove('hidden');
                storesContent.classList.add('hidden');
                
                fieldsTab.classList.add('bg-primary', 'text-on-primary');
                fieldsTab.classList.remove('text-on-surface-variant');
                
                storesTab.classList.remove('bg-primary', 'text-on-primary');
                storesTab.classList.add('text-on-surface-variant');
            }
        }

        // Simple atmospheric effect: random "scanning" line
        const scanLine = document.createElement('div');
        scanLine.style.position = 'fixed';
        scanLine.style.top = '0';
        scanLine.style.left = '0';
        scanLine.style.width = '100%';
        scanLine.style.height = '1px';
        scanLine.style.background = 'rgba(194, 201, 182, 0.05)';
        scanLine.style.pointerEvents = 'none';
        scanLine.style.zIndex = '9999';
        document.body.appendChild(scanLine);

        function animateScan() {
            let pos = 0;
            const screenHeight = window.innerHeight;
            function step() {
                pos += 2;
                if (pos > screenHeight) pos = 0;
                scanLine.style.transform = `translateY(${pos}px)`;
                requestAnimationFrame(step);
            }
            requestAnimationFrame(step);
        }
        animateScan();
    </script>
</body></html>