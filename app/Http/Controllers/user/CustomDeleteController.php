<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomDeleteController extends Controller
{
    //
 
    public function destroy(Request $request)
    {
        $apagarId = $request->input('apagarId');

        $user = User::find($apagarId);

        if($user) {
            $user->delete();
            return redirect()->back()->with('status_delete', 'Usuário apagado com sucesso');
        }

        return redirect()->back()->with('status_delete', 'Usuário não encontrado');
    }
}
