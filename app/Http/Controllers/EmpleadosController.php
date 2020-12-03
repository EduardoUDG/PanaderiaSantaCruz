<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
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
        $datos['empleados'] = Empleados::paginate(5);



        return view('empleados.empleadosIndex', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleados.empleadosCreate');
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
        $datosEmpleado=request()->except('_token');

        /* Insertamos los datos en la BD */
        Empleados::insert($datosEmpleado);

        /* Una vez insertados los datos nos redireccionamos a lo siguiente*/
        return redirect('empleados')->with('Mensaje','Empleado agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // El metodo findOrFail() devuelve todos los datos del  $id
        $empleado=Empleados::findOrFail($id);

        // Nos redirecciona a la vista empleadosEdit, pero ocn los
        // datos del empleado con el id que se busco
        return view('empleados.empleadosEdit',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        /* Recolectamos los datos del empleado, excepto el token y method*/
        $datosEmpleado=request()->except(['_token','_method']);


        // Actualizara los datos dependiendo el id
        // preguntando si el id es igual al id que me preguntaron o pasaron po la url
        Empleados::where('id','=',$id )->update($datosEmpleado);


        // Esto es opcional en caso de que se quiera redireccionar al mismo formulario e editar
        // $empleado=Empleados::findOrFail($id);
        // return view('empleados.empleadosEdit',compact('empleado'));

        return redirect('empleados')->with('Mensaje','Empleado modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        /* recuperamos el id que se mando de empleadosIndex y lo eliminamos */
        Empleados::destroy($id);


        /* Una vez eliminado, nos redirigiremos a la ruta /empleados */
        return redirect('empleados')->with('Mensaje','Empleado eliminado');
    }
}
