<?php

namespace Database\Seeders;

use App\Models\Evento;
use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    /**
     * Ejecuta el seeder con eventos de ejemplo del calendario Airsoft Chile.
     */
    public function run(): void
    {
        $eventos = [
            [
                'nombre' => 'Operación Cóndor',
                'region' => 'Metropolitana',
                'categoria' => 'Milsim',
                'lugar' => 'Cajón del Maipo, RM',
                'lat' => -33.7500,
                'lng' => -70.3500,
                'fecha' => '2026-11-24',
                'hora' => '08:00',
                'tarifa' => 15000,
                'cupos' => 60,
                'imagen' => null,
                'descripcion' => 'Misión milsim de jornada completa con objetivos por escuadra y control de bajas.',
                'inscripcion_abierta' => true,
            ],
            [
                'nombre' => 'CQB Rush: Santiago',
                'region' => 'Metropolitana',
                'categoria' => 'Speedsoft',
                'lugar' => 'Quilicura, RM',
                'lat' => -33.3600,
                'lng' => -70.7300,
                'fecha' => '2026-12-02',
                'hora' => '10:00',
                'tarifa' => 12500,
                'cupos' => 24,
                'imagen' => null,
                'descripcion' => 'Torneo de speedsoft en formato eliminatoria, partidas rápidas de 5 minutos.',
                'inscripcion_abierta' => true,
            ],
            [
                'nombre' => 'Open Field Sunday',
                'region' => 'Valparaíso',
                'categoria' => 'Open Play',
                'lugar' => 'Puchuncaví, V Región',
                'lat' => -32.7333,
                'lng' => -71.4333,
                'fecha' => '2026-12-08',
                'hora' => '09:30',
                'tarifa' => 8000,
                'cupos' => null,
                'imagen' => null,
                'descripcion' => 'Sesión recreativa abierta a todo nivel, control de FPS obligatorio en el acceso.',
                'inscripcion_abierta' => false,
            ],
        ];

        foreach ($eventos as $evento) {
            Evento::create($evento);
        }
    }
}
