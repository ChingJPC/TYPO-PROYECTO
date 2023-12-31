<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipomascota;

class TipomascotaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipomascota = Tipomascota::all();
        return response()->json($tipomascota, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipomascota = new Tipomascota();

        $tipomascota->Id_Tipo_Mascota =$request->Id_Tipo_Mascota;
        $tipomascota->Tipo_Mascota =$request->Tipo_Mascota;
        $tipomascota->id_user =$request->id_user;
        $tipomascota->id_mascota =$request->id_mascota;
        $tipomascota->save();
        return response()->json($tipomascota, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tipomascota = Tipomascota::find($id);
        return response()->json($tipomascota,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
