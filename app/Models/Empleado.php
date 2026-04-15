<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'numero_empleado',
        'nombre',
        'apellido',
        'telefono',
        'direccion',
        'curp',
        'rfc',
        'email',
        'fecha_ingreso',
        'salario',
        'departamento_id'
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
    public function archivos()
    {
        return $this->hasMany(DocsEmpleado::class);
    }
}
