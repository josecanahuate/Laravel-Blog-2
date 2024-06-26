<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    //relacion uno a muchos de categoria a post
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
