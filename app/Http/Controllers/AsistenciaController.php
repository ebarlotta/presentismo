<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Asistencia;
use App\Models\empresa;
use App\Models\Obra;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AsistenciaController extends Controller
{
    public $metodo = 0;

    public function index()
    {
        //return 'Vista index()';
        // $acciones = Acciones::all();
        $obras = Obra::all();
        $empresas = empresa::all();
        return view('/asistencia/index')
            ->with('obras',$obras)
            ->with('empresas',$empresas)
            ->with('metodo',$this->metodo);
    }

    public function store(Request $request)
    {
        $asistencia = new Asistencia();
        // dd($request->get('Fecha'));
        // $acciones->Fecha = $request->get('Fecha');
        $asistencia->entrada = now();
        $asistencia->obra_id = $request->get('obra_id');
        $asistencia->empresa_id = $request->get('empresa_id');
        $asistencia->user_id = Auth::user()->id;
        $asistencia->save();

        return redirect('/asistencia');
    }

    public function show()
    {
        $asistencias = Asistencia::all();
        // dd($asistencias);
        return view('/asistencia/validarasistencia')
            ->with('asistencias',$asistencias);
    }

    public function update($id)
    {
        $asistencias = Asistencia::find($id);
        $asistencias->salida = now();
        $asistencias->validada = !$asistencias->validada;
        $asistencias->save();
        $asistencias = Asistencia::all();
        return view('/asistencia/validarasistencia')
            ->with('asistencias',$asistencias);
    }

    public function validarasistencia($id) {
        $asistencia = Asistencia::find($id);
        $actividades = Actividad::all();
        // dd($asistencia);
        return view('/asistencia/add_actividad_asistencia')
            ->with('actividades',$actividades)
            ->with('codigo',$id);
    }

    public function agregaraccion(Request $request,$id){
        // dd($request->actividad_id);
        $asistencias = Asistencia::find($id);
        $asistencias->acciones_id = $request->actividad_id;
        $asistencias->salida = now();
        $asistencias->validada = 1;
        $asistencias->save();
        // dd('Accion:'. $asistencias->accion_id . 'Codigo' . $id);
        return redirect('asistencia/show'); //"Hello con $request->actividad_id";
    }
}
