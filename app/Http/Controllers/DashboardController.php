<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Departamento;
use App\Models\Proyecto;

class DashboardController extends Controller
{
    public function index()
    {
        $totalEmpleados = Empleado::count();

        $totalDepartamentos = Departamento::count();

        $totalProyectos = Proyecto::count();

        $empleadosEliminados = Empleado::onlyTrashed()->count();

        return view('dashboard', compact(
            'totalEmpleados',
            'totalDepartamentos',
            'totalProyectos',
            'empleadosEliminados'
        ));
    }
}