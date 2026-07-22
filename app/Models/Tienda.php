<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;

    /**
     * Atributos asignables masivamente (mass assignment).
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'region',
        'categoria',
        'direccion',
        'telefono',
        'imagen',
        'descripcion',
        'calificacion',
        'envios_nacionales',
    ];

    /**
     * Conversión automática de tipos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'envios_nacionales' => 'boolean',
        'calificacion' => 'decimal:1',
    ];

    /**
     * Regiones disponibles para el formulario y los filtros.
     */
    public static function regiones(): array
    {
        return [
            'Metropolitana',
            'Valparaíso',
            'Biobío',
            'Araucanía',
        ];
    }

    /**
     * Categorías disponibles para el formulario y los filtros.
     */
    public static function categorias(): array
    {
        return [
            'AEG',
            'GBB',
            'Equipo',
            'Taller',
            'Ópticas',
        ];
    }
}
