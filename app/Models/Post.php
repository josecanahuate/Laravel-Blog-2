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
}
