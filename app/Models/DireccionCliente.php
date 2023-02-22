<?php

namespace App\Models;

use App\Traits\Fullname;
use Illuminate\Database\Eloquent\Model;

class DireccionCliente extends Model
{
    protected $table = 'direcciones_cliente';
    protected $fillable = [
        'id',
        'clienteId',
        'pais',
        'departamento',
        'provincia',
        'distrito',
        'tipoDireccion',
        'codigoPostal',
        'direccion1',
        'direccion2',
        'created_user',
        'updated_user'
    ];

    public function cliente() {
        return $this->belongsTo(Cliente::class, 'clienteId', 'id');
    }
}