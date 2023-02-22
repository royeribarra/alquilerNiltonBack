<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrupoCliente;

class GrupoClienteController extends Controller
{

    public function getAuthenticated() 
    {
        $user = \Auth::user();
        return $user;
    }

    public function allToSelect()
    {
        $all = GrupoCliente::all();
        return $all;
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $new = GrupoCliente::create($data);

        return response()->json([
            'state' => true,
            'message' => "Tipo de documento creado correctamente."
        ]);
    }

}
