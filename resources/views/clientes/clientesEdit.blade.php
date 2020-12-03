
<form action="{{ url('/clientes/'.$cliente->id) }}" method="POST">

    @csrf
    @method('PATCH')

    @include('clientes.clientesForm', ['Modo'=>'editar'])

</form>
