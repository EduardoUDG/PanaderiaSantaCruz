
<form action="{{ url('/productos/'.$producto->id) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PATCH')

    @include('productos.productosForm', ['Modo'=>'editar'])

</form>
