<?php

namespace App\Http\Controllers;

use App\Models\TipoHabitacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TipoHabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoHabitacion = TipoHabitacion::all();

        return view('tipohabitacion.index', ["tipoHabitacion" => $tipoHabitacion]);
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
            'tipo'   => 'required',
            'precio' => 'required'
        ]);

        $tipoHabitacion = new TipoHabitacion();

        $tipoHabitacion->tipo = $request->tipo;
        $tipoHabitacion->precio = $request->precio;

        $tipoHabitacion->save();

        return Redirect::to('tipohabitacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoHabitacion  $tipoHabitacion
     * @return \Illuminate\Http\Response
     */
    public function show(TipoHabitacion $tipoHabitacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoHabitacion  $tipoHabitacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoHabitacion = TipoHabitacion::findOrFail($id);

        return view('tipohabitacion.edit', ["tipoHabitacion" => $tipoHabitacion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoHabitacion  $tipoHabitacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tipo'   => 'required',
            'precio' => 'required'
        ]);

        $tipoHabitacion = TipoHabitacion::findOrFail($id);

        $tipoHabitacion->tipo = $request->tipo;
        $tipoHabitacion->precio = $request->precio;

        $tipoHabitacion->save();

        return Redirect::to('tipohabitacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoHabitacion  $tipoHabitacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoHabitacion $tipoHabitacion)
    {
        //
    }
}
