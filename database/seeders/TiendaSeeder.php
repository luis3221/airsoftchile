<?php

namespace Database\Seeders;

use App\Models\Tienda;
use Illuminate\Database\Seeder;

class TiendaSeeder extends Seeder
{
    /**
     * Ejecuta el seeder con tiendas de ejemplo del directorio Airsoft Chile.
     */
    public function run(): void
    {
        $tiendas = [
            [
                'nombre' => 'Tactical Santiago',
                'region' => 'Metropolitana',
                'categoria' => 'AEG',
                'direccion' => 'Providencia, RM',
                'telefono' => '+56 9 1234 5678',
                'imagen' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDCjKRUOs9JPESY1d5bvIq4R5EKEfSGH5u8-E0MIuAqxNeoFSg5ovDIe7uY872KEvIMyH-_aaTRXBP8LgtnzJPqaEgJ3xVgTr5mbcw9-zjABc7CazOfRkkx-R63clQv1qWqLDBiztQjgMQBGWJa5LhAkmguVL_b2iZrMFrp-rt7ftoKOUzTKzh1EEsgLc0oOs21O6Hqp2KZJVySU6Yd_cB1BpBY5HtuH9h6W7uNw0uxoqTblsGRgkxNMQ',
                'descripcion' => 'Especialistas en réplicas AEG y personalización de rifles tácticos para uso deportivo.',
                'calificacion' => 4.9,
                'envios_nacionales' => true,
            ],
            [
                'nombre' => 'Biobío Armory',
                'region' => 'Biobío',
                'categoria' => 'GBB',
                'direccion' => 'Concepción, Biobío',
                'telefono' => '+56 9 8765 4321',
                'imagen' => null,
                'descripcion' => 'Distribuidores de réplicas GBB y repuestos originales, con taller propio de mantención.',
                'calificacion' => 4.7,
                'envios_nacionales' => true,
            ],
            [
                'nombre' => 'Valpo Tactical Center',
                'region' => 'Valparaíso',
                'categoria' => 'Taller',
                'direccion' => 'Valparaíso, V Región',
                'telefono' => '+56 9 5555 1122',
                'imagen' => null,
                'descripcion' => 'Especialistas en sistemas HPA y personalización de réplicas. Amplio stock de BBs de alta gama.',
                'calificacion' => 4.5,
                'envios_nacionales' => false,
            ],
        ];

        foreach ($tiendas as $tienda) {
            Tienda::create($tienda);
        }
    }
}
