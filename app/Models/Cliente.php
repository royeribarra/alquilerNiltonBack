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
        'nombres',
        'apellidos',
        'telefono',
        'nombreEmpresa',
        'credito',
        'documentoIdentidad',
        'created_user',
        'updated_user'
    ];

    public function profesion() {
        return $this->hasOne(Profesion::class, 'id', 'profesionId');
    }

    public function grupo() {
        return $this->hasOne(GrupoCliente::class, 'id', 'grupoClienteId');
    }

    public function documento() {
        return $this->hasOne(TipoDocumento::class, 'id', 'tipoDocumentoId');
    }
}
