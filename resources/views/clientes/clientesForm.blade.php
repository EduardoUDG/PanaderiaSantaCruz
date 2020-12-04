@extends('layouts.plantilla')

@section('title', 'Clientes form')

@section('content')

{{ $Modo =='crear' ?  'Agregar cliente' : 'Modificar cliente'}}


<label for="Nombre">{{ 'Nombre' }}</label>
<input type="text" name="Nombre" id="Nombre" class="{{ $errors->has('Nombre')?'is-invalid':'' }}"
value="{{ isset($cliente->Nombre)?$cliente->Nombre : old('Nombre') }}">
{!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}
<br>

<label for="ApellidoPaterno">{{ 'Apellido Paterno' }}</label>
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno" class="{{ $errors->has('ApellidoPaterno')?'is-invalid':'' }}"
value="{{ isset($cliente->ApellidoPaterno)?$cliente->ApellidoPaterno : old('ApellidoPaterno') }}">
{!! $errors->first('ApellidoPaterno','<div class="invalid-feedback">:message</div>') !!}
<br>

<label for="ApellidoMaterno">{{ 'Apellido Materno' }}</label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" class="{{ $errors->has('ApellidoMaterno')?'is-invalid':'' }}"
value="{{ isset($cliente->ApellidoMaterno)?$cliente->ApellidoMaterno : old('ApellidoMaterno') }}">
{!! $errors->first('ApellidoMaterno','<div class="invalid-feedback">:message</div>') !!}
<br>

<label for="Direccion">{{ 'Direccion' }}</label>
<input type="text" name="Direccion" id="Direccion" class="{{ $errors->has('Direccion')?'is-invalid':'' }}"
value="{{ isset($cliente->Direccion)?$cliente->Direccion : old('Direccion') }}">
{!! $errors->first('Direccion','<div class="invalid-feedback">:message</div>') !!}
<br>

<label for="Municipio">{{ 'Municipio' }}</label>
<input type="text" name="Municipio" id="Municipio" class="{{ $errors->has('Municipio')?'is-invalid':'' }}"
value="{{ isset($cliente->Municipio)?$cliente->Municipio : old('Municipio') }}">
{!! $errors->first('Municipio','<div class="invalid-feedback">:message</div>') !!}
<br>

<label for="Telefono">{{ 'Telefono' }}</label>
<input type="text" name="Telefono" id="Telefono" class="{{ $errors->has('Telefono')?'is-invalid':'' }}"
value="{{ isset($cliente->Telefono)?$cliente->Telefono : old('Telefono') }}">
{!! $errors->first('Telefono','<div class="invalid-feedback">:message</div>') !!}
<br>

<label for="Correo">{{ 'Correo' }}</label>
<input type="email" name="Correo" id="Correo" class="{{ $errors->has('Correo')?'is-invalid':'' }}"
value="{{ isset($cliente->Correo)?$cliente->Correo : old('Correo') }}">
{!! $errors->first('Correo','<div class="invalid-feedback">:message</div>') !!}
<br>

<label for="Edad">{{ 'Edad' }}</label>
<input type="text" name="Edad" id="Edad" class="{{ $errors->has('Edad')?'is-invalid':'' }}"
value="{{ isset($cliente->Edad)?$cliente->Edad : old('Edad') }}">
{!! $errors->first('Edad','<div class="invalid-feedback">:message</div>') !!}
<br>

<input type="submit" value="{{ $Modo =='crear' ?  'Agregar' : 'Modificar'}}">


<a href="{{ url('clientes') }}">Regresar</a>

@endsection
