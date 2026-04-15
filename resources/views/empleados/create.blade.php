@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nuevo Empleado</h1>

    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf

        <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2">
        <input type="text" name="apellido" placeholder="Apellido" class="form-control mb-2">
        <input type="text" name="telefono" placeholder="Teléfono" class="form-control mb-2">

        <button class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection