<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesion;

class ProfesionController extends Controller
{

    public function getAuthenticated() 
    {
        $user = \Auth::user();
        return $user;
    }

    public function allToSelect()
    {
        $all = Profesion::all();
        return $all;
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $new = Profesion::create($data);

        return response()->json([
            'state' => true,
            'message' => "Profesion creada correctamente."
        ]);
    }

}
