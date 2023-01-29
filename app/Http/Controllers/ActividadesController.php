<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad as Actividades;
use Illuminate\Support\Facades\Auth;

class ActividadesController extends Controller
{
    /**
     * Display a listing of the resource. (Mostrar una lista del recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Vista index()';
        $actividades = Actividades::all();
        return view('/actividades/index')->with('actividades',$actividades);
    }

    /**
     * Show the form for creating a new resource. (Muestra el formulario para crear un nuevo recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/actividades/create');
    }

    /**
     * Store a newly created resource in storage. (Almacene un recurso recién creado en el almacenamiento.)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actividades = new Actividades();
        $actividades->descripcion = $request->get('descripcion');
        // $actividades->empresa_id = Auth::user()->empresa_id;
        $actividades->save();

        return redirect('/actividades');
    }

    /**
     * Display the specified resource. ( Muestra el recurso especificado.)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource. ( Muestra el formulario para editar el recurso especificado.)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $actividad = Actividades::find($id);
         return view('/actividades/edit')->with('actividad',$actividad);
    }

    /**
     * Update the specified resource in storage. (Actualice el recurso especificado en el almacenamiento.)
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $actividad = Actividades::find($id);
        $actividad->descripcion = $request->get('descripcion');
        $actividad->save();

        return redirect('actividades');
    }

    /**
     * Remove the specified resource from storage. (Elimina el recurso especificado del almacenamiento.)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actividad = Actividades::find($id);
        $actividad->delete();

        return redirect('actividades');
    }
}
