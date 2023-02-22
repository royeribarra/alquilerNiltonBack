<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{

    public function getAuthenticated() 
    {
        $usuario = \Auth::user();
        return $usuario;
    }

    public function all()
    {
        $roles = Rol::paginate(10);
        return $roles;
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $newRol = Rol::create($data);

        return response()->json([
            'state' => true,
            'message' => "Rol creado correctamente"
        ]);
    }

}
