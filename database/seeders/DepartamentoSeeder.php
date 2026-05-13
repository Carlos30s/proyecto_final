<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departamento;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departamentos = [
            'Sistemas',
            'Recursos Humanos',
            'Contabilidad',
            'Ventas',
            'Marketing'
        ];

        foreach ($departamentos as $dep) {

            Departamento::create([
                'nombre' => $dep
            ]);

        }
    }
}
