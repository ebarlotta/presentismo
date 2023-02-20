@extends('socios.principalsocio')

@section('css')
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('content')

<a href="{{ route('socios.create') }}" class="btn btn-primary">CREAR</a>


<table id="videos" class="table table-striped table-borderd shadow-lg mt-4" style="width: 100%">
  <thead class="bg-primary text-white">
    <tr>
      <th scope="col">Título</th>
      <th scope="col">Epígrafe</th>
      <th scope="col">URL</th>
      <th scope="col">Orden</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($videos as $video)
    <tr>
        <td>{{$video->titulo}}</td>
        <td>{{$video->url}}</td>
        <td>{{$video->epigrafe}}</td>
        <td>{{$video->descripcion}}</td>
        <td>{{$video->orden}}</td>
        <td>
         <form action="{{ route('socios.destroy',$video->id) }}" method="POST">
          <a href="socios/{{$video->id}}/edit" class="btn btn-info">Editar</a>
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
    $('#videos').DataTable({
        "lengthMenu": [[5,10, 50, -1],[5, 10, 50, "Todos"]],
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        }
    });
});
</script>

@endsection

@endsection
