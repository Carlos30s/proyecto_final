<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Empleado;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmpleadoTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function un_usuario_autenticado_puede_ver_empleados()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->get('/empleados');

        $response->assertStatus(200);
    }

    /** @test */
    public function admin_puede_crear_empleado()
    {
        $admin = User::factory()->create([
            'role' => 'admin'
        ]);

        $response = $this->actingAs($admin)
            ->post('/empleados', [
                'numero_empleado' => 'EMP999',
                'nombre' => 'Carlos',
                'apellido' => 'Hernandez',
                'telefono' => '3312345678',
                'direccion' => 'Guadalajara',
                'curp' => 'HECC010101HJCXXX01',
                'rfc' => 'HECC010101ABC',
                'email' => 'carlos@test.com',
                'fecha_de_contratacion' => now(),
                'salario' => 12000,
            ]);

        $response->assertRedirect('/empleados');

        $this->assertDatabaseHas('empleados', [
            'email' => 'carlos@test.com'
        ]);
    }

    /** @test */
    public function validacion_falla_si_faltan_datos()
    {
        $admin = User::factory()->create([
            'role' => 'admin'
        ]);

        $response = $this->actingAs($admin)
            ->post('/empleados', []);

        $response->assertSessionHasErrors([
            'numero_empleado',
            'nombre',
            'apellido'
        ]);
    }

    /** @test */
    public function admin_puede_eliminar_empleado()
    {
        $admin = User::factory()->create([
            'role' => 'admin'
        ]);

        $empleado = Empleado::factory()->create();

        $response = $this->actingAs($admin)
            ->delete("/empleados/{$empleado->id}");

        $response->assertRedirect('/empleados');

        $this->assertSoftDeleted('empleados', [
            'id' => $empleado->id
        ]);
    }
}