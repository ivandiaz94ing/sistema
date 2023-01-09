
@extends('layouts.app')

@section('content')
<div class="container">

<br>

@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
@endif
<br>
<a href="{{url('empleado/create')}} " class="btn btn-success">Registrar nuevo </a>
<br><br>
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
                        <img class="img-thumbnail img-fluid"  width="50" src="{{ asset('storage').'/'.$empleado->Foto }}" alt="Imagen del empleado {{ $empleado->Nombre }}">
                </td>

                <td>{{ $empleado->id }}</td>
                
                <td>{{ $empleado->Nombre }}</td>
                <td>{{ $empleado->ApellidoPaterno }}</td>
                <td>{{ $empleado->ApellidoMaterno }}</td>
                <td>{{ $empleado->Correo }}</td>
                <td>
                    <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning">
                    Editar
                    </a>
                
                    <form action="{{ url('/empleado/'.$empleado->id) }}" class="d-inline" method="post">
                        @csrf
                        <!--Convertir el metodo post en Delete para poder eliminar en laravel</p-->
                        {{ method_field('DELETE') }}

                        <input class="btn btn-danger" type="submit"  onclick="return confirm('Deseas borrar este empleado?')" value="Borrar">

                    </form>

                </td>
                
            </tr>
            @endforeach
        </tbody>
</table>
</div>
@endsection