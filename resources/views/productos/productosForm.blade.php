@extends('layouts.plantilla')

@section('title', 'Productos form')

@section('content')

{{ $Modo =='crear' ?  'Agregar producto' : 'Modificar producto'}}


<label for="Nombre">{{ 'Nombre' }}</label>
<input type="text" name="Nombre" id="Nombre" class="{{ $errors->has('Nombre')?'is-invalid':'' }}"
value="{{ isset($producto->Nombre)?$producto->Nombre : old('Nombre') }}">
{!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}
<br>

<label for="Precio">{{ 'Precio' }}</label>
<input type="text" name="Precio" id="Precio" class="{{ $errors->has('Precio')?'is-invalid':'' }}"
value="{{ isset($producto->Precio)?$producto->Precio : old('Precio') }}">
{!! $errors->first('Precio','<div class="invalid-feedback">:message</div>') !!}
<br>

<label for="Descripcion">{{ 'Descripcion' }}</label>
<input type="text" name="Descripcion" id="Descripcion" class="{{ $errors->has('Descripcion')?'is-invalid':'' }}"
value="{{ isset($producto->Descripcion)?$producto->Descripcion : old('Descripcion') }}">
{!! $errors->first('Descripcion','<div class="invalid-feedback">:message</div>') !!}
<br>


<label for="Foto">{{ 'Foto' }}</label>
@if (isset($producto->Foto))
<br/>
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$producto->Foto }}" alt="" width="100">
<br/>
@endif
<input type="file" class="{{ $errors->has('Foto')?'is-invalid':'' }}" name="Foto" id="Foto" value="">
{!! $errors->first('Foto','<div class="invalid-feedback">:message</div>') !!}
<br>


<input type="submit" value="{{ $Modo =='crear' ?  'Agregar' : 'Modificar'}}">


<a href="{{ url('productos') }}">Regresar</a>

@endsection
