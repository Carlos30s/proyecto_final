<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmpleadoTest extends TestCase
{
    use RefreshDatabase;

    public function test_usuario_puede_ver_empleados(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->get('/empleados');

        $response->assertStatus(200);
    }
}
