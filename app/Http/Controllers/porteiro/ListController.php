<?php

namespace App\Http\Controllers\porteiro;

use Illuminate\Http\Request;
 
class ListController 
{
    //Lista de Moradores
    public function ListMorador() {
        return view('porteiro.lista_morador');
    }
    //Lista de Vistas
    public function ListVisita() {
        return view('porteiro.lista_visita');
    }
    //Lista de Prestadores
    public function ListPrestador() {
        return view('porteiro.lista_prestador');
    }
}
