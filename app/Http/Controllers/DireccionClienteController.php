<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DireccionCliente;

class DireccionClienteController extends Controller
{

    public function getAuthenticated() 
    {
        $usuario = \Auth::user();
        return $usuario;
    }

    public function allFromAClient($clienteId)
    {
        $direcciones = DireccionCliente::with('cliente')->where('clienteId', $clienteId)->paginate(10);
        return $direcciones;
    }

    public function allToSelect()
    {
        $tiposDocumento = DireccionCliente::all();
        return $tiposDocumento;
    }

    public function store($data = [], $clienteId)
    {
        $newAddress = DireccionCliente::create($data);
        $newAddress->update(['clienteId' => $clienteId]);

        return response()->json([
            'state' => true,
            'address' => $newAddress,
            'message' => "Dirección creada correctamente."
        ]);
    }

    public function update(Request $request, $direccionId)
    {
        $data = $request->all();
        $address = DireccionCliente::find($direccionId);
        $address->update($data);

        return response()->json([
            'state' => true,
            'message' => "Dirección actualiza correctamente."
        ]);
    }

    public function delete($direccionId)
    {
        $address = DireccionCliente::find($direccionId);
        $address->delete();
        return response()->json([
            'state' => true,
            'message' => "Dirección eliminada correctamente."
        ]);
    }

}
