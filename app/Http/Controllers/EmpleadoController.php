<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['empleados'] = Empleado::paginate(5);

        return view('empleado.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $campos = [
            'User' => 'required|string|max:100',
            // 'Status' => 'required|integer',
            'Rol' => 'required|string|max:100',
            'Status' => 'required|numeric|min:0|not_in:0',
        ];

        $mensaje = [
            'required' => 'El :attribute es obligatorio'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosEmpleado = request()->except('_token');
        Empleado::insert($datosEmpleado);

        return redirect('empleado')->with('mensaje', 'Empleado agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosEmpleado = request()->except('_token', '_method');
        Empleado::where('id', '=', $id)->update($datosEmpleado);

        $empleado = Empleado::findOrFail($id);
        // return view('empleado.edit', compact('empleado'));
        return redirect('empleado')->with('mensaje', 'Empleado Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Empleado::destroy($id);
        //return redirect('empleado');
        return redirect('empleado')->with('mensaje', 'Empleado borrado con éxito ');
    }
}
