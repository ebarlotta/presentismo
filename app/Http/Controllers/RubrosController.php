<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rubro as Rubros;
use Illuminate\Support\Facades\Auth;

class RubrosController extends Controller
{
    /**
     * Display a listing of the resource. (Mostrar una lista del recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Vista index()';
        $rubros = Rubros::all();
        return view('/rubros/index')->with('rubros',$rubros);
    }

    /**
     * Show the form for creating a new resource. (Muestra el formulario para crear un nuevo recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/rubros/create');
    }

    /**
     * Store a newly created resource in storage. (Almacene un recurso recién creado en el almacenamiento.)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rubros = new Rubros();
        $rubros->rubrodescripcion = $request->get('rubrodescripcion');
        // $rubros->empresa_id = Auth::user()->empresa_id;
        $rubros->save();

        return redirect('/rubros');
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
         $rubro = Rubros::find($id);
         return view('/rubros/edit')->with('rubro',$rubro);
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
        $rubro = Rubros::find($id);
        $rubro->rubrodescripcion = $request->get('rubrodescripcion');
        $rubro->save();

        return redirect('rubros');
    }

    /**
     * Remove the specified resource from storage. (Elimina el recurso especificado del almacenamiento.)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rubro = Rubros::find($id);
        $rubro->delete();

        return redirect('rubros');
    }
}
