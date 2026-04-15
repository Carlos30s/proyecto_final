<x-layouts::app.sidebar>
    <div class="container">
        <h1>Empleados</h1>

        <a href="{{ route('empleados.create') }}" class="btn btn-primary">Nuevo empleado</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Departamento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->id }}</td>
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->departamento->nombre ?? 'Sin departamento' }}</td>
                    <td>
                        <a href="{{ route('empleados.edit', $empleado) }}" class="btn btn-warning">Editar</a>

                        <form action="{{ route('empleados.destroy', $empleado) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts::app.sidebar>