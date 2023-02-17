@extends('adminlte::page')

@section('title', 'Ciudad')

@section('content_header')
    <h1>Ciudad</h1>
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
        <form action="{{route('ciudad.update', $ciudad->id)}}" method="post" class="form-horizontal">
            @csrf
            {{method_field('PUT')}}
            <div class="card">
        
                <div class="card-body">  
        
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ciudad</label>
        
                        <input type="text" class="form-control" id="nombreciudad" name="nombreciudad" value="{{ $ciudad->nombreciudad }}">
        
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
