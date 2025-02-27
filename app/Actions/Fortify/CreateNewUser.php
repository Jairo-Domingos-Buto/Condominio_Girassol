<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Admin;
use App\Models\Resident;
use App\Models\Concierge;
use App\Models\Visitor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\DB;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            'card_id' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'date'],
            'gender' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'user_type' => ['required', 'string', 'max:255'],
            'profile_photo_path' => ['nullable', 'string', 'max:2000'],
        ])->validate();

        DB::beginTransaction();

        try {
            // Criar o usuário
            $user = User::create([
                'name' => $input['name'],
                'card_id' => $input['card_id'],
                'birthdate' => $input['birthdate'],
                'gender' => $input['gender'],
                'phone' => $input['phone'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'user_type' => $input['user_type'],
                'profile_photo_path' => $input['profile_photo_path'] ?? null,
            ]);

            // Mapeamento de tipos de usuário para modelos

            if ($input['user_type'] == "administrador") {
                Admin::create([
                    'user_id' => $user->id,
                    'shift' => $input['shift'],
                    'role' => $input['role'],
                ]);
            } else if ($input['user_type'] == "morador") {
                Resident::create([
                    'user_id' => $user->id,
                    'apartment' => $input['apartment'],
                ]);
            } else if ($input['user_type'] == "porteiro") {
                Concierge::create([
                    'user_id' => $user->id,
                    'department' => $input['department'],
                    'shift' => $input['shift'],
                    'supervisor' => $input['supervisor'],
                    'address' => $input['address'],
                ]);
            } else if ($input['user_type'] == "visita") {
                Visitor::create([
                    'user_id' => $user->id,
                ]);
            }

            DB::commit();

            return $user;
            
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
