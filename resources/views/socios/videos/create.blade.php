@extends('socios.principalsocio')

@section('content')
<h2>CREAR REGISTROS</h2>

<form action="{{ route('socios.store') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Título</label>
    <input id="titulo" name="titulo" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Epígrafe</label>
    <input id="epigrafe" name="epigrafe" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Url</label>
    <input id="url" name="url" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Orden</label>
    <input id="orden" name="orden" type="number" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="number" step="any" value="0.00" class="form-control" tabindex="3">
  </div>
  <a href="{{ route('socios.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection
