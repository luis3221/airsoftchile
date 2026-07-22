<?php

namespace App\Http\Controllers;

use App\Http\Requests\TiendaRequest;
use App\Models\Tienda;
use App\Services\TiendaService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TiendaController extends Controller
{
    /**
     * Inyección de dependencias: el controlador recibe el servicio
     * y jamás consulta el modelo Tienda directamente.
     */
    public function __construct(protected TiendaService $tiendas)
    {
    }

    /**
     * GET /tiendas — Listado del directorio de tiendas.
     */
    public function index(Request $request): View
    {
        $tiendas = $this->tiendas->listar($request->only(['region', 'categoria', 'buscar']));

        return view('tiendas.index', [
            'tiendas' => $tiendas,
            'regiones' => Tienda::regiones(),
            'categorias' => Tienda::categorias(),
            'titulo' => 'Directorio de tiendas',
        ]);
    }

    /**
     * GET /tiendas/create — Formulario para registrar una nueva tienda.
     */
    public function create(): View
    {
        return view('tiendas.create', [
            'tienda' => new Tienda(),
            'regiones' => Tienda::regiones(),
            'categorias' => Tienda::categorias(),
            'titulo' => 'Registrar tienda',
        ]);
    }

    /**
     * POST /tiendas — Guarda una nueva tienda.
     */
    public function store(TiendaRequest $request): RedirectResponse
    {
        $tienda = $this->tiendas->crear($request->validated());

        return redirect()
            ->route('tiendas.show', $tienda)
            ->with('exito', 'Tienda registrada correctamente.');
    }

    /**
     * GET /tiendas/{tienda} — Ficha de detalle de una tienda.
     */
    public function show(int $tienda): View
    {
        return view('tiendas.show', [
            'tienda' => $this->tiendas->buscar($tienda),
            'titulo' => 'Detalle de tienda',
        ]);
    }

    /**
     * GET /tiendas/{tienda}/edit — Formulario de edición.
     */
    public function edit(int $tienda): View
    {
        return view('tiendas.edit', [
            'tienda' => $this->tiendas->buscar($tienda),
            'regiones' => Tienda::regiones(),
            'categorias' => Tienda::categorias(),
            'titulo' => 'Editar tienda',
        ]);
    }

    /**
     * PUT/PATCH /tiendas/{tienda} — Actualiza una tienda existente.
     */
    public function update(TiendaRequest $request, int $tienda): RedirectResponse
    {
        $tienda = $this->tiendas->actualizar($tienda, $request->validated());

        return redirect()
            ->route('tiendas.show', $tienda)
            ->with('exito', 'Tienda actualizada correctamente.');
    }

    /**
     * DELETE /tiendas/{tienda} — Elimina una tienda del directorio.
     */
    public function destroy(int $tienda): RedirectResponse
    {
        $this->tiendas->eliminar($tienda);

        return redirect()
            ->route('tiendas.index')
            ->with('exito', 'Tienda eliminada del directorio.');
    }
}
