<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academico extends Model
{
    protected $fillable = [
        'rut', 'nombre','apellido_paterno', 'apellido_materno', 'email'
    ];

    public function trabajos()
    {
        return $this->belongsToMany(TrabajoTitulacion::class);
    }


        //Scope

        public function scopeNombre($query, $nombre)
        {
            if($nombre){
            
                return $query->where('nombre', 'LIKE', "%$nombre%");
            }
        }
    
        public function scopeRut($query, $rut)
        {
            if($rut){
            
                return $query->where('rut', 'LIKE', "%$rut%");
            }
        }
}
