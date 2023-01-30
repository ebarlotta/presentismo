@extends('usuarios.principalusuario')

@section('content')
<h2>CREAR REGISTROS</h2>

<form action="{{ route('usuarios.store') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="name" name="name" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input id="email" name="email" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo de Usuario</label><br>
    <select name="tipouser_id" id="tipouser_id">
      <option value="">-</option>
        @foreach($tiposdeusuarios as $tipouser)
          <option value="{{ $tipouser->id }}">{{ $tipouser->descripcion }}</option>
        @endforeach
      </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Documento</label>
    <input id="documento" name="documento" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Teléfono</label>
    <input id="telefono" name="telefono" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Número de emergencia</label>
    <input id="nroemergencia" name="nroemergencia" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Obra social</label><br>
    <select name="obrasocial_id" id="obrasocial_id">
      <option value="">-</option>
        @foreach($obrasociales as $obrasocial)
          <option value="{{ $obrasocial->id }}">{{ $obrasocial->descripcion }}</option>
        @endforeach
      </select>
  <div class="mb-3">
    <label for="" class="form-label">Prepaga</label>
    <input id="prepaga" name="prepaga" type="text" class="form-control" tabindex="3">
  </div>

  <a href="{{ route('usuarios.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection
