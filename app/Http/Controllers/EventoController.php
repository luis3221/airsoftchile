<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventoRequest;
use App\Models\Evento;
use App\Services\EventoService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EventoController extends Controller
{
    /**
     * Inyección de dependencias: el controlador recibe el servicio
     * y jamás consulta el modelo Evento directamente.
     */
    public function __construct(protected EventoService $eventos)
    {
    }

    /**
     * GET /eventos — Calendario de eventos.
     */
    public function index(Request $request): View
    {
        $eventos = $this->eventos->listar($request->only(['region', 'categoria', 'buscar']));

        return view('eventos.index', [
            'eventos' => $eventos,
            'regiones' => Evento::regiones(),
            'categorias' => Evento::categorias(),
            'titulo' => 'Calendario de eventos',
        ]);
    }

    /**
     * GET /eventos/create — Formulario para publicar un nuevo evento.
     */
    public function create(): View
    {
        return view('eventos.create', [
            'evento' => new Evento(),
            'regiones' => Evento::regiones(),
            'categorias' => Evento::categorias(),
            'titulo' => 'Publicar evento',
        ]);
    }

    /**
     * POST /eventos — Guarda un nuevo evento.
     */
    public function store(EventoRequest $request): RedirectResponse
    {
        $evento = $this->eventos->crear($request->validated());

        return redirect()
            ->route('eventos.show', $evento)
            ->with('exito', 'Evento publicado correctamente.');
    }

    /**
     * GET /eventos/{evento} — Ficha de detalle de un evento.
     */
    public function show(int $evento): View
    {
        return view('eventos.show', [
            'evento' => $this->eventos->buscar($evento),
            'titulo' => 'Detalle de evento',
        ]);
    }

    /**
     * GET /eventos/{evento}/edit — Formulario de edición.
     */
    public function edit(int $evento): View
    {
        return view('eventos.edit', [
            'evento' => $this->eventos->buscar($evento),
            'regiones' => Evento::regiones(),
            'categorias' => Evento::categorias(),
            'titulo' => 'Editar evento',
        ]);
    }

    /**
     * PUT/PATCH /eventos/{evento} — Actualiza un evento existente.
     */
    public function update(EventoRequest $request, int $evento): RedirectResponse
    {
        $evento = $this->eventos->actualizar($evento, $request->validated());

        return redirect()
            ->route('eventos.show', $evento)
            ->with('exito', 'Evento actualizado correctamente.');
    }

    /**
     * DELETE /eventos/{evento} — Elimina un evento del calendario.
     */
    public function destroy(int $evento): RedirectResponse
    {
        $this->eventos->eliminar($evento);

        return redirect()
            ->route('eventos.index')
            ->with('exito', 'Evento eliminado del calendario.');
    }
}
