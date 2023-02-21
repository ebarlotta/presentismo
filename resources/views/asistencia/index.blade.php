@extends('asistencia.principalasistencia')

@section('css')
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('content')
    <form action="{{ route('asistencia.store') }}" method="POST">
        @csrf
        {{-- <div class="mb-3">
            <label for="" class="form-label">Fecha</label>
            <input type="date" id="created" name="created"  class="form-control" tabindex="0" value="{{ date('d-m-Y') }}">
        </div> --}}
        <div class="mb-3">
            <label for="" class="form-label">Empresa</label><br>
            <select name="empresa_id" id="empresa_id" tabindex="1">
                @foreach ($empresas as $empresa)
                    <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Obra</label><br>
            <select name="obra_id" id="obra_id">
                @foreach ($obras as $obra)
                    <option value="{{ $obra->id }}">{{ $obra->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Método de lectura</label><br>
            <select name="metodo" id="metodo">
                <option value="0">Seleccione</option>
                <option value="1">Código QR</option>
            </select>
        </div>

        @if ($metodo == 0)
            <div style="background-color: aquamarine; width:200px; height:200px">
                lles
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Registrar Asistencia</button>
    </form>
@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#actividades').DataTable({
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
