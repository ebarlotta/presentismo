@extends('acciones.principalaccion')

@section('content')
<h2>EDITAR REGISTROS</h2>

{{-- <form action="{{ route('obras.update') }}" method="POST"> --}}
  <form action="/obras/{{$obra->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$obra->nombre}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Dirección</label>
    <input id="direccion" name="direccion" type="text" class="form-control" value="{{$obra->direccion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ubicación GPS</label>
    <input id="ubicaciongps" name="ubicaciongps" type="text" class="form-control" value="{{$obra->ubicaciongps}}">
  </div>
  <a href="{{ route('obras.index') }}" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
