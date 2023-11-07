<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actividad;

class ActividadApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actividad = Actividad::all();
        return response()->json($actividad, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $actividad = new Actividad();

        $actividad->Id_Actividad =$request->Id_Actividad;
        $actividad->Actividades_felidos =$request->Actividades_felidos;
        $actividad->Actividades_calidos =$request->Actividades_calidos;
        $actividad->Actividades_aves =$request->Actividades_aves;
        $actividad->save();
        return response()->json($actividad, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $actividad = Actividad::find($id);
        return response()->json($actividad,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $actividad = Actividad::find($id);

        $actividad->Id_Actividad =$request->Id_Actividad;
        $actividad->Actividades_felidos =$request->Actividades_felidos;
        $actividad->Actividades_calidos =$request->Actividades_calidos;
        $actividad->Actividades_aves =$request->Actividades_aves;
        $actividad->save();
        return response()->json($actividad, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agendamiento = Agendamiento::find($id); 
        if($agendamiento){
            $agendamiento->delete();
            return response()->json(null, 204);
        }else{
            return response()->json(['message' => 'No se pudo eliminar la mascota'], 404);
        }
    }
}
