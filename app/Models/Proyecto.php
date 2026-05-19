<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function empleados()
    {
        return $this->belongsToMany(Empleado::class);
    }
}