<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{

    protected $table = 'formularios';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'apellido_paterno',
        'apellido_materno',
        'rut',
        'fecha_nacimiento',
        'telefono',
        'celular',
        'email',
        'direccion',

        'universidad',
        'carrera',
        'egreso',
        'departamento',
        'facultad',

        'empresa',
        'cargo',
        'pago',
    ];
}
