@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>index huesped</h1>
@stop

@section('content')
    <div class="card">
    <div class="card-header">
        Lista Huespedes
    </div>
    <div class="card-body">
        <table class="table" id="dataTable">
            <thead>
                <th>CI HUESPED</th>
                <th>NOMBRE COMPLETO</th>
                <th>ID CIUDAD</th>
                <th>TELEFONO</th>
                <th>PROFESION</th>
            </thead>
            <tbody>            
                <tr class="table-active">
                    <a href="huesped/create">
                        <button type="button" class="btn btn-outline-info">
                            <i class="fa fa-plus"></i>&nbsp;&nbsp;
                            Nuevo Huesped
                        </button>
                    </a>                    
                </tr>
                @foreach($huesped as $value)            
                <tr>            
                    <td>{{$value->id}}</td>
                    <td>{{$value->cihuesped}}</td>
                    <td>{{$value->nombrecompleto}}</td>
                    <td>{{$value->idciudad}}</td>
                    <td>{{$value->telefono}}</td>
                    <td>{{$value->profesion}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>    

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $('#dataTable').DataTable({
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"}
        });        
    </script>
@stop