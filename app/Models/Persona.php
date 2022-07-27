<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table= 'personas';
    public $timestamps = false;
    public $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'id_tipoUsuario',
        'id_especialidad',
        'id_sintoma'
    ];
}
