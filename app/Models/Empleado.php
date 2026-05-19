<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empleado extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'numero_empleado',
        'nombre',
        'apellido',
        'telefono',
        'direccion',
        'curp',
        'rfc',
        'email',
        'fecha_de_contratacion',
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
    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class);
    }
}
