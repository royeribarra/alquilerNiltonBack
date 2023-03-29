<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function getAuthenticated() 
    {
        $usuario = \Auth::user();
        return $usuario;
    }

    public function all()
    {
        $productos = Producto::all();
        return $productos;
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $newProducto = Producto::create($data);

        return response()->json([
            'state' => true,
            'message' => "Rol creado correctamente"
        ]);
    }

}
