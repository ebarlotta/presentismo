@extends('adminlte::page')

@section('title', env('APP_NAME') )

@section('content_header')
<div class="d-flex justify-content-between container">
    <h1>Listado de Empresas</h1>
    <a href="{{ route('empresas.create') }}" class="btn btn-primary">CREAR</a>
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