{{ $Modo == 'crear' ? 'Agregar empleado' : 'Modificar empleado' }}


<label for="Nombre">{{ 'Nombre' }}</label>
<input type="text" name="Nombre" id="Nombre" class="{{ $errors->has('Nombre') ? 'is-invalid' : '' }}"
    value="{{ isset($empleado->Nombre) ? $empleado->Nombre : old('Nombre') }}">
{!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
<br>

<label for="ApellidoPaterno">{{ 'Apellido Paterno' }}</label>
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno"
    class="{{ $errors->has('ApellidoPaterno') ? 'is-invalid' : '' }}"
    value="{{ isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : old('ApellidoPaterno') }}">
{!! $errors->first('ApellidoPaterno', '<div class="invalid-feedback">:message</div>') !!}
<br>

<label for="ApellidoMaterno">{{ 'Apellido Materno' }}</label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno"
    class="{{ $errors->has('ApellidoMaterno') ? 'is-invalid' : '' }}"
    value="{{ isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno : old('ApellidoMaterno') }}">
{!! $errors->first('ApellidoMaterno', '<div class="invalid-feedback">:message</div>') !!}
<br>

<label for="Direccion">{{ 'Direccion' }}</label>
<input type="text" name="Direccion" id="Direccion" class="{{ $errors->has('Direccion') ? 'is-invalid' : '' }}"
    value="{{ isset($empleado->Direccion) ? $empleado->Direccion : old('Direccion') }}">
{!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
<br>

<label for="Municipio">{{ 'Municipio' }}</label>
<input type="text" name="Municipio" id="Municipio" class="{{ $errors->has('Municipio') ? 'is-invalid' : '' }}"
    value="{{ isset($empleado->Municipio) ? $empleado->Municipio : old('Municipio') }}">
{!! $errors->first('Municipio', '<div class="invalid-feedback">:message</div>') !!}
<br>

<label for="Telefono">{{ 'Telefono' }}</label>
<input type="text" name="Telefono" id="Telefono" class="{{ $errors->has('Telefono') ? 'is-invalid' : '' }}"
    value="{{ isset($empleado->Telefono) ? $empleado->Telefono : old('Telefono') }}">
{!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
<br>

<label for="Correo">{{ 'Correo' }}</label>
<input type="email" name="Correo" id="Correo" class="{{ $errors->has('Correo') ? 'is-invalid' : '' }}"
    value="{{ isset($empleado->Correo) ? $empleado->Correo : old('Correo') }}">
{!! $errors->first('Correo', '<div class="invalid-feedback">:message</div>') !!}
<br>

<label for="Edad">{{ 'Edad' }}</label>
<input type="text" name="Edad" id="Edad" class="{{ $errors->has('Edad') ? 'is-invalid' : '' }}"
    value="{{ isset($empleado->Edad) ? $empleado->Edad : old('Edad') }}">
{!! $errors->first('Edad', '<div class="invalid-feedback">:message</div>') !!}
<br>


<div class="d-inline">
    <div class="m-3">
        <button
            class="bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
            <span class="mr-2"><a href="{{ url('empleados/create') }}">Agregar empleado</a></span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentcolor" d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"></path>
            </svg>
    </div>

    <div class="m-3 d-inline">
        <button
            class="bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center"
            href="{{ url('empleados') }}">
            Regresar
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentcolor" d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"></path>
            </svg>
    </div>
</div>


{{-- <input type="submit" value="{{ $Modo == 'crear' ? 'Agregar' : 'Modificar' }}"> --}}


