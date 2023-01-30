@extends('obrassociales.principalobrassociales')

@section('content')
<h2>EDITAR REGISTROS</h2>

{{-- <form action="{{ route('obrassociales.update') }}" method="POST"> --}}
  <form action="/obrassociales/{{$obrassocial->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$obrassocial->descripcion}}">
  </div>
  <a href="{{ route('obrassociales.index') }}" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
