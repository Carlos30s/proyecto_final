<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocsEmpleado extends Model
{
    protected $fillable = [
        'ruta_archivo',
        'empleado_id'
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}