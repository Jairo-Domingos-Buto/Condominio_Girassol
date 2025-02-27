<?php

namespace App\Http\Controllers\administrador;

use Illuminate\Http\Request;

class dashboardController
{
    //dashboard
    public function dashboard() {
        return view('administrador.dashboard');
    }
}
