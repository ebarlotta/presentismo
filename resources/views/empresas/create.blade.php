@extends('empresas.principalempresa')

@section('content')
<h2>CREAR REGISTROS</h2>

<form action="{{ route('empresas.store') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Dirección</label>
    <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Teléfono</label>
    <input id="telefono" name="telefono" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Móvil</label>
    <input id="movil" name="movil" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cuit</label>
    <input id="cuit" name="cuit" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo de Iva</label>
    <input id="tipoiva_id" name="tipoiva_id" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Contacto</label>
    <input id="contacto" name="contacto" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ubicación</label>
    <input id="ubicacion" name="ubicacion" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Localidad</label>
    <input id="localidad_id" name="localidad_id" type="text" class="form-control" tabindex="3">
  </div>

  <a href="{{ route('empresas.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection
