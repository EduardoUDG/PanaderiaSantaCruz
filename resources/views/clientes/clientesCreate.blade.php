@extends('layouts.plantilla')

@section('title', 'Clientes create')

@section('content')
Seccion para crear clientes


@if (count($errors)>0)
<div class="alert">
    <ul>
        @foreach ($errors->all() as $error)
            <li>*{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<form action="{{ url('/clientes') }}" method="POST">
    @csrf

    @include('clientes.clientesForm', ['Modo'=>'crear'])

</form>


@endsection
