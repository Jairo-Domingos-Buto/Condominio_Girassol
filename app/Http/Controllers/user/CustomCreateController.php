<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomRequest;
use App\Models\User;
use App\Models\Admin;
use App\Models\Resident;
use App\Models\Concierge;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class CustomCreateController extends Controller
{
    /**
     * Validate and create a newly registered user.
     *
     * @param CustomRequest $request
     */
    public function create(CustomRequest $request)
    {
        DB::beginTransaction();

        try {
            // Criar o usuário
            $user = User::create([
                'name' => $request['name'],
                'card_id' => $request['card_id'],
                'birthdate' => $request['birthdate'],
                'gender' => $request['gender'],
                'phone' => $request['phone'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'user_type' => $request['user_type'],
                'profile_photo_path' => $request['profile_photo_path'],
            ]);

            // Mapeamento de tipos de usuário para modelos
            if ($request['user_type'] == "administrador") {
                Admin::create([
                    'user_id' => $user->id,
                    'shift' => $request['shift'],
                    'role' => $request['role'],
                ]);
            } else if ($request['user_type'] == "morador") {
                Resident::create([
                    'user_id' => $user->id,
                    'apartment' => $request['apartment'],
                ]);
            } else if ($request['user_type'] == "porteiro") {
                Concierge::create([
                    'user_id' => $user->id,
                    'department' => $request['department'],
                    'shift' => $request['shift'],
                    'supervisor' => $request['supervisor'],
                    'address' => $request['address'],
                ]);
            } else if ($request['user_type'] == "visita") {
                Visitor::create([
                    'user_id' => $user->id,
                ]);
            }

            DB::commit();

            return redirect()->back()->with('status_create', 'Conta Criada com sucesso!');
        }  catch (\Exception $e) {
            DB::rollBack();            
        }
    }
}
