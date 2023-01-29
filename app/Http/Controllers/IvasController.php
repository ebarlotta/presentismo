<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipoiva as Ivas;
use Illuminate\Support\Facades\Auth;

class IvasController extends Controller
{
    /**
     * Display a listing of the resource. (Mostrar una lista del recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Vista index()';
        $ivas = Ivas::all();
        return view('/ivas/index')->with('ivas',$ivas);
    }

    /**
     * Show the form for creating a new resource. (Muestra el formulario para crear un nuevo recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/ivas/create');
    }

    /**
     * Store a newly created resource in storage. (Almacene un recurso recién creado en el almacenamiento.)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ivas = new Ivas();
        $ivas->descripcion = $request->get('descripcion');
        // $ivas->empresa_id = Auth::user()->empresa_id;
        $ivas->save();

        return redirect('/ivas');
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
         $iva = Ivas::find($id);
         return view('/ivas/edit')->with('iva',$iva);
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
        $iva = Ivas::find($id);
        $iva->descripcion = $request->get('descripcion');
        $iva->save();

        return redirect('ivas');
    }

    /**
     * Remove the specified resource from storage. (Elimina el recurso especificado del almacenamiento.)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iva = Ivas::find($id);
        $iva->delete();

        return redirect('ivas');
    }
}
