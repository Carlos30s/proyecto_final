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
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);

        $this->call([
            DepartamentoSeeder::class,
        ]);

        Empleado::factory(15)->create();
    }
}