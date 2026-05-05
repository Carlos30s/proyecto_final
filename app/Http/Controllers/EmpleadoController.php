<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Departamento;
use Illuminate\Validation\Rule;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::with('departamento')->get();
        return view('empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departamentos = Departamento::all();
        return view('empleados.create', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
            'numero_empleado' => [
                'required',
                Rule::unique('empleados')->whereNull('deleted_at')
            ],
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('empleados')->whereNull('deleted_at')
            ],
            'rfc' => [
                'required',
                Rule::unique('empleados')->whereNull('deleted_at')
            ],
            'curp' => [
                'required',
                Rule::unique('empleados')->whereNull('deleted_at')
            ],
            'salario' => 'required|numeric',
        ], [
            'numero_empleado.unique' => 'El número de empleado ya existe.',
            'email.unique' => 'El correo ya está registrado.',
            'rfc.unique' => 'El RFC ya está registrado.',
            'curp.unique' => 'La CURP ya está registrada.',
        ]);

        Empleado::create($request->all());

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado creado correctamente');
    }
    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        return view('empleados.show', compact('empleado'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'numero_empleado' => [
                'required',
                Rule::unique('empleados')->whereNull('deleted_at')
            ],
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('empleados')->whereNull('deleted_at')
            ],
            'rfc' => [
                'required',
                Rule::unique('empleados')->whereNull('deleted_at')
            ],
            'curp' => [
                'required',
                Rule::unique('empleados')->whereNull('deleted_at')
            ],
            'salario' => 'required|numeric',
        ]);

        $empleado->update($request->all());

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado eliminado correctamente');
    }
}
