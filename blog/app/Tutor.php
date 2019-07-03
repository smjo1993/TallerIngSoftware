<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $fillable = [
        'rut', 'nombre', 'codigo_organizacion'
    ];
}
