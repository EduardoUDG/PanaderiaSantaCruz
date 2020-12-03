

@if (Session::has('Mensaje'))
<div class="alert alert-success">
    {{ Session::get('Mensaje') }}
</div>
@endif


<a href="{{ url('productos/create') }}">Agregar producto</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>N°</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($productos as $producto)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ asset('storage').'/'.$producto->Foto }}" class="img-thumbnail img-fluid" alt="" width="100">
                </td>
                <td>{{ $producto->Nombre }}</td>
                <td>{{ $producto->Precio }}</td>
                <td>{{ $producto->Descripcion }}</td>
                <td>
                    <a href="{{ url('/productos/'.$producto->id.'/edit') }}">
                        Editar
                    </a>

                    |

                {{-- Formulario para la accion eliminar --}}
                <form method="POST" action="{{ url('/productos/'.$producto->id) }}">
                    @csrf
                    @method('DELETE')

                    <button type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>
                </form>
                </td>
            </tr>
        @endforeach


    </tbody>
</table>

{{ $productos->links() }}
