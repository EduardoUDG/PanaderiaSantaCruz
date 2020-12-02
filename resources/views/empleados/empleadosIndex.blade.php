

@if (Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif


<a href="{{ url('empleados/create') }}">Agregar empleado</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>N°</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Direccion</th>
            <th>Municipio</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($empleados as $empleado)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $empleado->Nombre }}</td>
                <td>{{ $empleado->ApellidoPaterno }}</td>
                <td>{{ $empleado->ApellidoMaterno }}</td>
                <td>{{ $empleado->Direccion }}</td>
                <td>{{ $empleado->Municipio }}</td>
                <td>{{ $empleado->Telefono }}</td>
                <td>{{ $empleado->Correo }}</td>
                <td>
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
