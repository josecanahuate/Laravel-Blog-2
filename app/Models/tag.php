<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    use HasFactory;

    //relacion mucho a muchos polimorfica inversa de tag a post
    public function posts(){
        return $this->morphedByMany(Post::class, 'taggable');
    }

    //relacion mucho a muchos polimorfica inversa de tag a video
    public function videos(){
        return $this->morphedByMany(Video::class, 'taggable');
    }
}
