<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancha extends Model
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
        'estacionamiento',
    ];

    /**
     * Conversión automática de tipos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'estacionamiento' => 'boolean',
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
     * Categorías (tipo de entorno) disponibles para el formulario y los filtros.
     */
    public static function categorias(): array
    {
        return [
            'CQB',
            'Woodland',
            'Urbano',
            'Campo abierto',
            'Mixto',
        ];
    }
}
