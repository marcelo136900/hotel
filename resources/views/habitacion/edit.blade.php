@extends('adminlte::page')

@section('title', 'Editar Habitacion')

@section('content_header')
    <h1>Habitacion</h1>
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
        <form action="{{route('habitacion.update',$habitacion->id)}}" method="post" class="form-horizontal">
            @csrf
            {{method_field('PUT')}}
            <div class="card">
                <div class="card-header">
                    Editar Habitacion
                </div>
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
                        <label for="exampleFormControlInput1" class="form-label">Numero de Habitacion</label>
                        <input class="form-control" id="numhabitacion" name="numhabitacion" value="{{$habitacion->numhabitacion}}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tipo de Habitacion</label>
    
                        <select name="idtipo" class="form-control">
                            <option value="">Elegir...</option>
    
                            @foreach ($tipohabitacion as $value)                                                        
                                <option value="{{ $value->id }}" {{$habitacion->idtipo==$value->id ? 'selected' : ''}}>{{ $value->tipo }}</option>
                            @endforeach                            
                        </select>
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
