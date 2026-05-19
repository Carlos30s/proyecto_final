<?php

namespace App\Mail;

use App\Models\Empleado;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmpleadoCreadoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $empleado;

    public function __construct(Empleado $empleado)
    {
        $this->empleado = $empleado;
    }

    public function build()
    {
        return $this->subject('Empleado Registrado')
                    ->view('emails.empleado-creado');
    }
}
