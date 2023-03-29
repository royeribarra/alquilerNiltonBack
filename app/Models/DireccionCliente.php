<?php

namespace App\Models;

use App\Traits\Fullname;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DireccionCliente extends Model
{
    use SoftDeletes;
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