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

    /**
     * gerenciar moradores
     */
    public function gerenciarMorador(Request $request, $id = null)
    {
        if (!$id) {
            $user = Resident::with('user')->first();
        } else {
            $user = Resident::with('user')->find($id);
            if (!$user) {
                $user = Resident::with('user')->first();
            }
        }

        if ($request->input('search') || $request->input('filtro')) {
            $searchClass = $this->searchProtected($request);
            $users = $searchClass['users'];
            $user = $searchClass['userId'];
            $searched = $searchClass['searched'];
            $filtro = $searchClass['filtro'];
            return view('administrador.gerenciar_morador', ['users' => $users, 'userId' => $user, 'searched' => $searched, 'filtro' => $filtro]);
        }

        // Retorna os usuarios caso não haja pesquisa
        $users = Resident::with('user')->get();
        return view('administrador.gerenciar_morador', ['users' => $users, 'userId' => $user]);
    }

    /**
     * gerenciar porteiro 
     */
    public function gerenciarPorteiro(Request $request, $id = null)
    {
        if (!$id) {
            $user = Concierge::with('user')->first();
        } else {
            $user = Concierge::with('user')->find($id);
            if (!$user) {
                $user = Concierge::with('user')->first();
            }
        }

        $card = $request->input('card') ?? 'incidente';

        if ($request->ajax()) {
            return view('administrador.components.' . $card)->render();
        }

        if ($request->input('search') || $request->input('filtro')) {
            $searchClass = $this->searchProtected($request);
            $users = $searchClass['users'];
            $user = $searchClass['userId'];
            $searched = $searchClass['searched'];
            $filtro = $searchClass['filtro'];
            return view('administrador.gerenciar_porteiro', ['card' => $card, 'users' => $users, 'userId' => $user, 'searched' => $searched, 'filtro' => $filtro]);
        }

        // Retorna os usuarios caso não haja pesquisa
        $users = Concierge::with('user')->get();
        return view('administrador.gerenciar_porteiro', ['card' => $card, 'users' => $users, 'userId' => $user]);
    }

    /**
     * gerenciar visitas
     */
    public function gerenciarVisita(Request $request, $id = null)
    {
        if (!$id) {
            $user = Visitor::with('user')->first();
        } else {
            $user = Visitor::with('user')->find($id);
            if (!$user) {
                $user = Visitor::with('user')->first();
            }
        }


        if ($request->input('search') || $request->input('filtro')) {
            $searchClass = $this->searchProtected($request);
            $users = $searchClass['users'];
            $user = $searchClass['userId'];
            $searched = $searchClass['searched'];
            $filtro = $searchClass['filtro'];
            return view('administrador.gerenciar_visita', ['users' => $users, 'userId' => $user, 'searched' => $searched, 'filtro' => $filtro]);
        }

        // Retorna os usuarios caso não haja pesquisa
        $users = Visitor::with('user')->orderBy('id', 'ASC')->get();
        return view('administrador.gerenciar_visita', ['users' => $users, 'userId' => $user]);
    }

    /**
     * Atualizar
     */
    public function update(Request $request)
    {
        $model = $this->get_user_type();
        $user_type = $request->input('user_type');
        $modelClass = $model[$user_type];
        $id = $request->input('id');

        $user = $modelClass::with('user')->find($id);

        if ($user_type == "morador") {
            $user->apartment = $request->input('apartment');
        } else if ($user_type == "porteiro") {
            $user->department = $request->input('department');
            $user->shift = $request->input('shift');
            $user->supervisor = $request->input('supervisor');
        } else if ($user_type == "visita") {
        }

        $user->save();

        return redirect()->back()->with('update_user', 'Atualizado com sucesso!');
    }
    /**
     * pesquisar e filtrar
     */
    protected function searchProtected(Request $request)
    {
        /**Elementos a receber
         * Id do usuário relacionado
         * Tipo de usário
         * input search
         * input filtro
         */

        //Função que recebe o tipo de usuário de forma dinámica
        $model = $this->get_user_type();
        $user_type = $request->input('user_type');
        $modelClass = $model[$user_type];

        $query = $modelClass::with('user');

        if ($request->has('search')) {
            
            $search = $request->input('search');
            $query->whereHas('user', function ($q) use ($search) {
                $q->where('name', 'LIKE', $search . '%');
            })->get();
        }

        if ($request->input('filtro') == 'id') {
            $users = $query->orderBy('id', 'ASC')->get();
            $filtro = "ID";
        } else if ($request->input('filtro') == 'nomeAZ') {
            $users = $query->get()->sortBy(function ($user) {
                return $user->user->name;
            });
            $filtro = "Nome (A-Z)";
        } else if ($request->input('filtro') == 'apartamento') {
            $users = $query->orderBy('apartment', 'ASC')->get();
            $filtro = "Nº do Apartamento";
        } else if ($request->input('filtro') == 'departamento') {
            $users = $query->orderBy('department', 'ASC')->get();
            $filtro = "Departamento";
        } else {
            $users = $query->orderBy('id', 'ASC')->get();
            $filtro = "Filtrar";
        }

        $searched = $request->input('search');
        $id = $request->input('id');
        $user =  $modelClass::with('user')->find($id);

        if ($users->isEmpty()) {
            $users =  $modelClass::with('user')->get();
            $searched = "";
        }

        return  [
            'users' => $users,
            'userId' => $user,
            'searched' => $searched,
            'filtro' => $filtro
        ];
    }
}
