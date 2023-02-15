<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;
use App\Models\Hospedaje;
use App\Models\Huesped;
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
        $habitacion = Habitacion::all();
        $huesped = Huesped::all();

        return view('hospedaje.index', ["hospedaje" => $hospedaje, "habitacion" => $habitacion, "huesped" => $huesped]);
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
        //dd($request);
        $hospedaje = new Hospedaje();

        $hospedaje->fechainicio = $request->fechainicio;
        $hospedaje->fechasalida = $request->fechasalida;
        $hospedaje->idhabitacion = $request->idhabitacion;
        $hospedaje->diashospedaje = $request->diashospedaje;
        $hospedaje->idhuesped = $request->idhuesped;
        $hospedaje->estado = "HOSPEDADO";

        $hospedaje->save();

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

        return view('hospedaje.edit', ["hospedaje" => $hospedaje, "huesped" => $huesped, "habitacion" => $habitacion, "hospedajehuesped" => $hospedajehuesped, "hospedajehabitacion" => $hospedajehabitacion]);

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
        //dd($request);
        $hospedaje = Hospedaje::findOrFail($id);

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
