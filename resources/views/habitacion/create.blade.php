@extends('adminlte::page')

@section('title', 'Agregar Huesped')

@section('content_header')
    <h1>Habitacion</h1>
@stop

@section('content')  
<div class="row">
    <div class="col-7">
        <form action="{{route('habitacion.store')}}" method="post" class="form-horizontal">
            @csrf
            <div class="card">
                <div class="card-header">
                    Nuevo Huesped
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
                        <input class="form-control" id="numhabitacion" name="numhabitacion" placeholder="Ingrese numero de habitacion">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tipo de Habitacion</label>
    
                        <select name="idtipo" class="form-control">
                            <option value="">Elegir...</option>
    
                            @foreach ($tipohabitacion as $value)
                                <option value="{{ $value->id }}">{{ $value->tipo }}</option>
                            @endforeach
                        </select>
                    </div>
                              
                </div>
                <div class="card-footer">
                    <tr class="table-active">
                        <button type="submit" class="btn btn-outline-info">AGREGAR HABITACION</button>
                    </tr>
                </div>
            </div> 
        </form>        
    </div>
</div>  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop