@extends('layouts.main')

@section('title', 'Gerenciar Poteiros')

@section('links')
<link rel="stylesheet" href="{{asset('../css/administrador/gerenciar.css')}}">
<link rel="stylesheet" href="{{asset('../css/administrador/bar_select.css')}}">
<link rel="stylesheet" href="{{asset('../css/administrador/about_card.css')}}">
<link rel="stylesheet" href="{{asset('../css/tabela.css')}}">
<link rel="stylesheet" href="{{asset('../css/card.css')}}">
<link rel="stylesheet" href="{{asset('../css/perfil.css')}}">
<link rel="stylesheet" href="{{asset('../css/row_table.css')}}">


@section('content')

@section('search')

<div class="none"></div>

@endsection

<section id="gerenciar">
    <!--inline search-->
    <div class="inline-search">
        <form action="" method="">
            <div class="search">
                <input type="search" name="" id="" placeholder="Digite o nome...">
                <button type="button"><img src="{{asset('/img/pesquisar.png')}}" alt="pesquisar"></button>
            </div>

            <div class="select-container filter">
                <div class="show-option" id="showOption">
                    <img src="{{asset('../img/sort.png')}}" alt="">
                    <div class="custom-select" id="customSelect">
                        Filtrar
                    </div>
                </div>
                <div class="select-options" id="selectOptions">
                    <div class="select-option" data-value="1">Nome (A-Z)</div>
                    <div class="select-option" data-value="2">Data de Entrada</div>
                    <div class="select-option" data-value="3">Nº do apartamento</div>
                </div>
            </div>
            <a href="{{route('porteiro.cadastrar')}}" class="addUser"><img src="{{asset('/img/plus.png')}}" alt="">Add Usuário</a>
        </form>
    </div>
    <!--fim inline search-->

    <!--tabela-->
    <p class="obs">Clique para selecionar</p>
    <div class="tabela" id="row-table">
        <div class="hidden">
            <table>
                <thead>
                    <tr>
                        <th>Nome completo</th>
                        <th>Data de nascimento</th>
                        <th>Gênero</th>
                        <th>Supervisor</th>
                        <th>Departamento</th>
                        <th>Turno</th>
                        <th>Status</th>
                        <th>Classificação</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr onclick="selecionar(this)" data-id="{{ $user->id }}">
                        <td>
                            <div class="user">
                                <figure>
                                    @if ($user->user->profile_photo_path)
                                    <img src="{{asset(''.$user->user->photo.'')}}" alt="">
                                    @else
                                    <img src="{{asset('/img/user.png')}}" alt="" style="width: 70%; height: 70%;">
                                    @endif
                                </figure>
                                <div class="wrap">
                                    <h6> {{ $user->user->name }} </h6>
                                    <p>{{ $user->user->email }} </p>
                                </div>
                            </div>
                        </td>
                        <td>{{ $user->user->birthdate }}</td>
                        <td>{{ $user->user->gender }}</td>
                        <td>{{ $user->supervisor }}</td>
                        <td>{{ $user->department }}</td>
                        <td>{{ $user->shift }}</td>
                        <td><span class="state state1">Online</span></td>
                        <td>
                            <span class="classification">
                                <img src="{{asset('/img/star.png')}}" alt="">
                                <img src="{{asset('/img/star.png')}}" alt="">
                                <img src="{{asset('/img/star.png')}}" alt="">
                            </span>
                        </td>
                        <td><button type="button" class="deleted"><img src="{{asset('/img/delete.png')}}" alt=""></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="next">
            <button type="button" class="btn1">1</button>
            <button type="button" class="btn2">2</button>
            <button type="button" class="btn3">3</button>
        </div>
    </div>
    <!--fim tabela-->

    <!--perfil-->
    <div class="line">
        <h1>Usuário Selecionado</h1>
        <button type="button">Deletar usuário</button>
    </div>
    <div class="perfil-inline">
        <figure>
            @if ($userId->user->profile_photo_path)
            <img src="{{asset(''.$userId->user->photo.'')}}" alt="">
            @else
            <img src="{{asset('/img/user.png')}}" alt="" style="width: 50%; height: 50%;">
            @endif
        </figure>
        <div class="column">
            <!--Início divider-->
            <div class="divider">
                <h1>identificação</h1>
                <div class="row-wrap">
                    <div class="wrap">
                        <h3>nome completo</h3>
                        <p>{{ $userId->user->name }}</p>
                    </div>
                    <div class="wrap">
                        <h3>data de nascimento</h3>
                        <p>{{ $userId->user->birthdate }}</p>
                    </div>
                    <div class="wrap">
                        <h3>gênero</h3>
                        <p>{{ $userId->user->gender }}</p>
                    </div>
                    <div class="wrap">
                        <h3>documento de identidade</h3>
                        <p>{{ $userId->user->card_id }}</p>
                    </div>
                    <div class="wrap">
                        <h3>telefone</h3>
                        <p>{{ $userId->user->phone }}</p>
                    </div>
                    <div class="wrap">
                        <h3>e-mail</h3>
                        <p>{{ $userId->user->email }}</p>
                    </div>
                    <div class="wrap">
                        <h3>departamento</h3>
                        <p>{{ $userId->department }}</p>
                    </div>
                    <div class="wrap">
                        <h3>turno</h3>
                        <p>{{ $userId->shift }}</p>
                    </div>
                    <div class="wrap">
                        <h3>morada</h3>
                        <p>{{ $userId->address }}</p>
                    </div>
                    <div class="wrap">
                        <h3>supervisor</h3>
                        <p>{{ $userId->supervisor }}</p>
                    </div>
                </div>
            </div>
            <!--Fim divider-->
        </div>
    </div>
    <!--fim perfil-->
    <p class="message">
        @if (session('update_user'))
        {{ session('update_user') }}
        @endif
    </p>
    <!--Editar-->
    <div class="line">
        <h1>Editar</h1>
    </div>
    <form action="{{ route('update.gerenciar') }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="edit-wraper bar-container">
            <div class="bar">
                <div class="show" onclick="showOption(this)">
                    <label for="">Trocar Departamento</label>
                    <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                </div>
                <div class="select-edit" id="department">
                    <div class="edit uni-select" data-value="portão principal" onclick="selecionarUni(this)">Portão Principal <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                    <div class="edit uni-select" data-value="portão secundáio" onclick="selecionarUni(this)">Portão Secundáio <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                </div>
                <input type="text" name="department" id="getDepartment" hidden>
            </div>
            <div class="bar">
                <div class="show" onclick="showOption(this)" id="shift">
                    <label for="">Trocar turno</label>
                    <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                </div>
                <div class="select-edit" id="shift">
                    <div class="edit uni-select" data-value="manhã" onclick="selecionarUni(this)">Manhã <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                    <div class="edit uni-select" data-value="tarde" onclick="selecionarUni(this)">Tarde <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                    <div class="edit uni-select" data-value="noite" onclick="selecionarUni(this)">noite <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                </div>
                <input type="text" name="shift" id="getShift" hidden>
            </div>
            <div class="bar">
                <div class="show" onclick="showOption(this)">
                    <label for="">Trocar supervisor</label>
                    <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                </div>
                <div class="select-edit" id="supervisor">
                    <div class="edit uni-select" data-value="Luis Marcos Pedro" onclick="selecionarUni(this)">Luis Marcos Pedro <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                    <div class="edit uni-select" data-value="Jorge gonsalves Rui" onclick="selecionarUni(this)">Jorge gonsalves Rui <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                    <div class="edit uni-select" data-value="Emanuel Dias Noite" onclick="selecionarUni(this)">Emanuel Dias Noite <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                    <div class="edit uni-select" data-value="Miguel Senior Junior" onclick="selecionarUni(this)">Miguel Senior Junior <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                </div>
                <input type="text" name="supervisor" id="getSupervisor" hidden>
            </div>

            <div class="line" id="edit-save">
                <button type="submit">Salvar alterações</button>
            </div>
        </div>
    </form>
    <!--fim editar-->

    <!---cards-->
    <div class="line">
        <h1>Avaliações</h1>
    </div>
    <div class="cards">
        <div class="card" onclick="loadCard('incidente')">
            <h3>Incidentes e Reclamações</h3>
            <h1>5</h1>
        </div>
        <div class="card" onclick="loadCard('problema')">
            <h3>Resolução de Problemas</h3>
            <h1>7</h1>
        </div>
        <div class="card" onclick="loadCard('falta')">
            <h3>Faltas no Mês</h3>
            <h1>2</h1>
        </div>
        <div class="card" onclick="loadCard('tempo_logado')">
            <h3>Tempo Logado</h3>
            <h1>6h</h1>
        </div>
        <div class="card" onclick="loadCard('turno')">
            <h3>Turnos Cobertos</h3>
            <h1>2</h1>
        </div>
    </div>
    <!--fim cads-->
    <!--about cads-->
    <div class="about-card" id="aboutCard">

        @include('administrador.components.' . $card)

    </div>
    <!--fim about cads-->


</section>

<script>
    var active = document.querySelector("#side-gerenciar-porteiro")
    var activeImg = document.querySelector('#side-gerenciar-porteiro img')
    active.style.color = 'white'
    active.style.background = 'var(--primary-color)'
    activeImg.style.filter = 'invert(1) brightness(3)'


    function loadCard(card) {
        let xhr = new XMLHttpRequest();
        xhr.open('GET', `/admin/gerenciar/porteiro?card=${card}`, true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

        xhr.onload = function() {
            if (xhr.status === 200) {
                document.getElementById('aboutCard').innerHTML = xhr.responseText;
            } else {
                console.error('Erro ao carregar o conteúdo.');
            }
        };

        xhr.send();
    }
</script>

<script src="{{asset('../js/administrador/gerenciar.js')}}"></script>
<script src="{{asset('../js/administrador/bar-select.js')}}"></script>

@endsection