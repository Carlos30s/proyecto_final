<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proyecto;

class ProyectoSeeder extends Seeder
{
    public function run(): void
    {
        Proyecto::create([
            'nombre' => 'Sistema RH',
            'descripcion' => 'Proyecto de recursos humanos'
        ]);

        Proyecto::create([
            'nombre' => 'Sistema Inventario',
            'descripcion' => 'Control de inventario'
        ]);

        Proyecto::create([
            'nombre' => 'Sistema Ventas',
            'descripcion' => 'Sistema de ventas empresarial'
        ]);
    }
}