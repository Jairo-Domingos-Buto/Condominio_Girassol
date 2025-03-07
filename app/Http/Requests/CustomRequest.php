<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'card_id' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'date'],
            'gender' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'user_type' => ['required', 'string', 'max:255'],
            'profile_photo_path' => ['nullable', 'string', 'max:2000'],
        ];

        // Regras de validação adicionais com base no tipo de usuário
        switch ($this->input('user_type')) {
            case 'administrador':
                $rules['shift'] = ['required', 'string', 'max:255'];
                $rules['role'] = ['required', 'string', 'max:255'];
                break;

            case 'morador':
                $rules['apartment'] = ['required', 'string', 'max:255'];
                break;

            case 'porteiro':
                $rules['department'] = ['required', 'string', 'max:255'];
                $rules['shift'] = ['required', 'string', 'max:255'];
                $rules['supervisor'] = ['required', 'string', 'max:255'];
                $rules['address'] = ['required', 'string', 'max:255'];
                break;
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'O campo e-mail deve ser um endereço de e-mail válido.',
            'email.unique' => 'O e-mail informado já está em uso.',
            'password.required' => 'O campo senha é obrigatório.',
            'password.min' => 'A senha deve ter no mínimo 8 caracteres.',
            'password.confirmed' => 'A confirmação da senha não corresponde.',
            'card_id.required' => 'O campo identificação do cartão é obrigatório.',
            'birthdate.required' => 'O campo data de nascimento é obrigatório.',
            'birthdate.date' => 'A data de nascimento deve ser uma data válida.',
            'gender.required' => 'O campo gênero é obrigatório.',
            'phone.required' => 'O campo telefone é obrigatório.',
            'user_type.required' => 'O campo tipo de usuário é obrigatório.',
            'profile_photo_path.max' => 'O caminho da foto do perfil não pode exceder 2000 caracteres.',
            'shift.required' => 'O campo turno é obrigatório para administradores e porteiros.',
            'role.required' => 'O campo papel é obrigatório para administradores.',
            'apartment.required' => 'O campo apartamento é obrigatório para moradores.',
            'department.required' => 'O campo departamento é obrigatório para porteiros.',
            'supervisor.required' => 'O campo supervisor é obrigatório para porteiros.',
            'address.required' => 'O campo endereço é obrigatório para porteiros.',
        ];
    }
}
