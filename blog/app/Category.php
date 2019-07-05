<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'slug', 'body'
    ];
    //array que guarda datos de manera masiva

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
