@extends('adminlte::page')

@section('title', 'Agregar Huesped')

@section('content_header')
    <h1>Hospedaje</h1>
@stop

@section('content')  
<div class="row">
    <div class="col-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>                            
            </div>                        
        @endif

        @include('hospedaje.create')
    </div>

    <div class="col-8">
        @include('hospedaje.show')
    </div>
</div>  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $('#select2').select2();
    </script>
@stop