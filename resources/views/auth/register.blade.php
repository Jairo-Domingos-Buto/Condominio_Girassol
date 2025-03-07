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
        <div class="scroll">
            <!--inicio mensagem-->
            <p class="message">
                <x-validation-errors class="message-component message-ul" />
            </p>
            <!--fim mensagem-->
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <h1>Criar conta</h1>
                <div class="line">
                    <label for="user_type">Tipo de usuário:</label>

                    <div class="select-container">
                        <div class="show-option select-user-type" id="showOption">
                            <div class="custom-select" id="customSelect">
                                {{$tipoUsuario}}
                            </div>
                            <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                            <!--name do select customizado-->
                            <input type="text" name="user_type" value="{{$tipoUsuario}}" hidden>
                        </div>

                        <div class="select-options" id="selectOptions">
                            <div class="select-option" data-value="administrador" onclick="location.href = '/criarconta?tipo_usuario=administrador'">Administrador</div>
                            <div class="select-option" data-value="morador" onclick="location.href = '/criarconta?tipo_usuario=morador'">Morador</div>
                            <div class="select-option" data-value="porteiro" onclick="location.href = '/criarconta?tipo_usuario=porteiro'">Porteiro</div>
                            <div class="select-option" data-value="visita" onclick="location.href = '/criarconta?tipo_usuario=visita'">Visita</div>
                        </div>
                    </div>
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
                        <div class="select-container">
                            <div class="show-option" id="showOption">
                                <div class="custom-select" id="customSelect">
                                    Selecione o Turno
                                </div>
                                <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                                <!--name do select customizado-->
                                <input type="text" name="shift" class="hidden" hidden>
                            </div>

                            <div class="select-options" id="selectOptions">
                                <div class="select-option" data-value="Manhã">Manhã</div>
                                <div class="select-option" data-value="Tarde">Tarde</div>
                                <div class="select-option" data-value="Noite">Noite</div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap">
                        <label for="role">Patente</label>
                        <div class="select-container">
                            <div class="show-option" id="showOption">
                                <div class="custom-select" id="customSelect">
                                    Selecione a patente
                                </div>
                                <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                                <!--name do select customizado-->
                                <input type="text" name="role" class="hidden" hidden>
                            </div>

                            <div class="select-options" id="selectOptions">
                                <div class="select-option" data-value="Admin Principal">Admin Principal</div>
                                <div class="select-option" data-value="Admin Secundário">Admin Secundário</div>
                            </div>
                        </div>
                    </div>
                    <!--Fim Administrador-->

                    <!--morador-->
                    @elseif ($tipoUsuario == 'morador')
                    <div class="wrap">
                        <label for="apartment">Apartamento</label>
                        <input type="text" name="apartment" id="apartment">
                    </div>
                    <!--FIm morador-->

                    <!--porteiro-->
                    @elseif ($tipoUsuario == 'porteiro')
                    <div class="wrap">
                        <label for="shift">Turno</label>
                        <div class="select-container">
                            <div class="show-option" id="showOption">
                                <div class="custom-select" id="customSelect">
                                    Selecione o Turno
                                </div>
                                <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                                <!--name do select customizado-->
                                <input type="text" name="shift" class="hidden" hidden>
                            </div>

                            <div class="select-options" id="selectOptions">
                                <div class="select-option" data-value="Manhã">Manhã</div>
                                <div class="select-option" data-value="Tarde">Tarde</div>
                                <div class="select-option" data-value="Noite">Noite</div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap">
                        <label for="department">Departamento</label>
                        <div class="select-container">
                            <div class="show-option" id="showOption">
                                <div class="custom-select" id="customSelect">
                                    Selecione o Departamento
                                </div>
                                <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                                <!--name do select customizado-->
                                <input type="text" name="department" class="hidden" hidden>
                            </div>

                            <div class="select-options" id="selectOptions">
                                <div class="select-option" data-value="Portão Principal">Portão Principal</div>
                                <div class="select-option" data-value="Portão Secundário">Portão Secundário</div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap">
                        <label for="supervisor">Supervisor</label>
                        <input type="text" name="supervisor" id="supervisor">
                    </div>
                    <div class="wrap">
                        <label for="address">Morada</label>
                        <input type="text" name="address" id="address">
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
        </div>
    </section>

    <script src="{{asset('../js/personalizado.js')}}"></script>

</body>

</html>