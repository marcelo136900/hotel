@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>create huesped</h1>
@stop

@section('content')    
    <div class="card">
        <div class="card-header">
            Nuevo Huesped
        </div>
        <div class="card-body">            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">C.I.</label>
                <input class="form-control" id="exampleFormControlInput1" placeholder="Ingrese Cedula de Identidad">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre Completo</label>
                <input class="form-control" id="exampleFormControlInput1" placeholder="Ingrese Nombre Completo">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ciudad</label>
                <input class="form-control" id="exampleFormControlInput1" placeholder=".....">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Telefono</label>
                <input class="form-control" id="exampleFormControlInput1" placeholder="Ingrese Telefono">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Profesion</label>
                <input class="form-control" id="exampleFormControlInput1" placeholder="Ingrese Profesion">
            </div>
            <tr class="table-active">
                <button type="button" class="btn btn-outline-info">AGREGAR HUESPED</button>
            </tr>
        </div>
    </div>    

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop