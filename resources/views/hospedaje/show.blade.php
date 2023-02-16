<div class="table table-responsive">
    <table class="table table-bordered" id="datatable">
        <thead>
            <th>ID</th>
            <th>INICIO</th>
            <th>SALIDA</th>
            <th>HABITACION</th>
            <th>ESTADIA</th>
            <th>HUESPED</th>
            <th>ESTADO</th>
            <th>ACCIONES</th>
        </thead>
        <tbody>            
            @foreach($hospedajeHuHa as $value)            
            <tr>            
                <td>{{$value->id}}</td>
                <td>{{$value->fechainicio}}</td>
                <td>{{$value->fechasalida}}</td>
                <td>{{$value->numhabitacion}}</td>
                <td>{{$value->diashospedaje}}</td>
                <td>{{$value->nombrecompleto}}</td>
                <td>{{$value->estado}}</td>
                <td>
                    <a href="{{route('hospedaje.edit',$value->id)}}">
                        <button type="button" class="btn btn-warning">
                            <i class="fa fa-edit"></i>
                            Editar
                        </button>
                    </a>
                    <a href="{{ route('hospedaje.edit',$value->id) }}">
                        <button type="button" class="btn btn-danger">
                            Check-out
                        </button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>