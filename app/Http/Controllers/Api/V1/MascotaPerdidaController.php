<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Mascota_perdida;
use Illuminate\Http\Request;

class MascotaPerdidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascota = Mascota_perdida::all();
        return response()->json($mascota);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mascota = new Mascota_perdida;
        $mascota->nombre = $request->nombre;
        $mascota->edad = $request->edad;
        $mascota->raza = $request->raza;
        $mascota->color = $request->color;
        $mascota->statura = $request->statura;
        $mascota->dias_extraviado = $request->dias_extraviado;
        $mascota->lugar = $request->lugar;
        $mascota->genero = $request->genero;
        $mascota->descripcion = $request->descripcion;
        $mascota->nombre_dueno = $request->nombre_dueno;
        $mascota->numero_dueno = $request->numero_dueno;
        $mascota->tipo_mascota = $request->tipo_mascota;
        // $mascota->foto = $request->foto;

        $path = $request->foto->store('public/mascota');
        $mascota->foto = $path;        
        $mascota->save();

        return response()->json($mascota, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mascota_perdida  $mascota_perdida
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota_perdida $mascota_perdida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mascota_perdida  $mascota_perdida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mascota_perdida $mascota_perdida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mascota_perdida  $mascota_perdida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mascota_perdida $mascota_perdida)
    {
        //
    }
}
