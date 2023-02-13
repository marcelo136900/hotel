@extends('adminlte::page')

@section('title', 'Agregar Huesped')

@section('content_header')
    <h1>create huesped</h1>
@stop

@section('content')  
<div class="row">
    <div class="col-7">
        <form action="{{route('huesped.store')}}" method="post" class="form-horizontal">
            @csrf
            <div class="card">
                <div class="card-header">
                    Nuevo Huesped
                </div>
                <div class="card-body">            
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">C.I.</label>
                        <input class="form-control" id="cihuesped" name="cihuesped" placeholder="Ingrese Cedula de Identidad">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre Completo</label>
                        <input class="form-control" id="nombrecompleto" name="nombrecompleto" placeholder="Ingrese Nombre Completo">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ciudad</label>
    
                        <select name="idciudad" class="form-control">
                            <option value="">Elegir...</option>
    
                            @foreach ($ciudad as $value)
                                <option value="{{ $value->id }}">{{ $value->nombreciudad }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Telefono</label>
                        <input class="form-control" id="telefono" name="telefono" placeholder="Ingrese Telefono">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Profesion</label>
                        <input type="text" class="form-control" id="profesion" name="profesion" placeholder="Ingrese Profesion">
                    </div>            
                </div>
                <div class="card-footer">
                    <tr class="table-active">
                        <button type="submit" class="btn btn-outline-info">AGREGAR HUESPED</button>
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