@extends('asistencia.principalasistencia')

@section('css')
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('content')
    <table id="acciones" class="table table-striped table-borderd shadow-lg mt-4" style="width: 100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">Hora Entrada</th>
                <th scope="col">Hora Salida</th>
                <th scope="col">Horas Trabajadas</th>
                <th scope="col">Empresa</th>
                <th scope="col">Obra</th>
                <th scope="col">Usuario</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($asistencias as $asistencia)
                <form action="/asistencia/{{ $asistencia->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <tr
                        @if ($asistencia->validada === null) style="background-color:rgb(245, 195, 195)" @else style="background-color:rgb(198, 237, 200)" @endif>
                        <td>{{ substr($asistencia->entrada, -8) }}</td>
                        <td>{{ substr($asistencia->salida, -8) }}</td>
                        <td>{{ date('h:m:s', strtotime($asistencia->salida) - strtotime($asistencia->entrada)) }}</td>
                        {{-- <td>{{ $($asistencia->created_at->diff($asistencia->salida)) }}</td> --}}
                        <td>{{ $asistencia->empresa_row->nombre }}</td>
                        <td>{{ $asistencia->obra_row->nombre }}</td>
                        <td>{{ $asistencia->usuario_row->name }}</td>
                        <td>
                            @if ($asistencia->validada === null)
                                <button type="submit" class="btn btn-primary">Validar Ok</button>
                            @else
                                <button type="submit" class="btn btn-primary" disabled>Validado</button>
                            @endif
                            <a href="{{ $asistencia->id }}/detalle" class="btn btn-warnign" style="background-color: rgb(248, 221, 139);
                              border-color:  rgb(248, 221, 139)">Detalle</a>
                        </td>
                    </tr>
                </form>
            @endforeach
        </tbody>
    </table>

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#asistencias').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "Todos"]
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                }
            });
        });
    </script>
@endsection

@endsection
