<?php

namespace App\Http\Controllers\administrador;

use Illuminate\Http\Request;

class sistemaController
{
    //Relatóio Completo
    public function relatorio() {
        return view('administrador.relatorio_completo');
    }

    //Configuration
    public function configuration() {
        return view('administrador.configuration');
    }

  
}
