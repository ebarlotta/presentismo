<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tiposuser as Tiposusuarios;
use Illuminate\Support\Facades\Auth;

class TiposusuariosController extends Controller
{
    /**
     * Display a listing of the resource. (Mostrar una lista del recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Vista index()';
        $tiposusuarios = Tiposusuarios::all();
        return view('/tiposusuarios/index')->with('tiposusuarios',$tiposusuarios);
    }

    /**
     * Show the form for creating a new resource. (Muestra el formulario para crear un nuevo recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/tiposusuarios/create');
    }

    /**
     * Store a newly created resource in storage. (Almacene un recurso recién creado en el almacenamiento.)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tiposusuarios = new Tiposusuarios();
        $tiposusuarios->descripcion = $request->get('descripcion');
        // $tiposusuarios->empresa_id = Auth::user()->empresa_id;
        $tiposusuarios->save();

        return redirect('/tiposusuarios');
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
         $tiposusuario = Tiposusuarios::find($id);
         return view('/tiposusuarios/edit')->with('tiposusuario',$tiposusuario);
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
        $tiposusuario = Tiposusuarios::find($id);
        $tiposusuario->descripcion = $request->get('descripcion');
        $tiposusuario->save();

        return redirect('tiposusuarios');
    }

    /**
     * Remove the specified resource from storage. (Elimina el recurso especificado del almacenamiento.)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tiposusuario = Tiposusuarios::find($id);
        $tiposusuario->delete();

        return redirect('tiposusuarios');
    }
}
