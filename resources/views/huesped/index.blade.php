@extends('adminlte::page')

@section('title', 'Huespedes')

@section('content_header')
    <h1>Huespedes</h1>
@stop

@section('content')
    <div class="card">

        <div class="card-header">
            Lista Huespedes
        </div>

        <div class="card-body">
            <div class="row">
                <a href="huesped/create">
                    <button type="button" class="btn btn-outline-info">
                        <i class="fa fa-plus"></i>&nbsp;&nbsp;
                        Nuevo Huesped
                    </button>
                </a>
            </div>
            <hr>
            <div class="table table-responsive">
                <table class="table table-bordered" id="datatable">
                    <thead>
                        <th>ID</th>
                        <th>CI HUESPED</th>
                        <th>NOMBRE COMPLETO</th>
                        <th>CIUDAD</th>
                        <th>TELEFONO</th>
                        <th>PROFESION</th>
                        <th>ACCIONES</th>
                    </thead>
                    <tbody>            
                        @foreach($huespedCiudad as $value)            
                        <tr>            
                            <td>{{$value->id}}</td>
                            <td>{{$value->cihuesped}}</td>
                            <td>{{$value->nombrecompleto}}</td>
                            <td>{{$value->nombreciudad}}</td>
                            <td>{{$value->telefono}}</td>
                            <td>{{$value->profesion}}</td>
                            <td>
                                <a href="{{route('huesped.edit',$value->id)}}">
                                    <button type="button" class="btn btn-outline-primary">
                                        <i class="fa fa-edit"></i>
                                        Editar
                                    </button>
                                </a>
                                <a href="">
                                    <button type="button" class="btn btn-outline-danger">
                                        <i class="fa fa-ban"></i>
                                        Borrar
                                    </button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>    

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $('#datatable').DataTable({
        "language": {
"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
}
      });
    </script>
@stop