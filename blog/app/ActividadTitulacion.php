<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadTitulacion extends Model
{
    protected $fillable = [
         'nombre', 'duracion' ,'comision', 'cant_estudiante'
    ];


    public function scopeNombre($query, $nombre)
    {
        if($nombre){
        
            return $query->where('nombre', 'LIKE', "%$nombre");
        }
    }

    public function scopeId($query, $id)
    {
        if($id){
        
            return $query->where('id', 'LIKE', "%$id");
        }
    }

}
