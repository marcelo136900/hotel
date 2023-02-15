@extends('adminlte::page')

@section('title', 'Editar Huesped')

@section('content_header')
    <h1>edit huesped</h1>
@stop

@section('content')  
<div class="row">
    <div class="col-7">
        <form action="{{route('huesped.update',$huesped->id)}}" method="post" class="form-horizontal">
            @csrf
            {{method_field('PUT')}}
            <div class="card">
                <div class="card-header">
                    Editar Huesped
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
                        <label for="exampleFormControlInput1" class="form-label">C.I.</label>
                        <input class="form-control" id="cihuesped" name="cihuesped" placeholder="Ingrese Cedula de Identidad" value="{{$huesped->cihuesped}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre Completo</label>
                        <input class="form-control" id="nombrecompleto" name="nombrecompleto" placeholder="Ingrese Nombre Completo" value="{{$huesped->nombrecompleto}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ciudad</label>
    
                        <select name="idciudad" class="form-control">
                            <option value="">Elegir...</option>
    
                            @foreach ($ciudades as $ciudad)
                                <option value="{{ $ciudad->id }}" {{$huesped->idciudad==$ciudad->id ? 'selected' : ''}}>{{ $ciudad->nombreciudad }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Telefono</label>
                        <input class="form-control" id="telefono" name="telefono" placeholder="Ingrese Telefono" value="{{$huesped->telefono}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Profesion</label>
                        <input type="text" class="form-control" id="profesion" name="profesion" placeholder="Ingrese Profesion" value="{{$huesped->profesion}}">
                    </div>            
                </div>
                <div class="card-footer">
                    <tr class="table-active">
                        <button type="sumbit" class="btn btn-outline-success">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp;
                            GUARDAR CAMBIOS
                        </button>                        
                    </tr>
                </div>
            </div> 
        </form>        
    </div>
</div>  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop