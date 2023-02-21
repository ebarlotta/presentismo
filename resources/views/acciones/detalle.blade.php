@extends('acciones.principalaccion')

@section('css')
  <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('content')

<table id="acciones" class="table table-striped table-borderd shadow-lg mt-4" style="width: 100%">
  <thead class="bg-primary text-white">
    <tr>
      <th scope="col-1">Entrada</th>
      <th scope="col-1">Salida</th>
      <th scope="col-1">Horas Trabajadas</th>
      <th scope="col-1">Usuario</th>
      <th scope="col-1">Obra</th>
      <th scope="col-4">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($acciones as $accion)
    <tr>

      <td>{{$accion->entrada}}</td>
      <td>{{$accion->salida}}</td>
      <td>8 horas</td> 
      
      <td>{{$accion->usuario_row->name}}</td>
      <td>{{$accion->obra_row->nombre}}</td>
      <td>
        <a href="acciones/{{$accion->id}}/edit" class="btn btn-info">Editar</a>
        <form action="{{ route('acciones.destroy',$accion->id) }}" method="POST">
            @csrf
            @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="acciones/{{$accion->id}}/detalle" class="btn btn-warning" style="background-color: rgb(248, 221, 139);
          border-color:  rgb(248, 221, 139)">Detalle</a>
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
