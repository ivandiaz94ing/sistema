Formulario que tiene datos en común con create y edit <br><br>
<label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" value="{{ $empleado->Nombre }}" id="Nombre">
    <br><br>

    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" name="ApellidoPaterno" value="{{ $empleado->ApellidoPaterno }}" id="ApellidoPaterno">
    <br><br>
    
    <label for="ApellidoMaterno">Apellido Materno</label>
    <input type="text" name="ApellidoMaterno" value="{{ $empleado->ApellidoMaterno }}" id="ApellidoMaterno">
    <br><br>

    <label for="Correo">Correo</label>
    <input type="text" name="Correo" value="{{ $empleado->Correo }}" id="Correo">
    <br><br>


    <label for="Foto">Foto</label>
    {{ $empleado->Foto }}
    <input type="file" name="Foto" id="Foto">
    <br><br>
    <input type="submit" value="Guardar datos">
    <br><br>