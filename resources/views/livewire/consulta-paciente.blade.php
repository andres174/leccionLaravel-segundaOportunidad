<h1>
    Datos de la consulta.
</h1>
<h2>
    Paciente:
</h2>
<div>
  
    
    @foreach ($p as $item)
        <p><b>Nombre y Apellido</b></p>
        {{$item->nombre}}   {{$item->apellido}}
        <br>
        <p><b>Cedula</b></p>
        {{$item->cedula}}
        <br>
        <p><b>Sintoma de la consulta</b></p>
        {{$item->sintoma}}
        <br>
    @endforeach
    
</div>
<h2>Medico a cargo de la consulta:</h2>

<div>
    
    @foreach ($m as $item)
        <p><b>Nombre y Apellido</b></p>
        {{$item->nombre}}   {{$item->apellido}}
        <br>
        <p><b>Cedula</b></p>
        {{$item->cedula}}
        <br>
        <p><b>Sintoma de la consulta</b></p>
        {{$item->especialidad}}
        <br>
    @endforeach
    
</div>
