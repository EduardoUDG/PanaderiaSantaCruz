@extends('layouts.plantilla')

@section('title', 'Productos edit')

@section('content')

    <form action="{{ url('/productos/' . $producto->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PATCH')

        @include('productos.productosForm', ['Modo'=>'editar'])

    </form>

@endsection
