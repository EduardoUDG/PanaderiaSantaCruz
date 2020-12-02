Inicion (Despliegue de datos)

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
                <td>Editar | Borrar</td>
            </tr>
        @endforeach
    </tbody>
</table>

