<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
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
        'lugar',
        'fecha',
        'hora',
        'tarifa',
        'cupos',
        'imagen',
        'descripcion',
        'inscripcion_abierta',
    ];

    /**
     * Conversión automática de tipos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'fecha' => 'date',
        'tarifa' => 'integer',
        'cupos' => 'integer',
        'inscripcion_abierta' => 'boolean',
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
     * Tipos de juego disponibles para el formulario y los filtros.
     */
    public static function categorias(): array
    {
        return [
            'Open Play',
            'Milsim',
            'Speedsoft',
            'Night Ops',
        ];
    }
}
