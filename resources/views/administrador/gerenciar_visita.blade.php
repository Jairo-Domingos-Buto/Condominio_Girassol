@extends('layouts.main')

@section('title', 'Gerenciar Moradores')

@section('links')
<link rel="stylesheet" href="{{asset('../css/administrador/gerenciar.css')}}">
<link rel="stylesheet" href="{{asset('../css/administrador/bar_select.css')}}">
<link rel="stylesheet" href="{{asset('../css/perfil.css')}}">
<link rel="stylesheet" href="{{asset('../css/tabela.css')}}">

@section('content')

@section('search')

<div class="none"></div>

@endsection

<section id="gerenciar">
    @if ($users->isNotEmpty())
    <!--inline search-->
    <div class="inline-search">
        <form action="{{ route('visita.gerenciar') }}" method="GET">
            @csrf
            <div class="search">
                <input id="search" type="search" name="search" placeholder="Digite o nome..." value="{{ $searched ?? '' }}">
                <button type="submit"><img src="{{ asset('/img/pesquisar.png') }}" alt="pesquisar"></button>
            </div>
            <!--Valores necessarios para o retorno-->
            <input type="hidden" name="id" value="{{ $userId->id }}">
            <input type="hidden" name="user_type" value="{{$userId->user->user_type}}">
        </form>

        <form action="{{ route('visita.gerenciar') }}" method="GET">
            @csrf
            <div class="select-container filter">
                <div class="show-option" id="showOption">
                    <img src="{{asset('../img/sort.png')}}" alt="">
                    <div class="custom-select" id="customSelect">
                        {{ $filtro ?? "Filtrar"}}
                    </div>
                    <!--name do select customizado-->
                    <input type="hidden" name="filtro" class="hidden">
                </div>

                <div class="select-options" id="selectOptions" onclick="this.closest('form').submit()">
                    <div class="select-option" data-value="id">ID</div>
                    <div class="select-option" data-value="nomeAZ">Nome (A-Z)</div>
                </div>
            </div>
            <!--Valores necessarios para o retorno-->
            <input type="hidden" name="id" value="{{ $userId->id }}">
            <input type="hidden" name="user_type" value="{{$userId->user->user_type}}">
        </form>
        <a href="{{route('morador.cadastrar')}}" class="addUser"><img src="{{asset('/img/plus.png')}}" alt="">Add Usuário</a>
    </div>
    <!--fim inline search-->

    <!--tabela-->
    <p class="obs">Clique para selecionar</p>
    <div class="table-container">
        <div class="tabela">
            <table>
                <thead>
                    <tr>
                        <th>Nome completo</th>
                        <th>Data de nascimento</th>
                        <th>Gênero</th>
                        <th>Status</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr onclick="selecionar(this, 'visita')" data-id="{{ $user->id }}">
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
                                    <p> {{ $user->user->email }} </p>
                                </div>
                            </div>
                        </td>
                        <td>{{ $user->user->birthdate }}</td>
                        <td>{{ $user->user->gender }}</td>
                        <td><span class="state state3">Online</span></td>
                        <td>
                            <form action="{{ route('customDelete') }}" method="POST" id="deleteFromTable">
                                @csrf
                                <input type="hidden" name="apagarId" value="{{ $user->user->id }}">
                                <button type="button" class="deleted" onclick="openConfirm('deleteFromTable')"><img src="{{asset('/img/delete.png')}}" alt=""></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--fim tabela-->
    <p class="message">
        @if (session('status_delete'))
        {{ session('status_delete') }}
        @endif
    </p>
    <!--perfil-->
    <form action="{{ route('customDelete') }}" method="POST" class="line" id="deleteFromEdit">
        @csrf
        <h1>Usuário Selecionado</h1>
        <input type="hidden" name="apagarId" value="{{ $userId->user->id }}">
        <button type="button" onclick="openConfirm('deleteFromEdit')">Deletar usuário</button>
    </form>
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
                </div>
            </div>
            <!--Fim divider-->
        </div>
    </div>
    <!--fim perfil-->
    @else
    <div class="without-user">
        <h1>Sem usuário cadastrado!</h1>
    </div>
    @endif
</section>

<!--customConfirm-->
<div class="customConfirm">
    <div class="box">
        <div class="top">
            <h1>Apagar usuário</h1>
        </div>
        <div class="center">
            <h6>Deja apagar este usuário?</h6>
        </div>
        <div class="bottom">
            <div class="inline">
                <button type="button" id="cancelar" onclick="closeConfirm(); confirmation('cancelar')">Cancelar</button>
                <button type="button" id="ok" onclick="closeConfirm(); confirmation('ok')">Sim</button>
            </div>
        </div>
    </div>
</div>
<!--fim customConfirm-->

<script>
    var active = document.querySelector("#side-gerenciar-visita")
    var activeImg = document.querySelector('#side-gerenciar-visita img')
    active.style.color = 'white'
    active.style.background = 'var(--primary-color)'
    activeImg.style.filter = 'invert(1) brightness(3)'
</script>
<script src="{{asset('../js/administrador/bar_select.js')}}"></script>
<script src="{{asset('../js/administrador/gerenciar.js')}}"></script>

@endsection