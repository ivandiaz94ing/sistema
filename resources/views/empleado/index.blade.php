<link rel="stylesheet" href="/sistema/resources/css/app.css">
Mostrar lista de empleados
<br>

@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
@endif
<br>
<a href="{{url('empleado/create')}} " class="a-title">Registrar nuevo </a>
<br>
<table class="table table-light">
   
<thead class="thead-light">
        <tr>
            <th> Foto</th>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th> Correo</th>
            <th> Acciones</th>
        </tr>
        </thead>
       
        <tbody>
            @foreach( $empleados as $empleado)
            <tr>
                <td>
                        <img  width="50" src="{{ asset('storage').'/'.$empleado->Foto }}" alt="Imagen del empleado {{ $empleado->Nombre }}">
                </td>

                <td>{{ $empleado->id }}</td>
                
                <td>{{ $empleado->Nombre }}</td>
                <td>{{ $empleado->ApellidoPaterno }}</td>
                <td>{{ $empleado->ApellidoMaterno }}</td>
                <td>{{ $empleado->Correo }}</td>
                <td>
                    <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}">
                    Editar
                    </a>
                
                    <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
                        @csrf
                        <!--Convertir el metodo post en Delete para poder eliminar en laravel</p-->
                        {{ method_field('DELETE') }}

                        <input type="submit"  onclick="return confirm('Deseas borrar este empleado?')" value="Borrar">

                    </form>

                </td>
                
            </tr>
            @endforeach
        </tbody>
</table>