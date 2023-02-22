<?php

namespace App\Models;

use App\Traits\Fullname;
use Illuminate\Database\Eloquent\Model;

class Profesion extends Model
{
    protected $table = 'profesiones';
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'created_user',
        'updated_user'
    ];
}
