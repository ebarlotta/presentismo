@extends('acciones.principalaccion')

@section('css')
  <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection


@section('content')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="{{ route('acciones.create') }}" class="btn btn-primary">CREAR</a>


<table id="acciones" class="table table-striped table-borderd shadow-lg mt-4" style="width: 100%">
  <thead class="bg-primary text-white">
    <tr>
      <th scope="col">Actividad</th>
      <th scope="col">Obra</th>
      <th scope="col">Empresa</th>
      <th scope="col">Tarea</th>
      <th scope="col">Acance</th>
      <th scope="col">Novedad</th>
      <th scope="col">Foto</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($acciones as $accion)
    <tr>
        <td>{{$accion->actividad_id}}</td>
        <td>{{$accion->obra_id}}</td>
        <td>{{$accion->empresa_id}}</td>
        <td>{{$accion->tarea_id}}</td>
        <td>{{$accion->novedad_id}}</td>
        <td>{{$accion->avance}}</td>
        <td>{{$accion->fotourl}}</td>
        <td>
         <form action="{{ route('acciones.destroy',$accion->id) }}" method="POST">
          <a href="acciones/{{$accion->id}}/edit" class="btn btn-info">Editar</a>
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
    $('#acciones').DataTable({
        "lengthMenu": [[5,10, 50, -1],[5, 10, 50, "Todos"]],
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        }
    });
});
</script>

@endsection

@endsection
