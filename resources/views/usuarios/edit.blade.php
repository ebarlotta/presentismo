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
        @isset($tipouser->id)
          <option value="1" selected>Ninguna</option>
        @else
          <option value="1">Ninguna</option>
        @endisset
        @foreach($tiposdeusuarios as $tipouser)
          @if($usuario->tipouser_id == $tipouser->id)
            <option value="{{ $tipouser->id }}" selected>{{ $tipouser->descripcion }}</option>
          @else
            <option value="{{ $tipouser->id }}">{{ $tipouser->descripcion }}</option>
          @endif
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
    {{$usuario}}
    <div class="mb-3">
      {{-- Arreglar --}}
      <label for="" class="form-label">Obra social</label><br>
      <select name="obrasocial_id" id="obrasocial_id">
        @isset($obrasocial->id)
          <option value="1">Ninguna</option>
        @else
          <option value="1" selected>Ninguna</option>
        @endisset
        
        @foreach($obrasociales as $obrasocial)
          @if($usuario->obrasocial_id == $obrasocial->id)
            <option value="{{ $obrasocial->id }}" selected>{{ $obrasocial->descripcion }}</option>
          @else
            <option value="{{ $obrasocial->id }}">{{ $obrasocial->descripcion }}</option>
          @endif
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
