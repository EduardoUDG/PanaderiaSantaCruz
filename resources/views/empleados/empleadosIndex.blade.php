@extends('layouts.plantilla')


@section('title', 'Empleados')

@section('content')

@if (Session::has('Mensaje'))
<div class="alert alert-success">
    {{ Session::get('Mensaje') }}
</div>
@endif


<a href="{{ url('empleados/create') }}">Agregar empleado</a>

<div class="container">
<h1 class="mb-8"> Empleados registrados :) </h1>
<table class="text-left w-full">
    <thead class="bg-black flex text-white w-full">
        <tr class="flex w-full mb-4">
            <th class="p-4 w-1/4">N°</th>
            <th class="p-4 w-1/4">Nombre</th>
            <th class="p-4 w-1/4">Apellido Paterno</th>
            <th class="p-4 w-1/4">Apellido Materno</th>
            <th class="p-4 w-1/4">Direccion</th>
            <th class="p-4 w-1/4">Municipio</th>
            <th class="p-4 w-1/4">Telefono</th>
            <th class="p-4 w-1/4">Correo</th>
            <th class="p-4 w-1/4">Acciones</th>
        </tr>
    </thead>
    <tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full" style="height: 50vh;">

        @foreach ($empleados as $empleado)
            <tr class="flex w-full mb-4">
                <td class="p-4 w-1/4">{{ $loop->iteration }}</td>
                <td class="p-4 w-1/4">{{ $empleado->Nombre }}</td>
                <td class="p-4 w-1/4">{{ $empleado->ApellidoPaterno }}</td>
                <td class="p-4 w-1/4">{{ $empleado->ApellidoMaterno }}</td>
                <td class="p-4 w-1/4">{{ $empleado->Direccion }}</td>
                <td class="p-4 w-1/4">{{ $empleado->Municipio }}</td>
                <td class="p-4 w-1/4">{{ $empleado->Telefono }}</td>
                <td class="p-4 w-1/4">{{ $empleado->Correo }}</td>
                <td class="p-4 w-1/4">
                    <a href="{{ url('/empleados/'.$empleado->id.'/edit') }}">
                        Editar
                    </a>

                    |

                {{-- Formulario para la accion eliminar --}}
                <form method="POST" action="{{ url('/empleados/'.$empleado->id) }}">
                    @csrf
                    @method('DELETE')

                    <button type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>
                </form>
                </td>
            </tr>
        @endforeach


    </tbody>
</table>
</div>

{{ $empleados->links() }}

@endsection


