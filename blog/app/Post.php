<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'user_id','category','name', 'slug', 'excerpt','body','status','file'
    ];
    //array que guarda datos de manera masiva

    public function user()
    {
        return $this->belongsTo(User::class);
    }//relaciona al post con un usuario 1:1

    public function category()
    {
        return $this->belongsTo(Category::class);
    }//relaciona al post con una categoria 1:1

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }//relaciona a un post ocn muchas etiquetas N:N
}
