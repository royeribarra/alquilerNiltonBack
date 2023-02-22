<?php

namespace App\Models;

use App\Traits\Fullname;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'created_user',
        'updated_user'
    ];
}
