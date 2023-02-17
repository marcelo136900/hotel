@extends('adminlte::page')

@section('title', 'Tipo Habitacion')

@section('content_header')
    <h1>Tipo Habitacion</h1>
@stop

@section('content')  
<div class="row">
    <div class="col-6">
        @include('tipohabitacion.create')
    </div>

    <div class="col-6">
        @include('tipohabitacion.show')
    </div>
</div>  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        //$('#select2').select2();
    </script>
@stop