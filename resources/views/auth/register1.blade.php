<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <h1>Criar conta</h1>
            <div class="line">
                <x-label for="tipo_usuario" value="{{ __('Tipo de usuário') }}" />
                <select name="user_type" id="tipoUsuario" class="select" onchange="getUserType(this)">
                    <option value="administrador">Administrador</option>
                    <option value="morador">Morador</option>
                    <option value="porteiro">Porteiro</option>
                    <option value="visita">Visita</option>
                </select>
            </div>

            <div>
                <x-label for="name" value="{{ __('Nome completo') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="data_nasc" value="{{ __('Data de nascimento') }}" />
                <x-input id="data_nasc" class="block mt-1 w-full" type="date" name="birthdate" :value="old('data_nasc')" required />
            </div>

            <div class="mt-4">
                <x-label for="bilhete" value="{{ __('Nº do Bilhete') }}" />
                <x-input id="bilhete" class="block mt-1 w-full" type="text" name="card_id" :value="old('bilhete')" required />
            </div>

            <div class="mt-4">
                <x-label for="genero" value="{{ __('Gênero') }}" />
                <div class="flex items-center">
                    <x-input id="masculino" class="block mt-1 me-1" type="radio" name="gender" value="masculino" required />
                    <x-label for="masculino" value="{{ __('Masculino') }}" />
                    <x-input id="feminino" class="block mt-1 ms-4 me-1" type="radio" name="gender" value="feminino" required />
                    <x-label for="feminino" value="{{ __('Feminino') }}" />
                </div>
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="telefone" value="{{ __('Telefone') }}" />
                <x-input id="telefone" class="block mt-1 w-full" type="tel" name="phone" :value="old('telefone')" required />
            </div>

            <!-- Campos adicionais para tipos de usuário específicos -->
            @if ($tipoUsuario == 'administrador')
            <div class="mt-4">
                <x-label for="turno" value="{{ __('Turno') }}" />
                <select name="shift" id="turno" class="block mt-1 w-full select" required>
                    <option value="manhã">Manhã</option>
                    <option value="tarde">Tarde</option>
                    <option value="noite">Noite</option>
                </select>
            </div>
            <div class="mt-4">
                <x-label for="patente" value="{{ __('Patente') }}" />
                <select name="role" id="patente" class="block mt-1 w-full select" required>
                    <option value="admin principal">Admin Principal</option>
                    <option value="admin secundário">Admin Secundário</option>
                </select>
            </div>
            @elseif ($tipoUsuario == 'morador')
            <div class="mt-4">
                <x-label for="apartamento" value="{{ __('Apartamento') }}" />
                <x-input id="apartamento" class="block mt-1 w-full" type="text" name="apartment" :value="old('apartamento')" required />
            </div>
            @elseif ($tipoUsuario == 'porteiro')
            <div class="mt-4">
                <x-label for="turno" value="{{ __('Turno') }}" />
                <select name="shift" id="turno" class="block mt-1 w-full select" required>
                    <option value="manhã">Manhã</option>
                    <option value="tarde">Tarde</option>
                    <option value="noite">Noite</option>
                </select>
            </div>
            <div class="mt-4">
                <x-label for="departamento" value="{{ __('Departamento') }}" />
                <select name="department" id="departamento" class="block mt-1 w-full select" required>
                    <option value="primeiro portão">Primeiro Portão</option>
                    <option value="segundo portão">Segundo Portão</option>
                </select>
            </div>
            <div class="mt-4">
                <x-label for="supervisor" value="{{ __('Supervisor') }}" />
                <x-input id="supervisor" class="block mt-1 w-full" type="text" name="supervisor" :value="old('supervisor')" required />
            </div>
            <div class="mt-4">
                <x-label for="morada" value="{{ __('Morada') }}" />
                <x-input id="morada" class="block mt-1 w-full" type="text" name="address" :value="old('morada')" required />
            </div>
            @endif

            <div class="mt-4">
                <x-label for="password" value="{{ __('Senha') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirmar Senha') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-label for="terms">
                    <div class="flex items-center">
                        <x-checkbox name="terms" id="terms" required />
                        <div class="ms-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-label>
            </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Já registrado?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Criar conta') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var userType = document.querySelector('#tipoUsuario')

        var returnedValue = "{{$tipoUsuario}}"

        userType.value = `${returnedValue}` 
    })

    function getUserType(userType) {
        var valuegeted = userType.value
        location.href = `/criarconta?tipo_usuario=${valuegeted}`
    }
</script> 