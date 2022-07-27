<div>
    <style>
        table {
            width: 100%;
            border: 1px solid #000;
        }
        
        th, td {
            width: 25%;
            text-align: left;
            border: 1px solid #000;
            padding: 0.3em;
        }
    </style>
    <h1>
        Datos personales de los pacientes registrados
    </h1>
    <table>
        <thead >
            <tr >
                <th >
                   Nombre 
                </th>
                <th>
                    Apellido
                 </th>
                 <th>
                    Cedula 
                 </th>
                 <th>
                    Tipo
                 </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datosPersonalesP as $item)
                <tr>
                    <td>
                        {{$item->nombre}}
                    </td>
                    <td>
                        {{$item->apellido}}
                    </td>
                    <td>
                        {{$item->cedula}}
                    </td>
                    <td>
                        {{$item->tipo}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> 