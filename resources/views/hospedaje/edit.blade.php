@extends('adminlte::page')

@section('title', 'Editar Huesped')

@section('content_header')
    <h1>editar hospedaje</h1>
@stop

@section('content')  
<div class="row">
    <div class="col-7">
        <form action="{{route('hospedaje.update', $hospedaje->id)}}" method="post" class="form-horizontal">
            @csrf
            {{method_field('PUT')}}
            <div class="card">

                <div class="card-body">  

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Huesped</label>

                        <select name="idhuesped" class="form-control" id="select22">
                            <option value="{{ $hospedaje->idhuesped }}">{{ $hospedajehuesped[0]->nombrecompleto }} - {{ $hospedajehuesped[0]->cihuesped }}</option>

                            @foreach ($huesped as $value)
                                <option value="{{ $value->id }}">{{ $value->nombrecompleto }} - {{ $value->cihuesped }}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Fecha inicio</label>
                                <input type="date" class="form-control" id="fechainicio" name="fechainicio" value="{{ $hospedaje->fechainicio }}">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Fecha salida</label>
                                <input type="date" class="form-control" id="fechasalida" name="fechasalida" value="{{ $hospedaje->fechasalida }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-7">
                            <div class="mb-3">
                                <label for="idhabitacion" class="form-label">Habitacion</label>
                
                                <select name="idhabitacion" class="form-control">
                                    <option value="{{ $hospedaje->idhabitacion }}">{{ $hospedajehabitacion[0]->numhabitacion }}</option>
                
                                    @foreach ($habitacion as $value)
                                        <option value="{{ $value->id }}">{{ $value->numhabitacion }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-5">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Estadia</label>
                                <input type="number" class="form-control" id="diashospedaje" name="diashospedaje" value="{{ $hospedaje->diashospedaje }}">
                            </div>
                        </div>
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

    <div class="col-5">
        <form action="{{route('hospedaje.update', $hospedaje->id)}}" method="post" class="form-horizontal">
            @csrf
            {{method_field('PUT')}}
            <div class="card">

                <div class="card-body">  

                    <div class="mb-3">

                        <input type="hidden" name="estado" value="FINALIZADO">

                    </div>
                
                </div>

                <div class="card-footer">
                    <tr class="table-active">
                        <button type="submit" class="btn btn-danger">REALIZAR CHECK-OUT</button>
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
    <script> $('#select22').select2(); </script>
@stop