<?php

namespace App\Http\Controllers;

use App\Models\Cancha;
use App\Models\Evento;
use App\Models\Tienda;
use Illuminate\Http\JsonResponse;

class MapaController extends Controller
{
    /**
     * GET /mapa/puntos — Devuelve, en un solo JSON, todos los eventos,
     * canchas y tiendas que tienen coordenadas registradas, para
     * pintarlos como marcadores en el mapa interactivo.
     */
    public function puntos(): JsonResponse
    {
        $eventos = Evento::query()
            ->whereNotNull('lat')
            ->whereNotNull('lng')
            ->get()
            ->map(fn (Evento $evento) => [
                'tipo' => 'evento',
                'id' => $evento->id,
                'nombre' => $evento->nombre,
                'lat' => (float) $evento->lat,
                'lng' => (float) $evento->lng,
                'subtitulo' => $evento->fecha->format('d/m/Y').($evento->lugar ? ' · '.$evento->lugar : ''),
                'categoria' => $evento->categoria,
                'url' => route('eventos.show', $evento),
            ]);

        $canchas = Cancha::query()
            ->whereNotNull('lat')
            ->whereNotNull('lng')
            ->get()
            ->map(fn (Cancha $cancha) => [
                'tipo' => 'cancha',
                'id' => $cancha->id,
                'nombre' => $cancha->nombre,
                'lat' => (float) $cancha->lat,
                'lng' => (float) $cancha->lng,
                'subtitulo' => $cancha->direccion ?? $cancha->region,
                'categoria' => $cancha->categoria,
                'url' => route('canchas.show', $cancha),
            ]);

        $tiendas = Tienda::query()
            ->whereNotNull('lat')
            ->whereNotNull('lng')
            ->get()
            ->map(fn (Tienda $tienda) => [
                'tipo' => 'tienda',
                'id' => $tienda->id,
                'nombre' => $tienda->nombre,
                'lat' => (float) $tienda->lat,
                'lng' => (float) $tienda->lng,
                'subtitulo' => $tienda->direccion ?? $tienda->region,
                'categoria' => $tienda->categoria,
                'url' => route('tiendas.show', $tienda),
            ]);

        return response()->json(
            $eventos->concat($canchas)->concat($tiendas)->values()
        );
    }
}
