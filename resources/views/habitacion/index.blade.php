@extends('adminlte::page')

@section('title', 'Habitaciones')

@section('content_header')
    <h1>Habitacion</h1>
@stop

@section('content')
    <div class="card">

        <div class="card-header">
            Lista Habitaciones
        </div>

        <div class="card-body">
            <div class="row">
                <a href="habitacion/create">
                    <button type="button" class="btn btn-outline-info">
                        <i class="fa fa-plus"></i>&nbsp;&nbsp;
                        Nueva Habitacion
                    </button>
                </a>
            </div>
            <hr>
            <div class="table table-responsive">
                <table class="table table-bordered" id="datatable">
                    <thead>
                        <th>ID</th>
                        <th>NRO HABITACION</th>
                        <th>DISPONIBILIDAD</th>
                        <th>TIPO</th>
                        <th>PRECIO</th>
                        <th>ACCIONES</th>
                    </thead>
                    <tbody>            
                        @foreach($habitacion as $value)            
                        <tr>            
                            <td>{{$value->id}}</td>
                            <td>{{$value->numhabitacion}}</td>
                            <td>{{$value->diponibilidad}}</td>
                            <td>{{$value->tipo}}</td>
                            <td>{{$value->precio}}</td>
                            <td>
                                <a href="{{route('habitacion.edit',$value->id)}}">
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