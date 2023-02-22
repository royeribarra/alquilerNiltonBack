<?php

namespace App\Models;

use App\Traits\Fullname;
use Illuminate\Database\Eloquent\Model;

class GrupoCliente extends Model
{
    protected $table = 'grupos_cliente';
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'created_user',
        'updated_user'
    ];
}
