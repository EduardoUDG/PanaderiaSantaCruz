
<form action="{{ url('/empleados/'.$empleado->id) }}" method="POST">

    @csrf
    @method('PATCH')

    @include('empleados.empleadosForm', ['Modo'=>'editar'])

</form>
