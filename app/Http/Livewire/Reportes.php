<?php

namespace App\Http\Livewire;

use Livewire\Component;
use PDF;

//query builder
use Illuminate\Support\Facades\DB;

class Reportes extends Component
{
    public $sintoma, $cedula;
    public function render()
    {
        return view('livewire.reportes');
    }

    public function datosPersonalesM(){
        $datosPersonalesM = DB::table('personas')
        ->join('tipo_usuarios', 'personas.id_tipoUsuario', '=', 'tipo_usuarios.id')
        ->select('personas.*', 'tipo_usuarios.tipo')
        ->where('tipo_usuarios.tipo', 'Medico')
        ->get();

        return PDF::loadView('livewire.datos-personales-M', compact('datosPersonalesM'))
        ->stream('archivo.pdf');
    }
    public function datosPersonalesP(){
        $datosPersonalesP = DB::table('personas')
        ->join('tipo_usuarios', 'personas.id_tipoUsuario', '=', 'tipo_usuarios.id')
        ->select('personas.*', 'tipo_usuarios.tipo')
        ->where('tipo_usuarios.tipo', 'Paciente')
        ->get();

        return PDF::loadView('livewire.datos-personales-p', compact('datosPersonalesP'))
        ->stream('archivo.pdf');
    }

    public function consultaSintoma($sintoma){
        $s = DB::table('personas')
        ->join('tipo_usuarios', 'personas.id_tipoUsuario', '=', 'tipo_usuarios.id')
        ->join('sintomas', 'personas.id_sintoma', '=', 'sintomas.id')
        ->select('personas.*', 'sintomas.sintoma')
        ->where('tipo_usuarios.tipo', 'Paciente')
        ->where('sintomas.sintoma', $sintoma)
        ->get();

        return PDF::loadView('livewire.consulta-sintoma', compact('s', 'sintoma'))
        ->stream('archivo.pdf');
    }

    public function consultaPaciente($cedula){
        $p = DB::table('consultas')
        ->join('personas', 'consultas.id_paciente', '=', 'personas.id')
        ->join('sintomas', 'personas.id_sintoma', '=', 'sintomas.id')
        ->select('consultas.id_paciente','personas.*','sintomas.sintoma')
        /* ->where('personas.id_tipoUsuario', '1') */
        ->where('personas.cedula', $cedula)
        ->get();

        
        $m = DB::table('consultas')
        ->join('personas', 'consultas.id_medico', '=', 'personas.id')
        ->join('especialidads', 'personas.id_especialidad', '=', 'especialidads.id')
        ->select('consultas.id_medico','personas.*', 'especialidads.especialidad')
        ->where('personas.id_tipoUsuario', '2')
        ->get();

        /* dd($p, $m); */


        return PDF::loadView('livewire.consulta-paciente', compact('p','m'))
        ->stream('archivo.pdf');
    }
}
