<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //relacion uno a muchos (inversa) de post a user
    public function user(){
        return $this->belongsTo(User::class);
    }

    //relacion inversa entre post y categoria
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    //relacion uno a uno polimorfica de post a images
    public function image() {
        return $this->morphOne(Image::class, 'imageable');
    }

    //relacion uno a muchos polimorfica de post a comments
    public function comments() {
        return $this->morphMany(Comment::class,'commentable');
    }

    //relacion muchos a muchos polimorfica de post a tag
    public function tags() {
        return $this->morphToMany(tag::class,'taggable');
    }
}
