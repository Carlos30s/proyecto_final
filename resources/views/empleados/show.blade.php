@extends('layouts.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">Detalle del Empleado</h1>

<div class="card shadow">
    <div class="card-body">

        <p><strong>Número:</strong> {{ $empleado->numero_empleado }}</p>
        <p><strong>Nombre:</strong> {{ $empleado->nombre }} {{ $empleado->apellido }}</p>
        <p><strong>Email:</strong> {{ $empleado->email }}</p>
        <p><strong>Teléfono:</strong> {{ $empleado->telefono }}</p>
        <p><strong>Salario:</strong> ${{ $empleado->salario }}</p>

        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">
            Volver
        </a>

    </div>
</div>

@endsection