@extends('tiposusuarios.principaltiposusuarios')

@section('content')
<h2>EDITAR REGISTROS</h2>

{{-- <form action="{{ route('tiposusuarios.update') }}" method="POST"> --}}
  <form action="/tiposusuarios/{{$tiposusuario->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$tiposusuario->descripcion}}">
  </div>
  <a href="{{ route('tiposusuarios.index') }}" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
