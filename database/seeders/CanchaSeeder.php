<?php

namespace Database\Seeders;

use App\Models\Cancha;
use Illuminate\Database\Seeder;

class CanchaSeeder extends Seeder
{
    /**
     * Ejecuta el seeder con canchas de ejemplo del directorio Airsoft Chile.
     */
    public function run(): void
    {
        $canchas = [
            [
                'nombre' => 'The Warehouse CQB',
                'region' => 'Metropolitana',
                'categoria' => 'CQB',
                'direccion' => 'Santiago, sector norte',
                'telefono' => '+56 9 1234 5678',
                'imagen' => null,
                'descripcion' => 'Cancha cerrada de alto nivel con dos pisos, zonas de oficinas y vehículos reales.',
                'calificacion' => 4.9,
                'estacionamiento' => true,
            ],
            [
                'nombre' => 'Operación Trinchera',
                'region' => 'Biobío',
                'categoria' => 'Woodland',
                'direccion' => 'Talca, VII Región',
                'telefono' => null,
                'imagen' => null,
                'descripcion' => 'Amplio campo woodland con búnkeres y trincheras de madera entre pinos.',
                'calificacion' => 4.7,
                'estacionamiento' => true,
            ],
            [
                'nombre' => 'Rancho el Halcón',
                'region' => 'Metropolitana',
                'categoria' => 'Campo abierto',
                'direccion' => 'Melipilla, RM',
                'telefono' => '+56 9 5555 1122',
                'imagen' => null,
                'descripcion' => 'Campo abierto rural con graneros antiguos, ideal para partidas milsim.',
                'calificacion' => 4.5,
                'estacionamiento' => false,
            ],
        ];

        foreach ($canchas as $cancha) {
            Cancha::create($cancha);
        }
    }
}
