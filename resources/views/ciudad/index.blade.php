@extends('adminlte::page')

@section('title', 'Agregar Huesped')

@section('content_header')
    <h1>Ciudad</h1>
@stop

@section('content')  
<div class="row">
    <div class="col-6">
        @include('ciudad.create')
    </div>

    <div class="col-6">
        @include('ciudad.show')
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