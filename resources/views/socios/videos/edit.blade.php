@extends('socios.principalsocio')

@section('content')
<h2>EDITAR REGISTROS</h2>

{{-- <form action="{{ route('socios.update') }}" method="POST"> --}}
  <form action="/socios/{{$video->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Título</label>
    <input id="titulo" name="titulo" type="text" class="form-control" value="{{$video->titulo}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Epígrafe</label>
    <input id="epigrafe" name="epigrafe" type="text" class="form-control" value="{{$video->epigrafe}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Url</label>
    <input id="url" name="url" type="text" class="form-control" value="{{$video->url}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Orden</label>
    <input id="orden" name="orden" type="number" class="form-control" value="{{$video->orden}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="number" step="any" class="form-control" value="{{$video->descripcion}}">
  </div>
  <a href="{{ route('socios.index') }}" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
