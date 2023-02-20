<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\tiposuser as User;
use App\Models\User;
use App\Models\tiposuser;
use App\Models\Obrasocials;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
// class UserController extends Controller
{
    /**
     * Display a listing of the resource. (Mostrar una lista del recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Vista index()';
        $usuarios = User::all();
        return view('/usuarios/index')->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource. (Muestra el formulario para crear un nuevo recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposdeusuarios = tiposuser::all();
        $obrasociales = Obrasocials::all();

        return view('/usuarios/create')
            ->with('tiposdeusuarios',$tiposdeusuarios)
            ->with('obrasociales',$obrasociales);;
    }

    /**
     * Store a newly created resource in storage. (Almacene un recurso recién creado en el almacenamiento.)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = new User();
        $usuarios->name = $request->get('name');
        $hashed = Hash::make('12345678'); // save $hashed value
        $usuarios->password = $hashed;
        $usuarios->email = $request->get('email');
        $usuarios->tipouser_id = 1; // $request->get('tipouser_id');
        $usuarios->documento = $request->get('documento');
        $usuarios->telefono = $request->get('telefono');
        $usuarios->nroemergencia = $request->get('nroemergencia');
        $usuarios->obrasocial_id = 1; //$request->get('obrasocial_id');
        $usuarios->prepaga = $request->get('prepaga');

        // $usuarios->empresa_id = Auth::user()->empresa_id;
        $usuarios->save();

        return redirect('/usuarios');
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
        $tiposdeusuarios = tiposuser::all();
        $obrasociales = Obrasocials::all();

         $usuario = User::find($id);
         return view('/usuarios/edit')
            ->with('usuario',$usuario)
            ->with('tiposdeusuarios',$tiposdeusuarios)
            ->with('obrasociales',$obrasociales);
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
        $usuario = User::find($id);
        $usuario->name = $request->get('name');
        $usuario->email = $request->get('email');
        $usuario->tipouser_id = $request->get('tipouser_id');
        $usuario->documento = $request->get('documento');
        $usuario->telefono = $request->get('telefono');
        $usuario->nroemergencia = $request->get('nroemergencia');
        $usuario->obrasocial_id = $request->get('obrasocial_id');
        $usuario->prepaga = $request->get('prepaga');
        $usuario->save();

        return redirect('usuarios');
    }

    /**
     * Remove the specified resource from storage. (Elimina el recurso especificado del almacenamiento.)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();

        return redirect('usuarios');
    }
}
