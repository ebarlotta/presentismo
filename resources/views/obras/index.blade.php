@extends('obras.principalobra')

@section('css')
  <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('content')

<table id="obras" class="table table-striped table-borderd shadow-lg mt-4" style="width: 100%">
  <thead class="bg-primary text-white">
    <tr>
      <th scope="col">Nombre de la obra</th>
      <th scope="col">Dirección</th>
      <th scope="col">Ubicación GPS</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($obras as $obra)
    <tr>
        <td>{{$obra->nombre}}</td>
        <td>{{$obra->direccion}}</td>
        <td>{{$obra->ubicaciongps}}</td>
        <td>
         <form action="{{ route('obras.destroy',$obra->id) }}" method="POST">
          <a href="obras/{{$obra->id}}/edit" class="btn btn-info">Editar</a>
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
    $('#obras').DataTable({
        "lengthMenu": [[5,10, 50, -1],[5, 10, 50, "Todos"]],
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        }
    });
});
</script>

@endsection

@endsection
