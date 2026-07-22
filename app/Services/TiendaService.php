<?php

namespace App\Services;

use App\Models\Tienda;
use Illuminate\Database\Eloquent\Collection;

/**
 * Capa de servicio para la entidad Tienda.
 *
 * El controlador NUNCA consulta el modelo directamente: siempre pasa
 * por este servicio, que concentra las reglas de negocio (filtros,
 * validaciones de dominio, formato de datos, etc.) y deja al
 * controlador libre de esa responsabilidad.
 */
class TiendaService
{
    /**
     * Devuelve todas las tiendas, aplicando filtros opcionales de
     * región y categoría (usados por el directorio público).
     */
    public function listar(array $filtros = []): Collection
    {
        return Tienda::query()
            ->when($filtros['region'] ?? null, fn ($query, $region) => $query->where('region', $region))
            ->when($filtros['categoria'] ?? null, fn ($query, $categoria) => $query->where('categoria', $categoria))
            ->when($filtros['buscar'] ?? null, fn ($query, $buscar) => $query->where('nombre', 'like', "%{$buscar}%"))
            ->latest()
            ->get();
    }

    /**
     * Busca una tienda por su identificador o lanza 404.
     */
    public function buscar(int $id): Tienda
    {
        return Tienda::findOrFail($id);
    }

    /**
     * Crea una nueva tienda a partir de datos ya validados.
     */
    public function crear(array $datos): Tienda
    {
        $datos['envios_nacionales'] = $datos['envios_nacionales'] ?? false;

        return Tienda::create($datos);
    }

    /**
     * Actualiza una tienda existente con datos ya validados.
     */
    public function actualizar(int $id, array $datos): Tienda
    {
        $tienda = $this->buscar($id);
        $datos['envios_nacionales'] = $datos['envios_nacionales'] ?? false;
        $tienda->update($datos);

        return $tienda;
    }

    /**
     * Elimina una tienda del directorio.
     */
    public function eliminar(int $id): void
    {
        $this->buscar($id)->delete();
    }
}
