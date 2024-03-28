<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;

    //relacion muchos a muchos del Modelo Permiso a Role
    public function roles(){
        $this->belongsToMany(Role::class);
    }
}
