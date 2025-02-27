<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta</title>
    <link rel="stylesheet" href="{{ asset('../css/criarConta.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/personalizado.css') }}">

</head>

<body>
    <section id="container">
        <!--inicio mensagem-->
        @if(session('erro'))
        <p class="message errorMessage">{{session('erro')}}</p>
        @endif
        <!--fim mensagem-->
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <h1>Criar conta</h1>
            <div class="line">
                <label for="user_type">Tipo de usuário:</label>
                <select name="user_type" id="tipoUsuario" class="select" onchange="getUserType(this)" required>
                    <option value="administrador">Administrador</option>
                    <option value="morador">Morador</option>
                    <option value="porteiro">Porteiro</option>
                    <option value="visita">Visita</option>
                </select>
            </div>

            <div class="campos">
                <div class="wrap full">
                    <label for="name">Nome completo</label>
                    <input type="text" name="name" autofocus autocomplete="name" id="name" required>
                </div>
                <div class="wrap">
                    <label for="birthdate">Data de nascimento</label>
                    <input type="date" name="birthdate" id="birthdate" required>
                </div>
                <div class="wrap full">
                    <label for="card_id">Nº do Bilhete</label>
                    <input type="text" id="card_id" name="card_id" required>
                </div>
                <div class="wrap">
                    <label for="">Gênero</label>
                    <div class="line">
                        <span>
                            <label for="masculino">Masculino</label>
                            <input type="radio" name="gender" id="masculino" value="masculino" required>
                        </span>
                        <span>
                            <label for="feminino">Feminino</label>
                            <input type="radio" name="gender" id="feminino" value="feminino" required>
                        </span>
                    </div>
                </div>
                <div class="wrap">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="wrap">
                    <label for="phone">Telefone</label>
                    <input type="tel" name="phone" id="phone" required>
                </div>
                <!--Direcionado ao usuario-->

                <!--Administrador-->
                @if ($tipoUsuario == 'administrador')
                <div class="wrap">
                    <label for="shift">Turno</label>
                    <select name="shift" id="shift" class="select" required>
                        <option value="manhã">Manhã</option>
                        <option value="tarde">Tarde</option>
                        <option value="noite">noite</option>
                    </select>
                </div>
                <div class="wrap">
                    <label for="role">Patente</label>
                    <select name="role" id="role" class="select" required>
                        <option value="admin principal">Admin Principal</option>
                        <option value="admin secundáio">Admin Secundário</option>
                    </select>
                </div>
                <!--Fim Administrador-->

                <!--morador-->
                @elseif ($tipoUsuario == 'morador')
                <div class="wrap">
                    <label for="apartment">Apartamento</label>
                    <input type="text" name="apartment" id="apartment" required>
                </div>
                <!--FIm morador-->

                <!--porteiro-->
                @elseif ($tipoUsuario == 'porteiro')
                <div class="wrap">
                    <label for="shift">Turno</label>
                    <select name="shift" id="shift" class="select" required>
                        <option value="manhã">Manhã</option>
                        <option value="tarde">Tarde</option>
                        <option value="noite">noite</option>
                    </select>
                </div>
                <div class="wrap">
                    <label for="department">Departamento</label>
                    <select name="department" id="department" class="select" required>
                        <option value="primeiro portão">Primeiro Portão</option>
                        <option value="segundo portão">Segundo Portão</option>
                    </select>
                </div>
                <div class="wrap">
                    <label for="supervisor">Supervisor</label>
                    <input type="text" name="supervisor" id="supervisor" required>
                </div>
                <div class="wrap">
                    <label for="address">Morada</label>
                    <input type="text" name="address" id="address" required>
                </div>
                <!--FIm porteiro-->
                @endif
                <!--Fim direcionado ao usuario-->
                <div class="wrap">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="wrap">
                    <label for="password_confirmation">Confirmar a senha</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required>
                </div>
            </div>
            <div class="alerta">
                <p id="alerta">Ao clicar em "criar conta" para funcionário terá que aguardar a confirmação do administrador. Depois disso receberá uma mensagem de admissão</p>
            </div>
            <div class="inline">
                <button type="button" onclick="location.href='/'">Cancelar</button>
                <button type="submit">Criar conta</button>
            </div>
        </form>
    </section>



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

    <script src="{{asset('../js/personalizado.js')}}"></script>

</body>

</html>