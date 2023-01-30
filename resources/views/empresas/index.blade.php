@extends('empresas.principalempresa')

@section('css')
  <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection


@section('content')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="{{ route('empresas.create') }}" class="btn btn-primary">CREAR</a>


<table id="empresas" class="table table-striped table-borderd shadow-lg mt-4" style="width: 100%">
  <thead class="bg-primary text-white">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Dirección</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Nóvil</th>
      <th scope="col">Cuit</th>
      <th scope="col">Tipo de Iva</th>
      <th scope="col">Contacto</th>
      <th scope="col">Ubicación GPS</th>
      <th scope="col">Localidad</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($empresas as $empresa)
    <tr>
        <td>{{$empresa->nombre}}</td>
        <td>{{$empresa->direccion}}</td>
        <td>{{$empresa->telefono}}</td>
        <td>{{$empresa->movil}}</td>
        <td>{{$empresa->cuit}}</td>
        @if($empresa->tipodeiva->descripcion)
          <td>{{$empresa->tipodeiva->descripcion}}</td>
        @else
          <td>-</td>
        @endif
        <td>{{$empresa->contacto}}</td>
        <td>{{$empresa->ubicacion}}</td>
        <td>{{$empresa->localidad_id}}</td>
        <td>
         <form action="{{ route('empresas.destroy',$empresa->id) }}" method="POST">
          <a href="empresas/{{$empresa->id}}/edit" class="btn btn-info">Editar</a>
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
    $('#empresas').DataTable({
        "lengthMenu": [[5,10, 50, -1],[5, 10, 50, "Todos"]],
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        }
    });
});
</script>

@endsection

@endsection
