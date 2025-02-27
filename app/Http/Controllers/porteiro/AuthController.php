<?php

namespace App\Http\Controllers\porteiro;

use Illuminate\Http\Request;

class AuthController
{
    //Moradores
    public function AuthMorador() {
        return view('porteiro.morador');
    }
    //Vistas
    public function AuthVisita() {
        return view('porteiro.visita');
    }
    //Prestadores
    public function AuthPrestador() {
        return view('porteiro.prestador');
    }
    //Autorizados
    public function AuthAutorizado() {
        return view('porteiro.visita_autorizada');
    }
}
