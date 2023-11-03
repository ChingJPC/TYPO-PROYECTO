<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    protected $fillable = [
        'actividades_felinos',
        'actividades_canidos',
        'actividades_aves',
    ];

    public function informacion(){
        return $this->belongsToMany(Informacion::class)->withPivot('id');
    }
    
    public function agendamiento()
    {
       return $this->belongsTo(Agendamiento::class, 'id_agendamiento', 'id');

    }
}

//a