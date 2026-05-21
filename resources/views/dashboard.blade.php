@extends('layouts.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">
    Dashboard
</h1>

<div class="row">

    <div class="col-md-3 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">

            <div class="card-body">

                <h5>Total Empleados</h5>

                <h2>{{ $totalEmpleados }}</h2>

            </div>

        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card border-left-success shadow h-100 py-2">

            <div class="card-body">

                <h5>Departamentos</h5>

                <h2>{{ $totalDepartamentos }}</h2>

            </div>

        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card border-left-info shadow h-100 py-2">

            <div class="card-body">

                <h5>Proyectos</h5>

                <h2>{{ $totalProyectos }}</h2>

            </div>

        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">

            <div class="card-body">

                <h5>Empleados Eliminados</h5>

                <h2>{{ $empleadosEliminados }}</h2>

            </div>

        </div>
    </div>

</div>

@endsection
