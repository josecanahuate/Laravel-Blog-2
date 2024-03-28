<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    //relacion muchos a muchos de las tablas roles a users
    public function users(){
        $this->belongsToMany(User::class);
    }

    //relacion muchos a muchos de las tablas roles a permisos
    public function permisos(){
        $this->belongsToMany(Permiso::class);
    }
}
