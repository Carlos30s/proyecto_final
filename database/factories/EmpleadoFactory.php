<?php

namespace Database\Factories;

use App\Models\Empleado;
use App\Models\Departamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    protected $model = Empleado::class;

    public function definition(): array
    {
        return [

            'numero_empleado' => fake()->unique()->numerify('EMP###'),

            'nombre' => fake()->firstName(),

            'apellido' => fake()->lastName(),

            'telefono' => fake()->phoneNumber(),

            'direccion' => fake()->address(),

            'curp' => fake()->unique()->bothify('????######??????##'),

            'rfc' => fake()->unique()->bothify('????######???'),

            'email' => fake()->unique()->safeEmail(),

            'fecha_de_contratacion' => fake()->date(),

            'salario' => fake()->randomFloat(2, 8000, 50000),

            'departamento_id' => Departamento::inRandomOrder()->first()?->id,
        ];
    }
}