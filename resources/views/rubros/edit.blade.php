@extends('rubros.principalrubro')

@section('content')
<h2>EDITAR REGISTROS</h2>

{{-- <form action="{{ route('rubros.update') }}" method="POST"> --}}
  <form action="/rubros/{{$rubro->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="rubrodescripcion" name="rubrodescripcion" type="text" class="form-control" value="{{$rubro->rubrodescripcion}}">
  </div>
  <a href="{{ route('rubros.index') }}" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
