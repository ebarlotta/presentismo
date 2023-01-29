<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sociovideo as Video;
use Illuminate\Support\Facades\Auth;

class SociosVideoController extends Controller
{
    /**
     * Display a listing of the resource. (Mostrar una lista del recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Vista index()';
        $videos = Video::all();
        return view('/socios/videos.index')->with('videos',$videos);
    }

    /**
     * Show the form for creating a new resource. (Muestra el formulario para crear un nuevo recurso.)
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/socios/videos.create');
    }

    /**
     * Store a newly created resource in storage. (Almacene un recurso recién creado en el almacenamiento.)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $videos = new Video();
        $videos->titulo = $request->get('titulo');
        $videos->epigrafe = $request->get('epigrafe');
        $videos->url = $request->get('url');
        $videos->orden = $request->get('orden');
        $videos->descripcion = $request->get('descripcion');
        $videos->empresa_id = Auth::user()->empresa_id;
        //dd(Auth::user());
        //dd($videos->empresa_id);
        $videos->save();

        return redirect('/videos.index');
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
         $video = Video::find($id);
         return view('/socios/videos/edit')->with('video',$video);
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
        $video = Video::find($id);
        $video->titulo = $request->get('titulo');
        $video->epigrafe = $request->get('epigrafe');
        $video->url = $request->get('url');
        $video->orden = $request->get('orden');
        $video->descripcion = $request->get('descripcion');
        $video->save();

        return redirect('socios');
    }

    /**
     * Remove the specified resource from storage. (Elimina el recurso especificado del almacenamiento.)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::find($id);
        $video->delete();

        return redirect('socios');
    }
}
