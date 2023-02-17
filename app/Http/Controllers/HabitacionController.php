<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;
use App\Models\TipoHabitacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habitacion = DB::table('habitacions')
                        ->join('tipo_habitacions', 'tipo_habitacions.id', '=', 'habitacions.idtipo')
                        ->select('habitacions.*', 'tipo_habitacions.tipo', 'tipo_habitacions.precio')
                        ->get();

        return view('habitacion.index', ["habitacion" => $habitacion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipohabitacion = TipoHabitacion::all();

        return view('habitacion.create', ["tipohabitacion" => $tipohabitacion]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $habitacion = new Habitacion();

        $habitacion->numhabitacion = $request->numhabitacion;
        $habitacion->diponibilidad = 'LIBRE';
        $habitacion->idtipo = $request->idtipo;

        $habitacion->save();

        return Redirect::to('habitacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function show(Habitacion $habitacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipohabitacion = TipoHabitacion::all();
        $habitacion=Habitacion::findOrFail($id);
        return view('habitacion.edit', ['habitacion' => $habitacion, 'tipohabitacion'=>$tipohabitacion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $habitacion=Habitacion::findOrFail($id);

        $habitacion->numhabitacion = $request->numhabitacion;

        $habitacion->idtipo = $request->idtipo;

        $habitacion->save();

        return Redirect::to('habitacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Habitacion $habitacion)
    {
        //
    }
}
