<link rel="stylesheet" href="/sistema/resources/css/app.css">

<h2>{{$modo}} Empleado</h2> <br><br>

<label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" value="{{ isset($empleado->Nombre) ?$empleado->Nombre: ' ' }}" id="Nombre">
    <br><br>

    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno) ?$empleado->ApellidoPaterno: ' ' }}" id="ApellidoPaterno">
    <br><br>
    
    <label for="ApellidoMaterno">Apellido Materno</label>
    <input type="text" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno) ?$empleado->ApellidoMaterno: ' ' }}" id="ApellidoMaterno">
    <br><br>

    <label for="Correo">Correo</label>
    <input type="text" name="Correo" value="{{ isset($empleado->Correo) ?$empleado->Correo: ' '  }}" id="Correo">
    <br><br>


    <label for="Foto">Foto</label><br>

    @if (isset($empleado->Nombre))
    <img  width="100" src="{{ asset('storage').'/'.$empleado->Foto }}" alt="Imagen del empleado {{ $empleado->Nombre }}"><br>
    @endif
    <input type="file" name="Foto" id="Foto">
    <br><br>
    <input type="submit" value="{{$modo}} datos">
    <br><br>
    <a href=" {{ url('empleado') }} " class="a-title">Regresar al inicio</a>