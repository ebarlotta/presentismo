@extends('adminlte::page')

@section('title', env('APP_NAME') )

@section('content_header')
<div class="d-flex justify-content-between container">
    <h1>Listado de Obras Sociales</h1>
    <a href="{{ route('obrassociales.create') }}" class="btn btn-primary right-0">CREAR</a>
</div>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop