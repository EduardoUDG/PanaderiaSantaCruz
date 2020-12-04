@extends('layouts.plantilla')

@section('title', 'Productos edit')

@section('content')

@if (count($errors)>0)
<div class="alert">
    <ul>
        @foreach ($errors->all() as $error)
            <li>*{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

Seccion para crear productos
<form action="{{ url('/productos') }}" method="POST" enctype="multipart/form-data">
    @csrf

    @include('productos.productosForm', ['Modo'=>'crear'])

</form>


@endsection
