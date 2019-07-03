<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrabajoTitulacion extends Model
{
    protected $fillable = [
         'estado', 'codigo_actividad', 'codigo_organizacion', 'id_academico'
    ];

    public function estudiantes()
    {
        return $this->belongsToMany(Estudiante::class);
    }
    public function academicos()
    {
        return $this->belongsToMany(Academico::class);
    }

}
