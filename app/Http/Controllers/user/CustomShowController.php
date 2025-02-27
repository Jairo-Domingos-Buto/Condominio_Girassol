<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Concierge;
use App\Models\Resident;
use App\Models\User;
use App\Models\Visitor;
use Exception;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class CustomShowController extends Controller
{
    //

    protected function get_user_type()
    {
        return [
            'morador'   => Resident::class,
            'visita'    => Visitor::class,
            'porteiro' => Concierge::class,
            'admin'     => Admin::class,
        ];
    }

    
    public function show()
    {
        $users = User::orderBy('id', 'DESC')->paginate(4);

        return redirect()->back()->with(['users' => $users]);
    }

    public function showId(Request $request, $id)
    {
        try {
            // Obter o mapeamento
            $model = $this->get_user_type();
            $user_type = $request->input('user_type');
            $modelClass = $model[$user_type];

            $user = $modelClass::with('user')->find($id);

            //verificar se o id existe na tabela  $modelClass
            if (!$user) {
            }

            return redirect()->back()->with(['users' => $user, 'showId' => 'usuario encontrado']);
        } catch (Exception $e) {
            return redirect()->back()->with('showId', 'usuario não encontrado');
        }
    }
}
