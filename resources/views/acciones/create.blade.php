@extends('acciones.principalaccion')

@section('content')
<h2>CREAR REGISTROS</h2>

<form action="{{ route('acciones.store') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Actividad</label>
    <input id="actividad_id" name="actividad_id" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Obra</label>
    <input id="obra_id" name="obra_id" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Empresa</label>
    <input id="empresa_id" name="empresa_id" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tarea</label>
    <input id="tarea_id" name="tarea_id" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Novedad</label>
    <input id="novedad_id" name="novedad_id" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Avance</label>
    <input id="avance" name="avance" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Foto</label>
    <input id="fotourl" name="fotourl" type="text" class="form-control" tabindex="3">
  </div>

  <a href="{{ route('acciones.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection
