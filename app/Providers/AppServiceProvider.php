<?php

namespace App\Providers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->ensureSqliteDatabaseIsReady();
    }

    /**
     * En hosting sin acceso a consola (ej. Wasmer), no hay forma de correr
     * "touch database/database.sqlite && php artisan migrate" antes del
     * primer request. El archivo .sqlite está en .gitignore (no se sube al
     * repo), así que en un despliegue nuevo simplemente no existe y
     * cualquier consulta revienta con "Database file ... does not exist".
     *
     * Esto crea el archivo y corre las migraciones (+ seeders la primera
     * vez) automáticamente si hace falta, para que la app nunca truene por
     * esta causa. Nota: si el disco del hosting es efímero (se resetea en
     * cada despliegue/reinicio), los datos igual no persistirán entre
     * despliegues — para eso se necesita un volumen persistente o una BD
     * externa (MySQL/Postgres) en vez de SQLite local.
     */
    private function ensureSqliteDatabaseIsReady(): void
    {
        if (config('database.default') !== 'sqlite') {
            return;
        }

        $database = config('database.connections.sqlite.database');

        if (! $database || $database === ':memory:') {
            return;
        }

        try {
            $isNew = ! file_exists($database);

            if ($isNew) {
                @touch($database);
            }

            if ($isNew || ! Schema::connection('sqlite')->hasTable('migrations')) {
                Artisan::call('migrate', ['--force' => true]);
                Artisan::call('db:seed', ['--force' => true]);
            }
        } catch (\Throwable $e) {
            report($e);
        }
    }
}
