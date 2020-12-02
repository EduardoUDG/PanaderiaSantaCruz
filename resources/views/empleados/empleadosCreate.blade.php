Seccuion para crear empleados


<form action="{{ url('/empleados') }}" method="POST">
    @csrf

    @include('empleados.empleadosForm', ['Modo'=>'crear'])

</form>
