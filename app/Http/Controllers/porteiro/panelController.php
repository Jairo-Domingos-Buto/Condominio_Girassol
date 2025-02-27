<?php

namespace App\Http\Controllers\porteiro;

use Illuminate\Http\Request;

class panelController 
{
    //Painel
    public function PanelPainel()
    {
        return view('porteiro.painel');
    }

    //relatório
    public function PanelRelatorio()
    { 
        return view('porteiro.relatorio');
    }
    //Exibir relatório
    public function PanelRelatorioExibir()
    {
        return view('porteiro.exibir_relatorio');
    }
    //alerta
    public function PanelAlerta()
    {
        return view('porteiro.alerta');
    }
}
