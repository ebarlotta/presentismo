@extends('usuarios.principalusuario')

@section('css')
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection


@section('content')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="{{ route('usuarios.create') }}" class="btn btn-primary">CREAR</a>


<table id="usuarios" class="table table-striped table-borderd shadow-lg mt-4" style="width: 100%">
  <thead class="bg-primary text-white">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Tipo de Usuario</th>
      <th scope="col">Documento</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Nro Emergencia</th>
      <th scope="col">Obra Social</th>
      <th scope="col">Prepaga</th>


      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($usuarios as $usuario)
    <tr>
        <td>{{$usuario->name}}</td>
        <td>{{$usuario->email}}</td>
        <!-- <td>{{$usuario->tipouser_id}}</td> -->
        <td>{{$usuario->tipodeusuario->descripcion}}</td>
        <td>{{$usuario->documento}}</td>
        <td>{{$usuario->telefono}}</td>
        <td>{{$usuario->nroemergencia}}</td>
        <td>{{$usuario->obrasocial->descripcion}}</td>
        <!-- <td>{{$usuario->obrasocial_id}}</td> -->
        <td>{{$usuario->prepaga}}</td>
        <td>
         <form action="{{ route('usuarios.destroy',$usuario->id) }}" method="POST">
          <a href="usuarios/{{$usuario->id}}/edit" class="btn btn-info">Editar</a>
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
         </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
    $('#usuarios').DataTable({
        "lengthMenu": [[5,10, 50, -1],[5, 10, 50, "Todos"]],
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        }
    });
});
</script>

@endsection

@endsection
