<?php

namespace App\Http\Controllers\administrador;

use Illuminate\Http\Request;

class cadastroController
{
    //cadasto moradores
    public function cadastrarMorador() {
        return view('administrador.cadastrar_morador');
    }
    //cadasto moradores
    public function cadastrarPorteiro() {
        return view('administrador.cadastrar_porteiro');
    } 
    //cadasto moradores
    public function cadastrarVisita() {
        return view('administrador.cadastrar_visita');
    }

  
}
