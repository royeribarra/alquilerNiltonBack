<?php

namespace App\Http\Controllers;

use App\Services\Contracts\UserInterface as UserService;
use Illuminate\Http\Request;
use App\Models\Rol;
use App\Models\User;

class UserController extends Controller
{
    protected $userService;

    public function __construct(
        UserService $user
    )
    {
        $this->userService = $user;
    }

    public function getAuthenticated() 
    {
        $usuario = \Auth::user();
        return $usuario;
    }

    public function getUsersTable()
    {
        $usuarios = User::paginate(10);
        return $usuarios;
    }

    public function get(Request $request) 
    {
        $req = $request->all();
        $users = $this->userService->paginate(15, $req);    
        return response()->json($users);
    }

    public function store(Request $request) 
    {
        $existeUser = User::where('email', $request->email)->first();
        if($existeUser)
        {
            return response()->json([
                'state'=> false,
                'message' => 'Usuario con este email ya existe.'
            ]);
        }
        $this->userService->create($request->all());           
        return response()->json([
            'state'=> 1,
            'message' => 'Usuario creado correctamente.'
        ]);
    }
    
    public function loginCliente(Request $request){
        return response()->json([
            'state'=> 200,
            'message' => 'Login correcto',
            'data' => $request->all()
        ]);
    }

    public function show($id) {
        $user = $this->userService->find($id);
        return response()->json($user);
    }

    public function update($id, Request $request) {
        $this->userService->update($request->all(), $id);
        return response()->json([
            'state'=> 1,
            'message' => 'Usuario actualizado correctamente.'
        ]);
    }

    public function getProfiles(){
        $roles = Rol::all();
        $profiles = $this->userService->getProfiles();
        return $roles;
    }

    public function logout() {
        $user = auth()->user();
        $user->tokens->each(function($token, $key) {
            $token->delete();
        });
    }

    public function cambiarEstado($id)
    {
        $user = User::find($id);
        $user->update([
            'state' => !$user->state
        ]);
        return response()->json([
            'state'=> true,
            'message' => "Usuario actualizado"
        ]);
    }
}
