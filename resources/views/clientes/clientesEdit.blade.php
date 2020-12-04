@extends('layouts.plantilla')

@section('title', 'Clientes edit')

@section('content')

<form action="{{ url('/clientes/'.$cliente->id) }}" method="POST">

    @csrf
    @method('PATCH')

    @include('clientes.clientesForm', ['Modo'=>'editar'])

</form>


@endsection
