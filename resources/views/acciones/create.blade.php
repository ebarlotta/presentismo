@extends('acciones.principalaccion')

@section('content')
<h2>CREAR REGISTROS</h2>

<form action="{{ route('acciones.store') }}" method="POST">
    @csrf
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
    <select name="empresa_id" id="empresa_id" tabindex="1">
      @foreach($empresas as $empresa)
          <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tarea</label>
    <input id="tarea" name="tarea" type="text" class="form-control">
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
    <input id="fotourl" name="fotourl" type="text" class="form-control" tabindex="6">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Avance</label>
    <input id="avance" name="avance" type="text" class="form-control" tabindex="5">
  </div>

  <a href="{{ route('acciones.index') }}" class="btn btn-secondary" tabindex="7">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection
