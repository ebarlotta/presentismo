@extends('usuarios.principalusuario')

@section('content')
<h2>EDITAR REGISTROS</h2>

{{-- <form action="{{ route('usuarios.update') }}" method="POST"> --}}
  <form action="/usuarios/{{$usuario->id}}" method="POST">
    @csrf    
    @method('PUT')

    <div class="mb-3">
      <label for="" class="form-label">Nombre</label>
      <input id="name" name="name" type="text" class="form-control" tabindex="3" value="{{$usuario->name}}">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Email</label>
      <input id="email" name="email" type="text" class="form-control" tabindex="3" value="{{$usuario->email}}">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Tipo de Usuario</label><br>
      <select name="tipouser_id" id="tipouser_id">
        @foreach($tiposdeusuarios as $tipouser)
          <option value="{{ $tipouser->id }}">{{ $tipouser->descripcion }}</option>
        @endforeach
      </select>
      <!-- <input id="tipouser_id" name="tipouser_id" type="text" class="form-control" tabindex="3" value="{{$usuario->tipouser_id}}"> -->
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Documento</label>
      <input id="documento" name="documento" type="text" class="form-control" tabindex="3" value="{{$usuario->documento}}">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Teléfono</label>
      <input id="telefono" name="telefono" type="text" class="form-control" tabindex="3" value="{{$usuario->telefono}}">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Número de emergencia</label>
      <input id="nroemergencia" name="nroemergencia" type="text" class="form-control" tabindex="3" value="{{$usuario->nroemergencia}}">
    </div>
    <div class="mb-3">
      {{-- Arreglar --}}
      <label for="" class="form-label">Obra social</label><br>
      <select name="obrasocial_id" id="obrasocial_id">
        @foreach($obrasociales as $obrasocial)
          <option value="{{ $obrasocial->id }}">{{ $obrasocial->descripcion }}</option>
        @endforeach
      </select>
      <!-- <input id="obrasocial_id" name="obrasocial_id" type="text" class="form-control" tabindex="3" value="{{$usuario->obrasocial_id}}"> -->
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Prepaga</label>
      <input id="prepaga" name="prepaga" type="text" class="form-control" tabindex="3" value="{{$usuario->prepaga}}">
    </div>

  <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
