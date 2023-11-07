<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informacion;

class InformacionApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informacion = Informacion::all();
        return response()->json($informacion, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $informacion = new Informacion();
            $informacion->Id_Mascota =$request->Id_Mascota;
            $informacion->Id_Tipo_Mascota =$request->Id_Tipo_Mascota;
            $informacion->Nombre =$request->Nombre;
            $informacion->Raza =$request->Raza;
            $informacion->Edad =$request->Edad; 
            $informacion->Peso =$request->Peso;
            $informacion->save();
            return response()->json($informacion, 201);  
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $informacion = Informacion::find($id);
        return response()->json($informacion,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
            $informacion = Informacion::informatica($id);
            $informacion->Id_Mascota =$request->Id_Mascota;
            $informacion->Id_Tipo_Mascota =$request->Id_Tipo_Mascota;
            $informacion->Nombre =$request->Nombre;
            $informacion->Raza =$request->Raza;
            $informacion->Edad =$request->Edad; 
            $informacion->Peso =$request->Peso;
            $informacion->update();
            return response()->json($informacion, 201); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $informacion = Informacion::find($id);
        if($informacion){
        $informacion->delete();
        return response()->json($informacion, 200);
    }else{
        return response()->json(['message' => 'Informacion de Mascoto no encontrada'], 404); 
    }
    }
}
