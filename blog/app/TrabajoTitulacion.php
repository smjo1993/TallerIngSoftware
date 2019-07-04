<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrabajoTitulacion extends Model
{
    protected $fillable = [
        'nombre','fecha_inicio', 'fecha_termino','fecha_examen_titulo','estado', 'id_actividad', 'id_organizacion', 'id_academico','nota','semestres'
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
