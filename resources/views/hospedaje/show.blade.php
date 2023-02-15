<div class="table table-responsive">
    <table class="table table-bordered" id="datatable">
        <thead>
            <th>ID</th>
            <th>INICIO</th>
            <th>SALIDA</th>
            <th>ID HABITACION</th>
            <th>DIAS HOSPEDAJE</th>
            <th>ID HUESPED</th>
            <th>ESTADO</th>
            <th>ACCIONES</th>
        </thead>
        <tbody>            
            @foreach($hospedaje as $value)            
            <tr>            
                <td>{{$value->id}}</td>
                <td>{{$value->fechainicio}}</td>
                <td>{{$value->fechasalida}}</td>
                <td>{{$value->idhabitacion}}</td>
                <td>{{$value->diashospedaje}}</td>
                <td>{{$value->idhuesped}}</td>
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