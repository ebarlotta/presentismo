@extends('actividades.principalasistencia')

@section('content')
<h2>CREAR REGISTROS</h2>

<form action="{{ route('actividades.store') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="Fecha" name="Fecha" type="text" class="form-control" tabindex="0" disabled value="{{ date("dd-mm-AAAA")}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Empresa</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Obra</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
  </div>

  <a href="{{ route('actividades.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection
