<form action="{{route('tipohabitacion.store')}}" method="post" class="form-horizontal">
    @csrf
    <div class="card">

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
                <label for="exampleFormControlInput1" class="form-label">Tipo de Habitacion</label>

                <input type="text" class="form-control" id="tipo" name="tipo">

            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Precio</label>

                <input type="number" class="form-control" id="precio" name="precio">

            </div>
          
        </div>

        <div class="card-footer">
            <tr class="table-active">
                <button type="submit" class="btn btn-outline-info">AGREGAR TIPO DE HABITACION</button>
            </tr>
        </div>
    </div> 
</form>