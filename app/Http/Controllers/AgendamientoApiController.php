<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendamientoApiController extends Controller
{
    
    public function index()
    {
        $agendamiento = Agendamiento::all();
        return response()->json($agendamiento, 200);
    }

   
    public function store(Request $request)
    {
        $agendamiento = new Agendamiento();
        $agendamiento->Actividades_a_Realizar = $request->Actividades_a_Realizar;
        $agendamiento->Fecha_Agendamiento = $request->Fecha_Agendamiento;
        $agendamiento->Tiempo_Disponible = $request->Tiempo_Disponible;
        $agendamiento->Nombre_Mascota = $request->Nombre_Mascota;
        $agendamiento->save();
        return response()->json($agendamiento, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $agendamiento = Agendamiento::find($id);
        return response()->json($agendamiento, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $agendamiento = Agendamiento::find($id);

        $agendamiento->Actividades_a_Realizar = $request->Actividades_a_Realizar;
        $agendamiento->Fecha_Agendamiento = $request->Fecha_Agendamiento;
        $agendamiento->Tiempo_Disponible = $request->Tiempo_Disponible;
        $agendamiento->Nombre_Mascota = $request->Nombre_Mascota;
        $agendamiento->save();
        return response()->json($agendamiento, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agendamiento = Agendamiento::find($id);
        if($agendamiento){
            $agendamiento->delete();
            return response()->json($null, 200);
        }else{
            return response()->json(['message' => 'no se pudo encontrar el agendamoento'], 404);
          }
    }
}
//pene