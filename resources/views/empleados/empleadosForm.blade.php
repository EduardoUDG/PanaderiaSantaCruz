

{{ $Modo =='crear' ?  'Agregar empleado' : 'Modificar empleado'}}


<label for="Nombre">{{ 'Nombre' }}</label>
<input type="text" name="Nombre" id="Nombre" class="{{ $errors->has('Nombre')?'is-invalid':'' }}"
value="{{ isset($empleado->Nombre)?$empleado->Nombre : old('Nombre') }}">
{!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}
<br>

<label for="ApellidoPaterno">{{ 'Apellido Paterno' }}</label>
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno"
value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno : '' }}">
<br>

<label for="ApellidoMaterno">{{ 'Apellido Materno' }}</label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno"
value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno : '' }}">
<br>

<label for="Direccion">{{ 'Direccion' }}</label>
<input type="text" name="Direccion" id="Direccion"
value="{{ isset($empleado->Direccion)?$empleado->Direccion : '' }}">
<br>

<label for="Municipio">{{ 'Municipio' }}</label>
<input type="text" name="Municipio" id="Municipio"
value="{{ isset($empleado->Municipio)?$empleado->Municipio : '' }}">
<br>

<label for="Telefono">{{ 'Telefono' }}</label>
<input type="text" name="Telefono" id="Telefono"
value="{{ isset($empleado->Telefono)?$empleado->Telefono : '' }}">
<br>

<label for="Correo">{{ 'Correo' }}</label>
<input type="email" name="Correo" id="Correo"
value="{{ isset($empleado->Correo)?$empleado->Correo : '' }}">
<br>

<label for="Edad">{{ 'Edad' }}</label>
<input type="text" name="Edad" id="Edad"
value="{{ isset($empleado->Edad)?$empleado->Edad : '' }}">
<br>

<input type="submit" value="{{ $Modo =='crear' ?  'Agregar' : 'Modificar'}}">


<a href="{{ url('empleados') }}">Regresar</a>
