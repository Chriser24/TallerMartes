<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'apellidos',
        'edad',
        'calificación',
        'nacionalidad',
        'equipo_id',
    ];
    //Relacion donde nos indica a cual pertenece
    public function equipo(){
        return $this->belongsTo(Equipo::class);
    }
}