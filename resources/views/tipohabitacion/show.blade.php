<div class="table table-responsive">
    <table class="table table-bordered" id="datatable">
        <thead>
            <th>ID</th>
            <th>TIPO DE HABITACION</th>
            <th>PRECIO</th>
            <th>ACCIONES</th>
        </thead>
        <tbody>            
            @foreach($tipoHabitacion as $value)            
            <tr>            
                <td>{{$value->id}}</td>
                <td>{{$value->tipo}}</td>
                <td>{{$value->precio}}</td>
                <td>
                    <a href="{{route('tipohabitacion.edit',$value->id)}}">
                        <button type="button" class="btn btn-warning">
                            <i class="fa fa-edit"></i>
                            Editar
                        </button>
                    </a>
                    <a href="">
                        <button type="button" class="btn btn-danger">
                            Borrar
                        </button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>