Seccuion para crear empleados


<form action="{{ url('/empleados') }}" method="POST">
    @csrf

    <label for="Nombre">{{ 'Nombre' }}</label>
    <input type="text" name="Nombre" id="Nombre" value="">
    <br>

    <label for="ApellidoPaterno">{{ 'Apellido Paterno' }}</label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="">
    <br>

    <label for="ApellidoMaterno">{{ 'Apellido Materno' }}</label>
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="">
    <br>

    <label for="Direccion">{{ 'Direccion' }}</label>
    <input type="text" name="Direccion" id="Direccion" value="">
    <br>

    <label for="Municipio">{{ 'Municipio' }}</label>
    <input type="text" name="Municipio" id="Municipio" value="">
    <br>

    <label for="Telefono">{{ 'Telefono' }}</label>
    <input type="text" name="Telefono" id="Telefono" value="">
    <br>

    <label for="Correo">{{ 'Correo' }}</label>
    <input type="email" name="Correo" id="Correo" value="">
    <br>

    <label for="Edad">{{ 'Edad' }}</label>
    <input type="text" name="Edad" id="Edad" value="">
    <br>

    <input type="submit" value="Agregar">

    <br>
    <a href="{{ url('empleados') }}">Regresar</a>
</form>
