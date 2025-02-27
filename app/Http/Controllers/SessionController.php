<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function login()
    {
        return view("auth.login");
    }
    public function criarconta(Request $request) {
        $tipoUsuario = $request->tipo_usuario ?? "administrador";
        return view("auth.register", ['tipoUsuario' => $tipoUsuario]);
    }
}
