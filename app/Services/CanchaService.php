<?php

namespace App\Services;

use App\Models\Cancha;
use Illuminate\Database\Eloquent\Collection;

/**
 * Capa de servicio para la entidad Cancha.
 *
 * El controlador NUNCA consulta el modelo directamente: siempre pasa
 * por este servicio, que concentra las reglas de negocio (filtros,
 * validaciones de dominio, formato de datos, etc.) y deja al
 * controlador libre de esa responsabilidad.
 */
class CanchaService
{
    /**
     * Devuelve todas las canchas, aplicando filtros opcionales de
     * región y categoría (usados por el directorio público).
     */
    public function listar(array $filtros = []): Collection
    {
        return Cancha::query()
            ->when($filtros['region'] ?? null, fn ($query, $region) => $query->where('region', $region))
            ->when($filtros['categoria'] ?? null, fn ($query, $categoria) => $query->where('categoria', $categoria))
            ->when($filtros['buscar'] ?? null, fn ($query, $buscar) => $query->where('nombre', 'like', "%{$buscar}%"))
            ->latest()
            ->get();
    }

    /**
     * Busca una cancha por su identificador o lanza 404.
     */
    public function buscar(int $id): Cancha
    {
        return Cancha::findOrFail($id);
    }

    /**
     * Crea una nueva cancha a partir de datos ya validados.
     */
    public function crear(array $datos): Cancha
    {
        $datos['estacionamiento'] = $datos['estacionamiento'] ?? false;

        return Cancha::create($datos);
    }

    /**
     * Actualiza una cancha existente con datos ya validados.
     */
    public function actualizar(int $id, array $datos): Cancha
    {
        $cancha = $this->buscar($id);
        $datos['estacionamiento'] = $datos['estacionamiento'] ?? false;
        $cancha->update($datos);

        return $cancha;
    }

    /**
     * Elimina una cancha del directorio.
     */
    public function eliminar(int $id): void
    {
        $this->buscar($id)->delete();
    }
}
