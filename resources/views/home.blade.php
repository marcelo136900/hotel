@extends('adminlte::page')

@section('title', 'Hotel')

@section('content_header')
    <h1>Inicio</h1>
@stop

@section('content')
    <h2>Tipo de habitaciones más requeridas</h2>
    <div class="row">
        <div class="col-7">
            <canvas id="grafico"></canvas>
        </div>
        
        <div class="col-5">
            <table class="table table-bordered">
                <thead>
                    <th>TIPO HABITACION</th>
                    <th>CONTEO</th>
                </thead>
                <tbody>            
                    @foreach($grafico as $value)            
                    <tr>            
                        <td>{{$value->tipo}}</td>
                        <td>{{$value->conteo}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
<hr>
<h2>Historial de hospedajes</h2>
<div class="table table-responsive">
    <table class="table table-bordered" id="datatable">
        <thead>
            <th>ID</th>
            <th>INICIO</th>
            <th>SALIDA</th>
            <th>ESTADIA</th>
            <th>HUESPED</th>
            <th>CI</th>
            <th>CIUDAD</th>
            <th>HABITACION</th>
            <th>TIPO</th>
            <th>PRECIO</th>
        </thead>
        <tbody>            
            @foreach($hospedaje as $value)            
            <tr>            
                <td>{{$value->id}}</td>
                <td>{{$value->fechainicio}}</td>
                <td>{{$value->fechasalida}}</td>
                <td>{{$value->diashospedaje}}</td>
                <td>{{$value->nombrecompleto}}</td>
                <td>{{$value->cihuesped}}</td>
                <td>{{$value->nombreciudad}}</td>
                <td>{{$value->numhabitacion}}</td>
                <td>{{$value->tipo}}</td>
                <td>{{$value->precio}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<?php
    $tipo = [];
    $conteo = [];
    
    foreach ($grafico as $value) {
        $tipo[] = $value->tipo;
        $conteo[] = $value->conteo;
    }
?>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 

        $('#datatable').DataTable(); 

        const ctx = document.getElementById('grafico');

        const data = {
            labels: {!! json_encode($tipo) !!},
            datasets: [{
                label: 'My First Dataset',
                data: {!! json_encode($conteo) !!},
                backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)',
                'rgb(255, 159, 64)',
                'rgb(75, 192, 192)',
                'rgb(153, 102, 255)'
                ],
                hoverOffset: 4
            }]
        };

        new Chart(ctx, {
            type: 'doughnut',
            data: data
        });
    </script>
@stop