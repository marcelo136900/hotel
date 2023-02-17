<?php

namespace App\Http\Controllers;

use App\Models\Hospedaje;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $hospedaje = Hospedaje::join('huespeds', 'huespeds.id', '=', 'hospedajes.idhuesped')
                            ->join('ciudads', 'ciudads.id', '=', 'huespeds.idciudad')
                            ->join('habitacions', 'habitacions.id', '=', 'hospedajes.idhabitacion')
                            ->join('tipo_habitacions', 'tipo_habitacions.id', '=', 'habitacions.idtipo')
                            ->select('hospedajes.*', 
                                    'huespeds.nombrecompleto', 
                                    'huespeds.cihuesped', 
                                    'ciudads.nombreciudad', 
                                    'habitacions.numhabitacion',
                                    'tipo_habitacions.tipo',
                                    'tipo_habitacions.precio')
                            ->get();

        $grafico = Hospedaje::join('habitacions', 'habitacions.id', '=', 'hospedajes.idhabitacion')
                            ->join('tipo_habitacions', 'tipo_habitacions.id', '=', 'habitacions.idtipo')
                            ->selectRaw('tipo_habitacions.tipo, count(tipo_habitacions.tipo) as conteo')
                            ->groupBY('tipo_habitacions.tipo')
                            ->orderBy('conteo' ,'desc')
                            ->get();
        
        //dd($grafico);
        return view('home', ["hospedaje" => $hospedaje, "grafico" => $grafico]);
    }
}
