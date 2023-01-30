<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obrasocials as Obrassociales;
use Illuminate\Support\Facades\Auth;

class ObrassocialesController extends Controller
{
    /**
     * Display a listing of the resource. (Mostrar una lista del recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Vista index()';
        $obrassociales = Obrassociales::all();
        return view('/obrassociales/index')->with('obrassociales',$obrassociales);
    }

    /**
     * Show the form for creating a new resource. (Muestra el formulario para crear un nuevo recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/obrassociales/create');
    }

    /**
     * Store a newly created resource in storage. (Almacene un recurso recién creado en el almacenamiento.)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obrassociales = new Obrassociales();
        $obrassociales->descripcion = $request->get('descripcion');
        // $obrassociales->empresa_id = Auth::user()->empresa_id;
        $obrassociales->save();

        return redirect('/obrassociales');
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
         $obrassocial = Obrassociales::find($id);
         return view('/obrassociales/edit')->with('obrassocial',$obrassocial);
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
        $obrassocial = Obrassociales::find($id);
        $obrassocial->descripcion = $request->get('descripcion');
        $obrassocial->save();

        return redirect('obrassociales');
    }

    /**
     * Remove the specified resource from storage. (Elimina el recurso especificado del almacenamiento.)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obrassocial = Obrassociales::find($id);
        $obrassocial->delete();

        return redirect('obrassociales');
    }
}
