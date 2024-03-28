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
}
