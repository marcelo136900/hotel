@extends('adminlte::page')

@section('title', 'Agregar Huesped')

@section('content_header')
    <h1>Editar tipo de habitacion</h1>
@stop

@section('content')  
<div class="row">

    <div class="col-6">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>                            
            </div>                        
        @endif
        <form action="{{route('tipohabitacion.update', $tipoHabitacion->id)}}" method="post" class="form-horizontal">
            @csrf
            {{method_field('PUT')}}
            <div class="card">
        
                <div class="card-body">  
        
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>                            
                        </div>                        
                    @endif
        
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tipo de Habitacion</label>
        
                        <input type="text" class="form-control" id="tipo" name="tipo" value="{{ $tipoHabitacion->tipo }}">
        
                    </div>
        
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Precio</label>
        
                        <input type="number" class="form-control" id="precio" name="precio" value="{{ $tipoHabitacion->precio }}">
        
                    </div>
                  
                </div>
        
                <div class="card-footer">
                    <tr class="table-active">
                        <button type="submit" class="btn btn-outline-info">GUARDAR CAMBIOS</button>
                    </tr>
                </div>
            </div> 
        </form>
    </div>

    <div class="col-6">

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

