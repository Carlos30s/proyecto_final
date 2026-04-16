@extends('layouts.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">Nuevo Empleado</h1>

<div class="card shadow">
    <div class="card-body">

        <form action="{{ route('empleados.store') }}" method="POST">
            @csrf

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control">
                </div>
                
                <div class="col-md-6 mb-3">
                    <label>Número de empleado</label>
                    <input type="text" name="numero_empleado" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Apellido</label>
                    <input type="text" name="apellido" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Teléfono</label>
                    <input type="text" name="telefono" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>CURP</label>
                    <input type="text" name="curp" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>RFC</label>
                    <input type="text" name="rfc" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Salario</label>
                    <input type="number" name="salario" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Fecha de contratación</label>
                    <input type="date" name="fecha_de_contratacion" class="form-control">
                </div>

                <div class="col-md-12 mb-3">
                    <label>Dirección</label>
                    <input type="text" name="direccion" class="form-control">
                </div>

            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>

        </form>

    </div>
</div>

@endsection