<?php

namespace App\View\Components;

use App\Models\Tienda;
use Illuminate\View\Component;
use Illuminate\View\View;

/**
 * Componente Blade reutilizable: <x-store-card :tienda="$tienda" />
 *
 * Encapsula el markup de una tarjeta de tienda para que no se repita
 * dentro del @foreach del listado (resources/views/tiendas/index.blade.php).
 */
class StoreCard extends Component
{
    public function __construct(public Tienda $tienda)
    {
    }

    public function render(): View
    {
        return view('components.store-card');
    }
}
