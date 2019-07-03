<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $fillable = [
        'descripcion'
    ];

    public function estudiantes()
    {
        return $this->belongsToMany(Estudiante::class);
    }
}
