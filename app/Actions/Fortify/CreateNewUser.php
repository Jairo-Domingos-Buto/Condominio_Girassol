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

    protected function getConditionalRules(string $userType): array
    {
        $rules = [];

        if ($userType == "administrador") {
            $rules = [
                'shift' => ['required', 'string', 'max:255'],
                'role' => ['required', 'string', 'max:255'],
            ];
        } elseif ($userType == "morador") {
            $rules = [
                'apartment' => ['required', 'string', 'max:255'],
            ];
        } elseif ($userType == "porteiro") {
            $rules = [
                'department' => ['required', 'string', 'max:255'],
                'shift' => ['required', 'string', 'max:255'],
                'supervisor' => ['required', 'string', 'max:255'],
                'address' => ['required', 'string', 'max:255'],
            ];
        }

        return $rules;
    }


    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, array_merge([
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
        ], $this->getConditionalRules($input['user_type'])), [
            'name.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'O campo e-mail deve ser um endereço de e-mail válido.',
            'email.unique' => 'O e-mail informado já está em uso.',
            'password.required' => 'O campo senha é obrigatório.',
            'password.min' => 'A senha deve ter no mínimo 8 caracteres.',
            'password.confirmed' => 'A confirmação da senha não corresponde.',
            'terms.accepted' => 'Você deve aceitar os termos e condições.',
            'card_id.required' => 'O campo identificação do cartão é obrigatório.',
            'birthdate.required' => 'O campo data de nascimento é obrigatório.',
            'birthdate.date' => 'A data de nascimento deve ser uma data válida.',
            'gender.required' => 'O campo gênero é obrigatório.',
            'phone.required' => 'O campo telefone é obrigatório.',
            'user_type.required' => 'O campo tipo de usuário é obrigatório.',
            'profile_photo_path.max' => 'O caminho da foto do perfil não pode exceder 2000 caracteres.',
            'shift.required' => 'O campo turno é obrigatório para administradores e porteiros.',
            'role.required' => 'O campo patente é obrigatório para administradores.',
            'apartment.required' => 'O campo apartamento é obrigatório para moradores.',
            'department.required' => 'O campo departamento é obrigatório para porteiros.',
            'supervisor.required' => 'O campo supervisor é obrigatório para porteiros.',
            'address.required' => 'O campo endereço é obrigatório para porteiros.',
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
