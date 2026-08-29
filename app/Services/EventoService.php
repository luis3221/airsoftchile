<?php

namespace App\Services;

use App\Models\Evento;
use Illuminate\Database\Eloquent\Collection;

/**
 * Capa de servicio para la entidad Evento.
 *
 * El controlador NUNCA consulta el modelo directamente: siempre pasa
 * por este servicio, que concentra las reglas de negocio (filtros,
 * validaciones de dominio, formato de datos, etc.) y deja al
 * controlador libre de esa responsabilidad.
 */
class EventoService
{
    /**
     * Devuelve todos los eventos, aplicando filtros opcionales de
     * región y tipo de juego, ordenados por fecha más próxima.
     */
    public function listar(array $filtros = []): Collection
    {
        return Evento::query()
            ->when($filtros['region'] ?? null, fn ($query, $region) => $query->where('region', $region))
            ->when($filtros['categoria'] ?? null, fn ($query, $categoria) => $query->where('categoria', $categoria))
            ->when($filtros['buscar'] ?? null, fn ($query, $buscar) => $query->where('nombre', 'like', "%{$buscar}%"))
            ->orderBy('fecha')
            ->orderBy('hora')
            ->get();
    }

    /**
     * Busca un evento por su identificador o lanza 404.
     */
    public function buscar(int $id): Evento
    {
        return Evento::findOrFail($id);
    }

    /**
     * Crea un nuevo evento a partir de datos ya validados.
     */
    public function crear(array $datos): Evento
    {
        $datos['inscripcion_abierta'] = $datos['inscripcion_abierta'] ?? false;

        return Evento::create($datos);
    }

    /**
     * Actualiza un evento existente con datos ya validados.
     */
    public function actualizar(int $id, array $datos): Evento
    {
        $evento = $this->buscar($id);
        $datos['inscripcion_abierta'] = $datos['inscripcion_abierta'] ?? false;
        $evento->update($datos);

        return $evento;
    }

    /**
     * Elimina un evento del calendario.
     */
    public function eliminar(int $id): void
    {
        $this->buscar($id)->delete();
    }
}
