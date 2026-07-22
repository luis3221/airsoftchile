# Airsoft Chile — Directorio de Tiendas (Proyecto Libre, Evaluación U1)

Proyecto Laravel + Blade sobre la red comunitaria "Airsoft Chile". El módulo
completo de la evaluación es el **directorio de tiendas** (`/tiendas`), con
CRUD funcional (crear, listar, ver detalle, editar y eliminar tiendas).

## Puesta en marcha local

```bash
composer install
cp .env.example .env
php artisan key:generate

# Base de datos SQLite (no requiere instalar MySQL)
touch database/database.sqlite
php artisan migrate --seed

php artisan serve
```

Abre `http://127.0.0.1:8000/tiendas` para ver el directorio ya poblado con
3 tiendas de ejemplo (Tactical Santiago, Biobío Armory, Valpo Tactical
Center).

> Si prefieres MySQL, comenta el bloque `sqlite` del `.env` y descomenta el
> bloque `mysql` (instrucciones dentro del propio `.env.example`), luego
> corre `php artisan migrate --seed` de nuevo.

## Rutas del módulo Tiendas

| Verbo    | URI                     | Acción     | Descripción                  |
|----------|-------------------------|------------|-------------------------------|
| GET      | `/tiendas`              | `index`    | Listado con filtros y búsqueda |
| GET      | `/tiendas/create`       | `create`   | Formulario de creación        |
| POST     | `/tiendas`              | `store`    | Guarda una tienda nueva        |
| GET      | `/tiendas/{tienda}`     | `show`     | Ficha de detalle               |
| GET      | `/tiendas/{tienda}/edit`| `edit`     | Formulario de edición          |
| PUT      | `/tiendas/{tienda}`     | `update`   | Actualiza una tienda            |
| DELETE   | `/tiendas/{tienda}`     | `destroy`  | Elimina una tienda               |

Generadas automáticamente con `Route::resource('tiendas', TiendaController::class)`
en `routes/web.php`.

## Arquitectura (cómo se conectan las capas)

```
Request  →  routes/web.php  →  TiendaController  →  TiendaService  →  Tienda (Eloquent)  →  SQLite
                                       ↓
                              resources/views/tiendas/*.blade.php
                                       ↓
                              layouts/app.blade.php (+ partials + <x-store-card>)
```

- **`app/Models/Tienda.php`** — modelo Eloquent de la entidad, con
  `regiones()` y `categorias()` como catálogos estáticos usados por
  filtros y formularios.
- **`app/Services/TiendaService.php`** — capa de servicio: el controlador
  nunca consulta el modelo directamente, siempre pasa por aquí
  (`listar`, `buscar`, `crear`, `actualizar`, `eliminar`).
- **`app/Http/Controllers/TiendaController.php`** — recibe el servicio por
  inyección de dependencias en el constructor; cada método es breve y
  delega la lógica.
- **`app/Http/Requests/TiendaRequest.php`** — reglas de validación
  reutilizadas tanto en `store` como en `update`.
- **`app/View/Components/StoreCard.php`** + `resources/views/components/store-card.blade.php`
  — componente Blade reutilizable (`<x-store-card :tienda="$tienda" />`),
  usado dentro del `@foreach` del listado.
- **`resources/views/layouts/app.blade.php`** — layout base con `@yield`,
  reutilizado por las 4 vistas del módulo vía `@extends`.
- **`resources/views/partials/`** — `nav`, `sidebar`, `footer`,
  `bottom-nav`, incluidos en el layout con `@include`.
- **`resources/views/tiendas/_form.blade.php`** — formulario compartido,
  incluido tanto por `create.blade.php` como por `edit.blade.php`.

## Datos de ejemplo (seeder)

`database/seeders/TiendaSeeder.php` crea 3 tiendas de ejemplo al correr
`php artisan migrate --seed`. Puedes editarlas o agregar más tiendas desde
el propio formulario `/tiendas/create` una vez el proyecto esté corriendo.

## Otras páginas del sitio

`/`, `/eventos`, `/foro` y `/canchas` siguen siendo vistas estáticas (no
forman parte del alcance de esta evaluación); solo se les actualizó el
enlace de navegación a `/tiendas` para que sigan apuntando al directorio
real.

---

*El README original generado por Laravel se conserva en `README_LARAVEL.md`.*
