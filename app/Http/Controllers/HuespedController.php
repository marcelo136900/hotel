<?php

namespace App\Http\Controllers;

use App\Models\Huesped;
use App\Models\Ciudad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HuespedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $huesped=Huesped::all();
        $huespedCiudad = DB::table('huespeds')
                            ->join('ciudads', 'ciudads.id', '=', 'huespeds.idciudad')
                            ->select('huespeds.*', 'ciudads.nombreciudad')
                            ->get();
                            //dd($huespedCiudad);
        //$ciudades=Ciudad::all();
        return view('huesped.index',["huesped"=>$huesped, "huespedCiudad" => $huespedCiudad]);
        //return view('huesped.edit',['huesped'=>$huesped,'ciudades'=>$ciudades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciudad=Ciudad::all();
        return view('huesped.create', ["ciudad"=>$ciudad]);
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
            'cihuesped'     =>'required',
            'nombrecompleto'=>'required',
            'idciudad'      =>'required',
            'telefono'      =>'required',
            'profesion'     =>'required'
        ]);
        //dd($request->all());
        $huesped=new Huesped();        
        $huesped->cihuesped=$request->cihuesped;
        $huesped->nombrecompleto=$request->nombrecompleto;
        $huesped->idciudad=$request->idciudad;
        $huesped->telefono=$request->telefono;
        $huesped->profesion=$request->profesion;
        $huesped->save();

        return Redirect::to('huesped');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Huesped  $huesped
     * @return \Illuminate\Http\Response
     */
    public function show(Huesped $huesped)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Huesped  $huesped
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        //dd($id);
        $huesped=Huesped::findOrFail($id);
        $ciudades=Ciudad::all();
        return view('huesped.edit',['huesped'=>$huesped,'ciudades'=>$ciudades]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Huesped  $huesped
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([            
            'cihuesped'     =>'required',
            'nombrecompleto'=>'required',
            'idciudad'      =>'required',
            'telefono'      =>'required',
            'profesion'     =>'required'
        ]);
        //dd($request->all());
        //dd($id);
        $huesped=Huesped::findOrFail($id);
        $huesped->cihuesped=$request->cihuesped;
        $huesped->nombrecompleto=$request->nombrecompleto;
        $huesped->idciudad=$request->idciudad;
        $huesped->telefono=$request->telefono;
        $huesped->profesion=$request->profesion;
        $huesped->save();

        return Redirect::to('huesped');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Huesped  $huesped
     * @return \Illuminate\Http\Response
     */
    public function destroy(Huesped $huesped)
    {
        //
    }
}
