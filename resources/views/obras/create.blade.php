@extends('obras.principalobra')

@section('content')
<h2>CREAR REGISTROS</h2>

<form action="{{ route('obras.store') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre de la Obra</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Dirección</label>
    <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ucicación GPS</label>
    <input id="ubicaciongps" name="ubicaciongps" type="text" class="form-control" tabindex="3">
  </div>

  <a href="{{ route('obras.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection
