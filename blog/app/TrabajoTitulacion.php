<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrabajoTitulacion extends Model
{
    protected $fillable = [
        'nombre','fecha_inicio', 'fecha_termino','fecha_examen_titulo','estado', 'id_actividad', 'id_organizacion', 'id_academico','nota','semestre','numero'
    ];

    public function estudiantes()
    {
        return $this->belongsToMany(Estudiante::class);
    }
    public function academicos()
    {
        return $this->belongsToMany(Academico::class);
    }

    public function scopeNumero($query)
    {
        
            return $query->whereNull('numero');
    }

    public function scopePoseeNumero($query)
    {
        
            return $query->where('numero', '>', 0);
    }

    public function scopeSiEstado($query)
    {
        
            return $query->where('estado', 'NOT LIKE', "FINALIZADA");
    }

    public function scopeNoEstado($query, $estado)
    {
        if($estado){
        
            return $query->where('estado', 'NOT LIKE', "$estado");
        }
    }
}
