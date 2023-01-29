<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource. (Mostrar una lista del recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Vista index()';
        $empresas = empresa::all();
        return view('/empresas/index')->with('empresas',$empresas);
    }

    /**
     * Show the form for creating a new resource. (Muestra el formulario para crear un nuevo recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/empresas/create');
    }

    /**
     * Store a newly created resource in storage. (Almacene un recurso recién creado en el almacenamiento.)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresas = new empresa();
        $empresas->nombre = $request->get('nombre');
        $empresas->direccion = $request->get('direccion');
        $empresas->telefono = $request->get('telefono');
        $empresas->movil = $request->get('movil');
        $empresas->cuit = $request->get('cuit');
        $empresas->tipoiva_id = $request->get('tipoiva_id');
        $empresas->contacto = $request->get('contacto');
        $empresas->ubicacion = $request->get('ubicacion');
        $empresas->localidad_id = $request->get('localidad_id');
        // $empresas->empresa_id = Auth::user()->empresa_id;
        $empresas->save();

        return redirect('/empresas');
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
         $empresa = empresa::find($id);
         return view('/empresas/edit')->with('empresa',$empresa);
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
        $empresa = empresa::find($id);

        $empresa->nombre = $request->get('nombre');
        $empresa->direccion = $request->get('direccion');
        $empresa->telefono = $request->get('telefono');
        $empresa->movil = $request->get('movil');
        $empresa->cuit = $request->get('cuit');
        $empresa->tipoiva_id = $request->get('tipoiva_id');
        $empresa->contacto = $request->get('contacto');
        $empresa->ubicacion = $request->get('ubicacion');
        $empresa->localidad_id = $request->get('localidad_id');

        $empresa->save();

        return redirect('empresas');
    }

    /**
     * Remove the specified resource from storage. (Elimina el recurso especificado del almacenamiento.)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa = empresa::find($id);
        $empresa->delete();

        return redirect('empresas');
    }
}
