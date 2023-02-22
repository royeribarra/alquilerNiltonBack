<?php

namespace App\Models;

use App\Traits\Fullname;
use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $table = 'tipos_documento';
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'created_user',
        'updated_user'
    ];
}
