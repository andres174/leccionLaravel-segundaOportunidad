<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table= 'consultas';
    public $timestamps = false;
    public $fillable = [
        'id_paciente',
        'id_medico'
    ];
}
