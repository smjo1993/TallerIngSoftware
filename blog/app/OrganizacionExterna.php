<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrganizacionExterna extends Model
{
    protected $fillable = [
         'nombre','nombre_tutor'
    ];
    public function scopeOrganizacion($query, $nombre_organizacion)
    {
        if($nombre_organizacion){
        
            return $query
            ->where('nombre','LIKE', "$nombre_organizacion");
        }
    }
}
