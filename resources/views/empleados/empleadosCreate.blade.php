Seccuion para crear empleados


@if (count($errors)>0)
<div class="alert">
    <ul>
        @foreach ($errors->all() as $error)
            <li>*{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<form action="{{ url('/empleados') }}" method="POST">
    @csrf

    @include('empleados.empleadosForm', ['Modo'=>'crear'])

</form>
