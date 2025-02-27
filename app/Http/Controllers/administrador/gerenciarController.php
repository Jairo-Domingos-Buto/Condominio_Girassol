<?php

namespace App\Http\Controllers\administrador;

use App\Models\Concierge;
use App\Models\Resident;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Http\Request;

class gerenciarController
{
    protected function get_user_type()
    {
        return [
            'morador'   => Resident::class,
            'visita'    => Visitor::class,
            'porteiro' => Concierge::class,
        ];
    }

    //gerenciar moradores
    public function gerenciarMorador()
    {

        $users = Resident::with('user')->orderBy('id', 'DESC')->paginate(4);

        $user = Resident::with('user')->find(1);

        return view('administrador.gerenciar_morador', ['users' => $users, 'userId' => $user]);
    }

    //gerenciar porteiro 
    public function gerenciarPorteiro(Request $request)
    {
        $card = $request->input('card') ?? 'incidente';

        if ($request->ajax()) {
            return view('administrador.components.' . $card)->render();
        }

        $users = Concierge::with('user')->orderBy('id', 'DESC')->paginate(4);

        $user = Concierge::with('user')->find(3);

        return view('administrador.gerenciar_porteiro', ['card' => $card, 'users' => $users, 'userId' => $user]);
    }


    //gerenciar visitas
    public function gerenciarVisita()
    {
        $users = Visitor::with('user')->orderBy('id', 'DESC')->paginate(4);

        $user = Visitor::with('user')->find(1);

        return view('administrador.gerenciar_visita', ['users' => $users, 'userId' => $user]);
    }

    public function update(Request $request)
    {
        $model = $this->get_user_type();
        //$user_type = $request->input('user_type');
        $user_type = 'porteiro';
        $modelClass = $model[$user_type];

        $user = $modelClass::with('user')->find(1);

        if ($user_type == "morador") {
            $user->apartment = $request->input('apartment');
        }
        else if ($user_type == "porteiro") {
            $user->department = $request->input('department');
            $user->shift = $request->input('shift');
            $user->supervisor = $request->input('supervisor');
        }
        else if ($user_type == "visita") {
        }

        $user->save();

        return redirect()->back()->with('update_user', 'Atualizado com sucesso!');
    }
}
