<?php

namespace App\Http\Controllers;

use App\Models\Analista;
use Illuminate\Http\Request;

class AnalistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Analista  $analista
     * @return \Illuminate\Http\Response
     */
    public function show(Analista $analista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Analista  $analista
     * @return \Illuminate\Http\Response
     */
    public function edit(Analista $analista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Analista  $analista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Analista $analista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Analista  $analista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Analista $analista)
    {
        //
    }

    /**
     * Genera agenda de registros segun franja de disponibilidad de clientes.
     *
     * @param  $id  $analista
     * @return \Illuminate\Http\Response
     */
    public function agenda(Request $request)
    {
        try {
            $agenda=Analista::find($request->id)->registros->where('hora_inicial', '<', date('H:i:s'))->where('hora_final', '>', date('H:i:s'))->sortByDesc(function ($registro, $key) {
                return $registro->score();
            });

            return  (!$agenda->isEmpty()) ?  response()->json($agenda, 201) : ('No se encontraron datos') ;
        } catch (\Throwable $th) {
            return  response()->json('Algo salio mal', 400) ;
        }
    }
}
