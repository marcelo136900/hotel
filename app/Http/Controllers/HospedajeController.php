<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;
use App\Models\Hospedaje;
use App\Models\Huesped;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HospedajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospedaje = Hospedaje::all();
        $habitacion = DB::table('habitacions')
                        ->select('*')
                        ->where('habitacions.diponibilidad', '=', 'LIBRE')
                        ->get();
        $huesped = Huesped::all();

        $hospedajeHuHa = Hospedaje::join('huespeds', 'hospedajes.idhuesped', '=', 'huespeds.id')
                            ->join('habitacions', 'hospedajes.idhabitacion', '=', 'habitacions.id')
                            ->select('hospedajes.*', 'huespeds.nombrecompleto', 'habitacions.numhabitacion')
                            ->where('hospedajes.estado', '=', 'HOSPEDADO')
                            ->get();
//dd($hospedajeHuHa);
        return view('hospedaje.index', ["hospedaje" => $hospedaje, "habitacion" => $habitacion, "huesped" => $huesped, 'hospedajeHuHa' => $hospedajeHuHa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'fechainicio'   => 'required',
            'fechasalida'   => 'required',
            'idhabitacion'  => 'required',
            'diashospedaje' => 'required',
            'idhuesped'     => 'required',
        ]);
        //dd($request);
        //Guardado de hospedaje
        $hospedaje = new Hospedaje();

        $hospedaje->fechainicio = $request->fechainicio;
        $hospedaje->fechasalida = $request->fechasalida;
        $hospedaje->idhabitacion = $request->idhabitacion;
        $hospedaje->diashospedaje = $request->diashospedaje;
        $hospedaje->idhuesped = $request->idhuesped;
        $hospedaje->estado = "HOSPEDADO";

        $hospedaje->save();

        //Actualizacion de la habitacion
        $habitacion = DB::table('habitacions')
                        ->where('id', '=', $request->idhabitacion)
                        ->update(['diponibilidad' => 'OCUPADO']);

        return Redirect::to('hospedaje');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hospedaje  $hospedaje
     * @return \Illuminate\Http\Response
     */
    public function show(Hospedaje $hospedaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hospedaje  $hospedaje
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        $hospedaje = Hospedaje::findOrFail($id);
        $huesped = Huesped::all();
        $habitacion = Habitacion::all();
        $hospedajehuesped = DB::table('huespeds')->select('id', 'nombrecompleto', 'cihuesped')->where('id', '=', $hospedaje->idhuesped)->get();
        $hospedajehabitacion = DB::table('habitacions')->select('id', 'numhabitacion', 'diponibilidad')->where('id', '=', $hospedaje->idhabitacion)->get();

        $hospedajeHuHaId = DB::table('hospedajes')
                                ->join('huespeds', 'huespeds.id', '=', 'hospedajes.idhuesped')
                                ->join('habitacions', 'habitacions.id', '=', 'hospedajes.idhabitacion')
                                ->select('hospedajes.*', 'huespeds.*', 'habitacions.*')
                                ->where('hospedajes.id', '=', $id)
                                ->get();
        //dd($hospedajeHuHaId);
        return view('hospedaje.edit', ["hospedaje" => $hospedaje, "huesped" => $huesped, "habitacion" => $habitacion, "hospedajehuesped" => $hospedajehuesped, "hospedajehabitacion" => $hospedajehabitacion, "hospedajeHuHaId" => $hospedajeHuHaId]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hospedaje  $hospedaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'fechainicio'   => 'required',
            'fechasalida'   => 'required',
            'idhabitacion'  => 'required',
            'diashospedaje' => 'required',
            'idhuesped'     => 'required',
        ]);
        //dd($request);
        $hospedaje = Hospedaje::findOrFail($id);
        //dd($hospedaje);
        if (!$request->estado){
            $hospedaje->fechainicio = $request->fechainicio;
            $hospedaje->fechasalida = $request->fechasalida;
            $hospedaje->idhabitacion = $request->idhabitacion;
            $hospedaje->diashospedaje = $request->diashospedaje;
            $hospedaje->idhuesped = $request->idhuesped;
        }
        else{

            $hospedaje->estado = $request->estado;
            
        }

        $hospedaje->save();
        
        return Redirect::to('hospedaje');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hospedaje  $hospedaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospedaje $hospedaje)
    {
        //
    }
}
