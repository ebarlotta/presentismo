@extends('empresas.principalempresa')

@section('content')
<h2>EDITAR REGISTROS</h2>

  <form action="/empresas/{{$empresa->id}}" method="POST">
    @csrf    
    @method('PUT')

  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="3" value="{{$empresa->nombre}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Dirección</label>
    <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3" value="{{$empresa->nombre}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Teléfono</label>
    <input id="telefono" name="telefono" type="text" class="form-control" tabindex="3" value="{{$empresa->telefono}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Móvil</label>
    <input id="movil" name="movil" type="text" class="form-control" tabindex="3" value="{{$empresa->movil}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cuit</label>
    <input id="cuit" name="cuit" type="text" class="form-control" tabindex="3" value="{{$empresa->cuit}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo de Iva</label><br>
      <select name="tipoiva_id" id="tipoiva_id">
        @foreach($tiposdeiva as $tipodeiva)
          <option value="{{ $tipodeiva->id }}">{{ $tipodeiva->descripcion }}</option>
        @endforeach
      </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Contacto</label>
    <input id="contacto" name="contacto" type="text" class="form-control" tabindex="3" value="{{$empresa->contacto}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ubicación</label>
    <input id="ubicacion" name="ubicacion" type="text" class="form-control" tabindex="3" value="{{$empresa->ubicacion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Localidad</label>
    <input id="localidad_id" name="localidad_id" type="text" class="form-control" tabindex="3" value="{{$empresa->localidad_id}}">
  </div>
  <a href="{{ route('empresas.index') }}" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
