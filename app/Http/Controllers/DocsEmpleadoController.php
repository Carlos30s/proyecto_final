<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocsEmpleado;
use App\Models\Empleado;
use Illuminate\Support\Facades\Storage;

class DocsEmpleadoController extends Controller
{
    public function store(Request $request, Empleado $empleado)
    {
        $request->validate([
            'archivo' => 'required|file|max:2048'
        ]);

        $archivo = $request->file('archivo');

        $ruta = $archivo->store('documentos_empleados', 'public');

        DocsEmpleado::create([
            'nombre_archivo' => $archivo->getClientOriginalName(),
            'ruta_archivo' => $ruta,
            'empleado_id' => $empleado->id
        ]);

        return back()->with('success', 'Archivo subido correctamente');
    }
    public function destroy(DocsEmpleado $archivo)
    {
        Storage::disk('public')->delete($archivo->ruta_archivo);

        $archivo->delete();

        return back()->with('success', 'Archivo eliminado correctamente');
    }
}
