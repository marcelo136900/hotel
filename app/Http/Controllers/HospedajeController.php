<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;
use App\Models\Hospedaje;
use App\Models\Huesped;
use Illuminate\Http\Request;
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
    public function edit(Hospedaje $hospedaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hospedaje  $hospedaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hospedaje $hospedaje)
    {
        //
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
