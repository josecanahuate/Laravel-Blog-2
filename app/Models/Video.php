<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    //relacion uno a muchos inversa de videos a user
    public function user(){
        return $this->belongsTo(User::class);
    }

    //relacion uno a muchos polimorfica de video a comments
    public function comments() {
        return $this->morphMany(Comment::class,'commentable');
    }

    //relacion muchos a muchos polimorfica de video a tag
    public function tags() {
        return $this->morphToMany(tag::class,'taggable');
    }
}
