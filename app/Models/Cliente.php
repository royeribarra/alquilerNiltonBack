<?php

namespace App\Models;

use App\Traits\Fullname;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = [
        'id',
        'profesionId',
        'grupoClienteId',
        'tipoDocumentoId',
        'tipoClienteId',
        'nombres',
        'apellidos',
        'telefono',
        'nombreEmpresa',
        'credito',
        'documentoIdentidad',
        'created_user',
        'updated_user'
    ];

    public function calificacion() {
        return $this->hasOne(CalificacionCliente::class, 'clienteId', 'id');
    }

    public function grupo() {
        return $this->belongsTo(GrupoCliente::class, 'grupoClienteId', 'id');
    }

    public function profesion() {
        return $this->hasOne(Profesion::class, 'id', 'profesionId');
    }

    public function tipoCliente() {
        return $this->belongsTo(TipoCliente::class, 'tipoClienteId', 'id');
    }

    public function tipoDocumento() {
        return $this->hasOne(TipoDocumento::class, 'id', 'tipoDocumentoId');
    }

    public function ventas() {
        return $this->hasMany(Registro::class, 'clienteId', 'id');
    }
}
