<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoDocumento;

class TipoDocumentoController extends Controller
{

    public function getAuthenticated() 
    {
        $usuario = \Auth::user();
        return $usuario;
    }

    public function allToSelect()
    {
        $tiposDocumento = TipoDocumento::all();
        return $tiposDocumento;
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $newTipoDocumento = TipoDocumento::create($data);

        return response()->json([
            'state' => true,
            'message' => "Tipo de documento creado correctamente."
        ]);
    }

}
