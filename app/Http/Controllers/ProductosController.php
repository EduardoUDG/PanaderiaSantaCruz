<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['productos']=Productos::paginate(5);


        return view('productos.productosIndex',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('productos.productosCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // Validacion sencilla mediante laravel
        $campos=[
            'Nombre' => 'required|string|max:100',
            'Precio' => 'required|string|max:3',
            'Descripcion' => 'required|string|',
            'Foto' => 'required|max:10000|mimes:jpeg,png,jpg'
        ];
        // Mensaje de alerta formulario
        // si en el formulaio encuentra un required que no se ha insertado
        // un elemento valido, insertara el atributo del required con el texto derecho
        $Mensaje=["required"=>'El campo :attribute es requerido'];

        // Con este metodo validamos toda la informacion anterior ↑
        $this->validate($request,$campos,$Mensaje);



        $datosProducto=request()->except('_token');

        if($request->hasFile('Foto')){

            $datosProducto['Foto']=$request->file('Foto')->store('uploads','public');

        }

        Productos::insert($datosProducto);

        return redirect('productos')->with('Mensaje','Producto agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto= Productos::findOrFail($id);

        return view('productos.productosEdit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // Validacion sencilla mediante laravel
        $campos=[
            'Nombre' => 'required|string|max:100',
            'Precio' => 'required|string|max:3',
            'Descripcion' => 'required|string|',
        ];

        if($request->hasFile('Foto')){

            $campos+=['Foto' => 'required|max:10000|mimes:jpeg,png,jpg'];

        }

        // Mensaje de alerta formulario
        // si en el formulaio encuentra un required que no se ha insertado
        // un elemento valido, insertara el atributo del required con el texto derecho
        $Mensaje=["required"=>'El campo :attribute es requerido'];

        // Con este metodo validamos toda la informacion anterior ↑
        $this->validate($request,$campos,$Mensaje);


        $datosProducto=request()->except(['_token','_method']);

        if($request->hasFile('Foto')){

            $producto= Productos::findOrFail($id);

            Storage::delete('public/'.$producto->Foto);

            $datosProducto['Foto']=$request->file('Foto')->store('uploads','public');

        }

        Productos::where('id','=',$id)->update($datosProducto);


        // $empleado= Empleados::findOrFail($id);
        // return view('empleados.empleadosEdit',compact('empleado'));

        return redirect('productos')->with('Mensaje','Producto modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $producto= Productos::findOrFail($id);

        if(Storage::delete('public/'.$producto->Foto)){
            Productos::destroy($id);

        }

        return redirect('productos')->with('Mensaje','Producto Eliminado');
    }
}
