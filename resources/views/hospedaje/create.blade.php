<form action="{{route('hospedaje.store')}}" method="post" class="form-horizontal">
    @csrf
    <div class="card">

        <div class="card-body">  

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Huesped</label>

                <select name="idhuesped" class="form-control" id="select2">
                    <option value="">Elegir...</option>

                    @foreach ($huesped as $value)
                        <option value="{{ $value->id }}">{{ $value->nombrecompleto }} - {{ $value->cihuesped }}</option>
                    @endforeach
                </select>

            </div>

            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Fecha inicio</label>
                        <input type="date" class="form-control" id="fechainicio" name="fechainicio" value="{{ date("Y-m-d") }}">
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Fecha salida</label>
                        <input type="date" class="form-control" id="fechasalida" name="fechasalida" value="{{ date("Y-m-d",strtotime(date("Y-m-d")."+ 1 days")) }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-7">
                    <div class="mb-3">
                        <label for="idhabitacion" class="form-label">Habitacion</label>
        
                        <select name="idhabitacion" class="form-control">
                            <option value="">Elegir...</option>
        
                            @foreach ($habitacion as $value)
                                <option value="{{ $value->id }}">{{ $value->numhabitacion }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Estadia</label>
                        <input type="number" class="form-control" id="diashospedaje" name="diashospedaje" value="1">
                    </div>
                </div>
            </div>
          
        </div>

        <div class="card-footer">
            <tr class="table-active">
                <button type="submit" class="btn btn-outline-info">AGREGAR HOSPEDAJE</button>
            </tr>
        </div>
    </div> 
</form>