<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = [
        'rut',  'nombre','carrera_id', 'apellido_paterno', 'apellido_materno', 'fono', 'email'
    ];

    public function trabajos()
    {
        return $this->belongsToMany(TrabajoTitulacion::class);
    }

    //Scope

    public function scopeNombre($query, $nombre)
    {
        if($nombre){
        
            return $query->where('nombre', 'LIKE', "%$nombre");
        }
    }

    public function scopeRut($query, $rut)
    {
        if($rut){
        
            return $query->where('rut', 'LIKE', "%$rut");
        }
    }
}
