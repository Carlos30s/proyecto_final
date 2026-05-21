@extends('layouts.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">Empleados</h1>

@if(auth()->user()->role == 'admin')

    <a href="{{ route('empleados.create') }}"
       class="btn btn-primary mb-3">

        Nuevo empleado

    </a>

@endif

@if(session('success'))

    <div class="alert alert-success">
        {{ session('success') }}
    </div>

@endif

{{-- BUSCADOR --}}
<form method="GET"
      action="{{ route('empleados.index') }}"
      class="mb-3">

    <div class="row">

        <div class="col-md-4">

            <input type="text"
                   name="buscar"
                   class="form-control"
                   placeholder="Buscar empleado..."
                   value="{{ request('buscar') }}">

        </div>

        <div class="col-md-2">

            <button class="btn btn-primary">
                Buscar
            </button>

        </div>

    </div>

</form>

<div class="card shadow">

    <div class="card-body">

        <table class="table table-bordered">

            <thead>

                <tr>

                    <th>Departamento</th>
                    <th>ID</th>
                    <th>Número</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Salario</th>
                    <th>Acciones</th>

                </tr>

            </thead>

            <tbody>

                @foreach($empleados as $empleado)

                <tr>

                    <td>
                        {{ $empleado->departamento ? $empleado->departamento->nombre : 'Sin asignar' }}
                    </td>

                    <td>{{ $empleado->id }}</td>

                    <td>{{ $empleado->numero_empleado }}</td>

                    <td>
                        {{ $empleado->nombre }}
                        {{ $empleado->apellido }}
                    </td>

                    <td>{{ $empleado->email }}</td>

                    <td>${{ $empleado->salario }}</td>

                    <td>

                        <a href="{{ route('empleados.show', $empleado) }}"
                           class="btn btn-info btn-sm">

                            Ver

                        </a>

                        @if(auth()->user()->role == 'admin')

                            <a href="{{ route('empleados.edit', $empleado) }}"
                               class="btn btn-warning btn-sm">

                                Editar

                            </a>

                            <form action="{{ route('empleados.destroy', $empleado) }}"
                                  method="POST"
                                  style="display:inline;">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Seguro que quieres eliminar este empleado?')">

                                    Eliminar

                                </button>

                            </form>

                        @endif

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

        {{-- PAGINACIÓN --}}
        <div class="mt-3">

            {{ $empleados->links() }}

        </div>

    </div>

</div>

@endsection