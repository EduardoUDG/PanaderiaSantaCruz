<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // Recuperamos los datos de la tabla empleado (ya almacenados en BD)
        $datos['clientes'] = Clientes::paginate(5);



        return view('clientes.clientesIndex', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clientes.clientesCreate');
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
        $campos=[
            'Nombre' => 'required|string|max:50',
            'ApellidoPaterno' => 'required|string|max:50',
            'ApellidoMaterno' => 'required|string|max:50',
            'Direccion' => 'required|string|max:100',
            'Municipio' => 'required|string|max:100',
            'Telefono' => 'required|string|max:10',
            'Correo' => 'required|email',
            'Edad' => 'required|string|max:3',
        ];

        $Mensaje=["required"=>'El campo :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);

        /* Recolectamos los datos del empleado, excepto el token*/
        $datosCliente=request()->except('_token');

        /* Insertamos los datos en la BD */
        Clientes::insert($datosCliente);

        /* Una vez insertados los datos nos redireccionamos a lo siguiente*/
        return redirect('clientes')->with('Mensaje','Empleado agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // El metodo findOrFail() devuelve todos los datos del  $id
        $cliente=Clientes::findOrFail($id);

        // Nos redirecciona a la vista clientesEdit, pero ocn los
        // datos del empleado con el id que se busco
        return view('clientes.clientesEdit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'Nombre' => 'required|string|max:50',
            'ApellidoPaterno' => 'required|string|max:50',
            'ApellidoMaterno' => 'required|string|max:50',
            'Direccion' => 'required|string|max:100',
            'Municipio' => 'required|string|max:100',
            'Telefono' => 'required|string|max:10',
            'Correo' => 'required|email',
            'Edad' => 'required|string|max:3',
        ];

        $Mensaje=["required"=>'El campo :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);

        /* Recolectamos los datos del empleado, excepto el token y method*/
        $datosCliente=request()->except(['_token','_method']);


        // Actualizara los datos dependiendo el id
        // preguntando si el id es igual al id que me preguntaron o pasaron po la url
        Clientes::where('id','=',$id )->update($datosCliente);


        // Esto es opcional en caso de que se quiera redireccionar al mismo formulario e editar
        // $cliente=Clientes::findOrFail($id);
        // return view('clientes.clientesEdit',compact('empleado'));

        return redirect('clientes')->with('Mensaje','Cliente modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         /* recuperamos el id que se mando de clientesIndex y lo eliminamos */
         Clientes::destroy($id);


         /* Una vez eliminado, nos redirigiremos a la ruta /clientes */
         return redirect('clientes')->with('Mensaje','Cliente eliminado');
    }
}
