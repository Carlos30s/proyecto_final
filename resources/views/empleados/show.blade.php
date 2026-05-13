@extends('layouts.app')

@section('content')

<h1 class="h3 mb-4 text-gray-800">Detalle del Empleado</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card shadow mb-4">
    <div class="card-body">

        <p><strong>Número:</strong> {{ $empleado->numero_empleado }}</p>

        <p>
            <strong>Nombre:</strong>
            {{ $empleado->nombre }} {{ $empleado->apellido }}
        </p>

        <p><strong>Email:</strong> {{ $empleado->email }}</p>

        <p><strong>Teléfono:</strong> {{ $empleado->telefono }}</p>

        <p><strong>Salario:</strong> ${{ $empleado->salario }}</p>

    </div>
</div>

{{-- SOLO ADMIN PUEDE SUBIR ARCHIVOS --}}
@if(auth()->user()->role == 'admin')

<div class="card shadow mb-4">

    <div class="card-header">
        Subir Archivo
    </div>

    <div class="card-body">

        <form action="{{ route('archivos.store', $empleado) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="mb-3">

                <input type="file"
                       name="archivo"
                       class="form-control">

            </div>

            @error('archivo')

                <small class="text-danger">
                    {{ $message }}
                </small>

            @enderror

            <button class="btn btn-primary">
                Subir Archivo
            </button>

        </form>

    </div>

</div>

@endif

<div class="card shadow">

    <div class="card-header">
        Archivos del empleado
    </div>

    <div class="card-body">

        @if($empleado->archivos->count())

            <ul class="list-group">

                @foreach($empleado->archivos as $archivo)

                <li class="list-group-item d-flex justify-content-between align-items-center">

                    <span>
                        {{ $archivo->nombre_archivo }}
                    </span>

                    <div>

                        {{-- TODOS PUEDEN VER --}}
                        <a href="{{ asset('storage/' . $archivo->ruta_archivo) }}"
                           target="_blank"
                           class="btn btn-sm btn-success">

                            Ver Archivo

                        </a>

                        {{-- SOLO ADMIN ELIMINA --}}
                        @if(auth()->user()->role == 'admin')

                        <form action="{{ route('archivos.destroy', $archivo) }}"
                              method="POST"
                              style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Eliminar archivo?')">

                                Eliminar

                            </button>

                        </form>

                        @endif

                    </div>

                </li>

                @endforeach

            </ul>

        @else

            <p>No hay archivos subidos.</p>

        @endif

    </div>

</div>

<br>

<a href="{{ route('empleados.index') }}"
   class="btn btn-secondary">

    Volver

</a>

@endsection