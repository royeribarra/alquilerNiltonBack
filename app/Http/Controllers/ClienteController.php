<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DireccionClienteController;
use App\Models\Cliente;

class ClienteController extends Controller
{
    protected $direccionClienteService;

    public function __construct(DireccionClienteController $direccionCliente)
    {
        $this->direccionClienteService = $direccionCliente;
    }

    public function getAuthenticated() 
    {
        $usuario = \Auth::user();
        return $usuario;
    }

    public function all()
    {
        $clientes = Cliente::paginate(10);
        return $clientes;
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $cliente = Cliente::where('documentoIdentidad', $request->documentoIdentidad)
                            ->orWhere('email', $request->email)
                            ->first();
        if($cliente){
            return response()->json([
                'state' => false,
                'message' => "El cliente con documento $request->documentoIdentidad ya existe."
            ]);
        }

        $newCliente = Cliente::create($data);

        return response()->json([
            'cliente' => $newCliente,
            'message' => "Cliente creado correctamente.",
            'state' => true
        ]);
    }

    public function addAddress(Request $request, $clienteId)
    {
        $data = $request->all();
        $newAddress = $this->direccionClienteService->store($data, $clienteId);
        return $newAddress;
    }
}
