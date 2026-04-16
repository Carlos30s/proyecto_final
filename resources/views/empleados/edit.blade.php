@extends('layouts.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">Editar Empleado</h1>

<div class="card shadow">
    <div class="card-body">

        <form action="{{ route('empleados.update', $empleado) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label>Número</label>
                    <input type="text" name="numero_empleado" class="form-control"
                        value="{{ $empleado->numero_empleado }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control"
                        value="{{ $empleado->nombre }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Apellido</label>
                    <input type="text" name="apellido" class="form-control"
                        value="{{ $empleado->apellido }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Teléfono</label>
                    <input type="text" name="telefono" class="form-control"
                        value="{{ $empleado->telefono }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control"
                        value="{{ $empleado->email }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Salario</label>
                    <input type="number" name="salario" class="form-control"
                        value="{{ $empleado->salario }}">
                </div>

            </div>

            <button class="btn btn-success">Actualizar</button>
            <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>

        </form>

    </div>
</div>

@endsection