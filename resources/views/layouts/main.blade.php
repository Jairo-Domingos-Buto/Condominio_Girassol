<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('../css/main.css')}}">
    <link rel="stylesheet" href="{{asset('../css/style.css')}}">
    <link rel="stylesheet" href="{{asset('../css/personalizado.css')}}">
    @yield('links')
    <title>@yield('title')</title>
</head>

<body>
    <!--layout-->
    <header>
        <figure>
            <img src="{{asset('/img/logo.png')}}" alt="Condomínio Girassol">
        </figure>
        <div class="inline">
            @yield('search')
            <div class="right">
                <div class="icons">
                    <button type="button" id="alertar"><img src="{{asset('/img/alerta.png')}}" alt="alertar"></button>

                    <button type="button" onclick="mensagens()"><img src="{{asset('../img/chat_room_48px.png')}}" alt=""></button>

                    <div class="notification">
                        <div class="count">
                            1
                        </div>
                        <button type="button" onclick="notification()"><img src="{{asset('/img/notification.png')}}" alt="notificações"></button>
                    </div>
                </div>
                <div class="profile">
                    <div class="around">
                        <img src="{{asset('/img/avatar2.png')}}" alt="" id="avatar">
                        <div class="info">
                            <h4>{{ Auth::user()->name }}</h4>
                            <p>{{ Auth::user()->user_type }}</p>
                        </div>
                        <button onclick="profileOption()">
                            <img src="{{asset('/img/down.png')}}" alt="" id="profileDown">
                        </button>
                    </div>
                    <ul>
                        <li>
                            @if(Request::is('admin/*'))
                            <a href="{{ route('admin.profile.show') }}" id="side-conta">Meu Perfil</a>

                            @elseif(Request::is('porteiro/*'))
                            <a href="{{ route('porteiro.profile.show') }}" id="side-conta">Meu Perfil</a>
                            @endif
                        </li>
                        <li><a href="#" id="side-historico">Histórico de Acesso</a></li>
                        <li><a href="#" id="side-ajuda">Ajuda</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" style="width: 100%;">
                                @csrf
                                <button type="submit" id="logout">Sair</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <section id="sidebar">
        @if(Request::is('admin/*'))
        <ul id="nav">
            <!--divisão-->
            <li class="divider">main</li>
            <li><a href="{{route('dashboard')}}" id="side-dashboard"><img src="{{asset('/img/dashboard.png')}}" alt="">Dashboard</a></li>
            <!--divisão-->
            <li class="divider">gerenciador de usuáios</li>
            <li><a href="#" onclick="sideOption()"><img src="{{asset('/img/user.png')}}" alt=""> Cadastrar Novos Usuários <img src="{{asset('/img/down.png')}}" alt="" class="sideDown"></a>
                <ul class="extender">
                    <li><a href="{{route('morador.cadastrar')}}" id="side-cadastrar-morador">Morador</a></li>
                    <li><a href="{{route('porteiro.cadastrar')}}" id="side-cadastrar-porteiro">Porteiro</a></li>
                    <li><a href="{{route('visita.cadastrar')}}" id="side-cadastrar-visita">Visita</a></li>
                </ul>
            </li>

            <li><a href="{{route('morador.gerenciar')}}" id="side-gerenciar-morador"><img src="{{asset('/img/registration.png')}}" alt="">Gerenciar Moradores</a></li>
            <li><a href="{{route('porteiro.gerenciar')}}" id="side-gerenciar-porteiro"><img src="{{asset('/img/security_configuration.png')}}" alt="">Gerenciar Porteiros</a></li>
            <li><a href="{{route('visita.gerenciar')}}" id="side-gerenciar-visita"><img src="{{asset('/img/ticket_purchase_48px.png')}}" alt="">Gerenciar Visitas</a></li>
            <!--divisão-->
            <li class="divider">relatório e análise de dados</li>
            <li><a href="{{route('relatoriocompleto.sistema')}}" id="side-relatorio"><img src="{{asset('/img/document.png')}}" alt="">Relatório de Segurança e acesso</a></li>
            <!--divisão-->
            <li class="divider">manutenção e segurança do sistema</li>
            <li><a href="{{route('configuration.sistema')}}" id="side-configuration"><img src="{{asset('/img/administrative_tools_64px.png')}}" alt="">Configurações</a></li>
            <li><a href="{{route('alerta')}}" id="side-alerta"><img src="{{asset('/img/private.png')}}" alt="">Política e Pivacidade</a></li>
            <li><a href="{{route('alerta')}}" id="side-alerta"><img src="{{asset('/img/data_backup.png')}}" alt="">Atualizações e Beckups</a></li>
        </ul>

        @elseif(Request::is('porteiro/*'))
        <ul id="nav">
            <!--divisão-->
            <li class="divider">autenticação</li>
            <li><a href="{{route('moradores.auth')}}" id="side-morador"><img src="{{asset('/img/caretaker_48px.png')}}" alt="">Moradores</a></li>
            <li><a href="{{route('visitas.auth')}}" id="side-visita"><img src="{{asset('/img/ticket_purchase_48px.png')}}" alt="">Visitas</a></li>
            <li><a href="{{route('prestadores.auth')}}" id="side-prestador"><img src="{{asset('/img/delivery_handcart_48px.png')}}" alt="">Pestadadores de Serviços</a></li>
            <li><a href="{{route('autorizados.auth')}}" id="side-visita-autorizada"><img src="{{asset('/img/ticket_purchase_48px.png')}}" alt="">Visitas Autorizadas</a></li>
            <!--divisão-->
            <li class="divider">registo</li>
            <li><a href="{{route('moradores.list')}}" id="side-lista-morador"><img src="{{asset('/img/lista_morador.png')}}" alt="">Lista de Moradores</a></li>
            <li><a href="{{route('visitas.list')}}" id="side-lista-visita"><img src="{{asset('/img/lista_visitas.png')}}" alt="">Lista de Visitas</a></li>
            <li><a href="{{route('prestadores.list')}}" id="side-lista-prestador"><img src="{{asset('/img/lista_pestador.png')}}" alt="">Lista de Prestadores de Serviços</a></li>
            <!--divisão-->
            <li class="divider">central de controle</li>
            <li><a href="{{route('painel')}}" id="side-painel"><img src="{{asset('/img/panel.png')}}" alt="">Painel</a></li>
            <li><a href="{{route('relatorio')}}" id="side-relatorio"><img src="{{asset('/img/document.png')}}" alt="">Relatório</a></li>
            <li><a href="{{route('alerta')}}" id="side-alerta"><img src="{{asset('/img/alarm_100px.png')}}" alt="">Alertas</a></li>
        </ul>

        @elseif(Request::is('morador/*'))
        <ul id="nav">
            <li><a href="{{route('dashboard.morador')}}" id="side-morador"><img src="{{asset('/img/caretaker_48px.png')}}" alt="">Página Inicial</a></li>
            <li><a href="{{route('notification.morador')}}" id="side-visita"><img src="{{asset('/img/ticket_purchase_48px.png')}}" alt="">Gerir Visitas</a></li>
            <li><a href="{{route('notification.morador')}}" id="side-prestador"><img src="{{asset('/img/delivery_handcart_48px.png')}}" alt="">Históricos</a></li>
            <li><a href="{{route('notification.morador')}}" id="side-visita-autorizada"><img src="{{asset('/img/ticket_purchase_48px.png')}}" alt="">Notificações</a></li>
            <li><a href="{{route('notification.morador')}}" id="side-lista-morador"><img src="{{asset('/img/lista_morador.png')}}" alt="">Configurações</a></li>
        </ul>
        @endif

        <div class="profile-state">
            {{ Auth::user()->user_type }}
        </div>
    </section>

    <!--início side-right-->
    <section class="side-right side-notification">
        <div class="header">
            <h1>Notificação</h1>
            <button type="button" onclick="closeNotification()"><img src="{{asset('../img/arrow-right.png')}}" alt=""></button>
        </div>
        <div class="line">
            <button type="button" class="btn-active ">Tudo</button>
            <button type="button">Não lidas</button>
        </div>

        <div class="itens">
            <!--início bloco-->
            <div class="block">
                <div class="header">
                    <h2>Autenticação</h2>
                    <button>Ver tudo</button>
                </div>
                <div class="inline">
                    <figure>
                        <img src="{{asset('../img/avatar3.png')}}" alt="">
                    </figure>
                    <div class="info">
                        <p><span>Carlos Augusto Miles</span> Solicitou autenticação</p>
                        <div class="flex">
                            <span>12:32</span>
                            <h3>Visita</h3>
                        </div>
                        <div class="btn-inline">
                            <button type="button" class="adjacente">Esperar</button>
                            <button type="button" class="principal">Aceitar</button>
                        </div>
                    </div>
                </div>
                <div class="inline">
                    <figure>
                        <img src="{{asset('../img/avatar3.png')}}" alt="">
                    </figure>
                    <div class="info">
                        <p><span>Carlos Augusto Miles</span> Solicitou autenticação</p>
                        <div class="flex">
                            <span>12:32</span>
                            <h3>Visita</h3>
                        </div>
                        <div class="btn-inline">
                            <button type="button" class="adjacente">Esperar</button>
                            <button type="button" class="principal">Aceitar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--fim bloco-->
            <!--início bloco-->
            <div class="block">
                <div class="header">
                    <h2>Alertas de segurança</h2>
                    <button>Ver tudo</button>
                </div>
                <div class="inline">
                    <figure>
                        <img src="{{asset('../img/avatar3.png')}}" alt="">
                    </figure>
                    <div class="info">
                        <p><span>Carlos Augusto Miles</span> Solicitou autenticação</p>
                        <div class="flex">
                            <span>12:32</span>
                            <h3>Visita</h3>
                        </div>
                        <div class="btn-inline">
                            <button type="button" class="adjacente">Painel</button>
                            <button type="button" class="principal">Confirmar</button>
                        </div>
                    </div>
                </div>
                <div class="inline">
                    <figure>
                        <img src="{{asset('../img/avatar3.png')}}" alt="">
                    </figure>
                    <div class="info">
                        <p><span>Carlos Augusto Miles</span> Solicitou autenticação</p>
                        <div class="flex">
                            <span>12:32</span>
                            <h3>Visita</h3>
                        </div>
                        <div class="btn-inline">
                            <button type="button" class="adjacente">Painel</button>
                            <button type="button" class="principal">Confirmar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--fim bloco-->
            <!--início bloco-->
            <div class="block">
                <div class="header">
                    <h2>Alertas de segurança</h2>
                    <button>Ver tudo</button>
                </div>
                <div class="inline">
                    <figure>
                        <img src="{{asset('../img/avatar3.png')}}" alt="">
                    </figure>
                    <div class="info">
                        <p><span>Carlos Augusto Miles</span> Solicitou autenticação</p>
                        <div class="flex">
                            <span>12:32</span>
                            <h3>Visita</h3>
                        </div>
                        <div class="btn-inline">
                            <button type="button" class="adjacente">Visualizado</button>
                            <button type="button" class="principal">Ir ao chatr</button>
                        </div>
                    </div>
                </div>
                <div class="inline">
                    <figure>
                        <img src="{{asset('../img/avatar3.png')}}" alt="">
                    </figure>
                    <div class="info">
                        <p><span>Carlos Augusto Miles</span> Solicitou autenticação</p>
                        <div class="flex">
                            <span>12:32</span>
                            <h3>Visita</h3>
                        </div>
                        <div class="btn-inline">
                            <button type="button" class="adjacente">Visualizado</button>
                            <button type="button" class="principal">Ir ao chat</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--fim bloco-->
        </div>
    </section>
    <!--fim side-left-->
    <!--início side-left-->
    <section class="side-right side-mensagem">
        <div class="header">
            <h1>Mensagem</h1>
            <button type="button" onclick="closeMensagem()"><img src="{{asset('../img/arrow-right.png')}}" alt=""></button>
        </div>
        <div class="setor">
            <div class="user">
                <div>
                    <img src="{{asset('../img/avatar.png')}}" alt="">
                    <h2>Adiministrador</h2>
                </div>
            </div>
            <div class="chat">
                <div class="wrap" id="receptor">
                    <div class="mensagem">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus, officiis, libero sit ea quisquam accusamus </p>
                    </div>
                    <p>12:15</p>
                </div>
                <div class="wrap" id="emissor">
                    <div class="mensagem">
                        <p>praesentium unde, ad, deleniti deserunt expedita ipsa perspiciatis iusto nobis. Laudantium aspernatur libero fugit!</p>
                    </div>
                    <p>12:27</p>
                </div>
                <div class="wrap" id="receptor">
                    <div class="mensagem">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus, officiis, libero sit ea quisquam accusamus Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde voluptatibus saepe et aut reprehenderit animi rem pariatur quibusdam. Laboriosam cupiditate, omnis sequi atque nesciunt aliquid dolorem tempore soluta vitae qui.</p>
                    </div>
                    <p>12:15</p>
                </div>
                <div class="wrap" id="emissor">
                    <div class="mensagem">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim vel ab neque quibusdam. Perferendis natus maxime, explicabo quis nisi incidunt fuga accusantium. Voluptate, distinctio fugit similique sequi quod eius nemo?</p>
                    </div>
                    <p>12:27</p>
                </div>
            </div>
            <footer>
                <form action="" method="" class="send">
                    <button type="button"><img src="{{asset('../img/happy_60px.png')}}" alt=""></button>
                    <input type="text" name="" id="" placeholder="Mensagem">
                    <button type="submit"><img src="{{asset('../img/paper_plane_48px.png')}}" alt=""></button>
                </form>
            </footer>
        </div>
    </section>
    <!--fim side-right-->
    <!--layout-->

    @yield('content')


    <script src="{{asset('../js/main.js')}}"></script>
    <script src="{{asset('../js/personalizado.js')}}"></script>

</body>

</html>
