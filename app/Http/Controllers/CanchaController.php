<?php

namespace App\Http\Controllers;

use App\Http\Requests\CanchaRequest;
use App\Models\Cancha;
use App\Services\CanchaService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CanchaController extends Controller
{
    /**
     * Inyección de dependencias: el controlador recibe el servicio
     * y jamás consulta el modelo Cancha directamente.
     */
    public function __construct(protected CanchaService $canchas)
    {
    }

    /**
     * GET /canchas — Listado del directorio de canchas.
     */
    public function index(Request $request): View
    {
        $canchas = $this->canchas->listar($request->only(['region', 'categoria', 'buscar']));

        return view('canchas.index', [
            'canchas' => $canchas,
            'regiones' => Cancha::regiones(),
            'categorias' => Cancha::categorias(),
            'titulo' => 'Directorio de canchas',
        ]);
    }

    /**
     * GET /canchas/create — Formulario para registrar una nueva cancha.
     */
    public function create(): View
    {
        return view('canchas.create', [
            'cancha' => new Cancha(),
            'regiones' => Cancha::regiones(),
            'categorias' => Cancha::categorias(),
            'titulo' => 'Registrar cancha',
        ]);
    }

    /**
     * POST /canchas — Guarda una nueva cancha.
     */
    public function store(CanchaRequest $request): RedirectResponse
    {
        $cancha = $this->canchas->crear($request->validated());

        return redirect()
            ->route('canchas.show', $cancha)
            ->with('exito', 'Cancha registrada correctamente.');
    }

    /**
     * GET /canchas/{cancha} — Ficha de detalle de una cancha.
     */
    public function show(int $cancha): View
    {
        return view('canchas.show', [
            'cancha' => $this->canchas->buscar($cancha),
            'titulo' => 'Detalle de cancha',
        ]);
    }

    /**
     * GET /canchas/{cancha}/edit — Formulario de edición.
     */
    public function edit(int $cancha): View
    {
        return view('canchas.edit', [
            'cancha' => $this->canchas->buscar($cancha),
            'regiones' => Cancha::regiones(),
            'categorias' => Cancha::categorias(),
            'titulo' => 'Editar cancha',
        ]);
    }

    /**
     * PUT/PATCH /canchas/{cancha} — Actualiza una cancha existente.
     */
    public function update(CanchaRequest $request, int $cancha): RedirectResponse
    {
        $cancha = $this->canchas->actualizar($cancha, $request->validated());

        return redirect()
            ->route('canchas.show', $cancha)
            ->with('exito', 'Cancha actualizada correctamente.');
    }

    /**
     * DELETE /canchas/{cancha} — Elimina una cancha del directorio.
     */
    public function destroy(int $cancha): RedirectResponse
    {
        $this->canchas->eliminar($cancha);

        return redirect()
            ->route('canchas.index')
            ->with('exito', 'Cancha eliminada del directorio.');
    }
}
