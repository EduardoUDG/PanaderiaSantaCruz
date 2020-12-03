

@if (Session::has('Mensaje'))
<div class="alert alert-success">
    {{ Session::get('Mensaje') }}
</div>
@endif


<a href="{{ url('clientes/create') }}">Agregar cliente</a>

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

        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $cliente->Nombre }}</td>
                <td>{{ $cliente->ApellidoPaterno }}</td>
                <td>{{ $cliente->ApellidoMaterno }}</td>
                <td>{{ $cliente->Direccion }}</td>
                <td>{{ $cliente->Municipio }}</td>
                <td>{{ $cliente->Telefono }}</td>
                <td>{{ $cliente->Correo }}</td>
                <td>
                    <a href="{{ url('/clientes/'.$cliente->id.'/edit') }}">
                        Editar
                    </a>

                    |

                {{-- Formulario para la accion eliminar --}}
                <form method="POST" action="{{ url('/clientes/'.$cliente->id) }}">
                    @csrf
                    @method('DELETE')

                    <button type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>
                </form>
                </td>
            </tr>
        @endforeach


    </tbody>
</table>

{{ $clientes->links() }}
