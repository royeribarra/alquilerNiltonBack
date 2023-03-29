<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'created_user',
        'updated_user'
    ];
}
