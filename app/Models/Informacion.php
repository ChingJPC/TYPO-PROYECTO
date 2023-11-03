<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombre Mascota',
        'Raza Mascota',
        'Fecha Nacimiento',
        'Sexo Mascota',
    ];

    public function user(){
        return $this->hasMany(User::class, 'user_id', 'id');
  }

  public function tipomascota(){
        return $this->hasMany(Tipomascota::class, 'id_tipo', 'id');
  }

  public function actividad(){
     return $this->belongsToMany(Actividad::class)->withPivot('id');
 }
}
