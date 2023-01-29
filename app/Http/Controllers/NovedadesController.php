<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novedad as Novedades;
use Illuminate\Support\Facades\Auth;

class NovedadesController extends Controller
{
    /**
     * Display a listing of the resource. (Mostrar una lista del recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Vista index()';
        $novedades = Novedades::all();
        return view('/novedades/index')->with('novedades',$novedades);
    }

    /**
     * Show the form for creating a new resource. (Muestra el formulario para crear un nuevo recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/novedades/create');
    }

    /**
     * Store a newly created resource in storage. (Almacene un recurso recién creado en el almacenamiento.)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $novedades = new Novedades();
        $novedades->descripcion = $request->get('descripcion');
        // $novedades->empresa_id = Auth::user()->empresa_id;
        $novedades->save();

        return redirect('/novedades');
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
         $novedad = Novedades::find($id);
         return view('/novedades/edit')->with('novedad',$novedad);
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
        $novedad = Novedades::find($id);
        $novedad->descripcion = $request->get('descripcion');
        $novedad->save();

        return redirect('novedades');
    }

    /**
     * Remove the specified resource from storage. (Elimina el recurso especificado del almacenamiento.)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $novedad = Novedades::find($id);
        $novedad->delete();

        return redirect('novedades');
    }
}
