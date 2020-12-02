
<form action="" method="post">

    <label for="Nombre">{{ 'Nombre' }}</label>
    <input type="text" name="Nombre" id="Nombre" value="{{ $empleado->Nombre }}">
    <br>

    <label for="ApellidoPaterno">{{ 'Apellido Paterno' }}</label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ $empleado->ApellidoPaterno }}">
    <br>

    <label for="ApellidoMaterno">{{ 'Apellido Materno' }}</label>
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ $empleado->ApellidoMaterno }}">
    <br>

    <label for="Direccion">{{ 'Direccion' }}</label>
    <input type="text" name="Direccion" id="Direccion" value="{{ $empleado->Direccion }}">
    <br>

    <label for="Municipio">{{ 'Municipio' }}</label>
    <input type="text" name="Municipio" id="Municipio" value="{{ $empleado->Municipio }}">
    <br>

    <label for="Telefono">{{ 'Telefono' }}</label>
    <input type="text" name="Telefono" id="Telefono" value="{{ $empleado->Telefono }}">
    <br>

    <label for="Correo">{{ 'Correo' }}</label>
    <input type="email" name="Correo" id="Correo" value="{{ $empleado->Correo }}">
    <br>

    <label for="Edad">{{ 'Edad' }}</label>
    <input type="text" name="Edad" id="Edad" value="{{ $empleado->Edad }}">
    <br>

</form>
