<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('empleados_numero')->unique();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('numero');
            $table->string('direccion');
            $table->string('curp')->unique();
            $table->string('rfc')->unique();
            $table->string('email')->unique();
            $table->string('fecha_de_contratacion');
            $table->decimal('salario',10,2);
            $table-foreignId('departamento_id')->constrained()->onDelete('cascade');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
