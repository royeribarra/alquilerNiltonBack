<?php

namespace App\Models;

use App\Traits\Fullname;
use Illuminate\Database\Eloquent\Model;

class VisitaCliente extends Model
{
    protected $table = 'visitas_cliente';
    protected $fillable = [
        'id',
        'clienteId',
        'fechaVisita',
        'created_user',
        'updated_user'
    ];
}
