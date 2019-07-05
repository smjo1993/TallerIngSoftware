<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name', 'slug'
    ];
    //array que guarda datos de manera masiva

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
    //N:N
}
