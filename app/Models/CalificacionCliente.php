<?php

namespace App\Models;

use App\Traits\Fullname;
use Illuminate\Database\Eloquent\Model;

class CalificacionCliente extends Model
{
    protected $table = 'calificaciones_clientes';
    protected $fillable = [
        'id',
        'clienteId',
        'tipoClienteId',
        'califacion',
        'created_user',
        'updated_user'
    ];
}
