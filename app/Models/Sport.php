<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'descripcion',
        'paisOrigen',
    ];

    public function equipo(){
        return $this->hasMany(Equipo::class);
    }
}