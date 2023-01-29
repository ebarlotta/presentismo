<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obra as Obras;
use Illuminate\Support\Facades\Auth;

class ObrasController extends Controller
{
    /**
     * Display a listing of the resource. (Mostrar una lista del recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Vista index()';
        $obras = Obras::all();
        return view('/obras/index')->with('obras',$obras);
    }

    /**
     * Show the form for creating a new resource. (Muestra el formulario para crear un nuevo recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/obras/create');
    }

    /**
     * Store a newly created resource in storage. (Almacene un recurso recién creado en el almacenamiento.)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obras = new Obras();
        $obras->nombre = $request->get('nombre');
        $obras->direccion = $request->get('direccion');
        $obras->ubicaciongps = $request->get('ubicaciongps');
        // $obras->empresa_id = Auth::user()->empresa_id;
        $obras->save();

        return redirect('/obras');
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
         $obra = Obras::find($id);
         return view('/obras/edit')->with('obra',$obra);
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
        $obra = Obras::find($id);
        $obra->nombre = $request->get('nombre');
        $obra->direccion = $request->get('direccion');
        $obra->ubicaciongps = $request->get('ubicaciongps');
        $obra->save();

        return redirect('obras');
    }

    /**
     * Remove the specified resource from storage. (Elimina el recurso especificado del almacenamiento.)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obra = Obras::find($id);
        $obra->delete();

        return redirect('obras');
    }
}
