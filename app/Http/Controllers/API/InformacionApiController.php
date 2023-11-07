<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infomascota;

class InfomascotaApiController extends Controller
{
   
    public function index()
    {
        $infomascota = Infomascota::all();
        return response()->json($infomascota, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $infomascota = new Infomascota();
            $infomascota->Id_Mascota =$request->Id_Mascota;
            $infomascota->Id_Tipo_Mascota =$request->Id_Tipo_Mascota;
            $infomascota->Nombre =$request->Nombre;
            $infomascota->Raza =$request->Raza;
            $infomascota->Edad =$request->Edad; 
            $infomascota->Peso =$request->Peso;
            $infomascota->save();
            return response()->json($infomascota, 201);  
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $infomascota = Infomascota::find($id);
        return response()->json($infomascota,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $infomascota = Infomascota::informatica($id);
            $infomascota->Id_Mascota =$request->Id_Mascota;
            $infomascota->Id_Tipo_Mascota =$request->Id_Tipo_Mascota;
            $infomascota->Nombre =$request->Nombre;
            $infomascota->Raza =$request->Raza;
            $infomascota->Edad =$request->Edad; 
            $infomascota->Peso =$request->Peso;
            $infomascota->update();
            return response()->json($infomascota, 201); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
    }
}
