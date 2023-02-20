@extends('acciones.principalaccion')

@section('content')
<h2>EDITAR REGISTROS</h2>

{{-- <form action="{{ route('acciones.update') }}" method="POST"> --}}
  <form action="/acciones/{{$accion->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Actividad</label><br>
    <select name="actividad_id" id="actividad_id">
      @foreach($actividades as $actividad)
        <option value="{{$actividad->id}}">{{$actividad->descripcion}}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Obra</label><br>
    <select name="obra_id" id="obra_id">
      @foreach($obras as $obra)
        <option value="{{$obra->id}}">{{$obra->nombre}}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Empresa</label><br>
    <select name="empresa_id" id="empresa_id">
      @foreach($empresas as $empresa)
        <option value="{{$empresa->id}}">{{$empresa->nombre}}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tarea</label>
    <input id="tarea" name="tarea" type="text" class="form-control" value="{{$accion->tarea}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Novedad</label><br>
    <select name="novedad_id" id="novedad_id">
      @foreach($novedades as $novedad)
        <option value="{{$novedad->id}}">{{$novedad->descripcion}}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Foto</label>
    <input id="fotourl" name="fotourl" type="text" class="form-control" value="{{$accion->fotourl}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Avance</label>
    <input id="avance" name="avance" type="text" class="form-control" value="{{$accion->avance}}">
  </div>
  <a href="{{ route('acciones.index') }}" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
