<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'date-creation',
        'promedio',
        'sport_id',
        ];
          //Relacion donde nos indica a cual pertenece
        public function sport(){
            return $this->belongsTo(Sport::class);
        }
        //Relacion donde nos indica cuales les pertenece
        public function jugador(){
            return $this->hasMany(Jugador::class);
        }
}