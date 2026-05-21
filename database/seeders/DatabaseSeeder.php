<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Empleado;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DepartamentoSeeder::class,
            ProyectoSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Usuario',
            'email' => 'user@example.com',
            'role' => 'user',
        ]);

        Empleado::factory(15)->create();

        $empleados = Empleado::all();

        foreach ($empleados as $empleado) {

            $empleado->proyectos()->attach([
                rand(1,3)
            ]);
        }
    }
}