<div>
    <h1 class="card-title m-3">
        Departamento Odontologia ESPAM
    </h1>
    <p class="mt-5 m-3">Listado de datos personales</p>

    <a class="btn btn-primary m-3" href="{{url('datos-personales-medicos')}}" target="_blank">Medico</a>
    <a class="btn btn-primary m-3" href="{{url('datos-personales-pacientes')}}" target="_blank">Paciente</a>

    <p class="m-3">Listado de pacientes por sintomas</p>
    <input class="m-3" type="text" wire:model="sintoma">
    <a class="btn btn-primary m-3" href="{{url('consultaSintoma'.$sintoma)}}" target="_blank">Consultar</a>

    <p class="m-3">Reporte de la consulta generada por la cedula del paciente</p>

    <input class="m-3" type="text" wire:model="cedula">
    <a class="btn btn-primary m-3" href="{{url('consultaPaciente'.$cedula)}}" target="_blank">Consultar</a>



</div>
