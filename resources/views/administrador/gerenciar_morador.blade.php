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
            <a href="{{route('morador.cadastrar')}}" class="addUser"><img src="{{asset('/img/plus.png')}}" alt="">Add Usuário</a>
        </form>
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
                        <th>Apartamento</th>
                        <th>Status</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr onclick="selecionar(this)">
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
                        <td>{{ $user->apartment }}</td>
                        <td><span class="state state3">Online</span></td>
                        <td><button type="button" class="deleted"><img src="{{asset('/img/delete.png')}}" alt=""></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
                        <h3>apartamento</h3>
                        <p>{{ $userId->apartment }}</p>
                    </div>
                </div>
            </div>
            <!--Fim divider-->
        </div>
    </div>
    <!--fim perfil-->
    <!--Editar-->
    <div class="line">
        <h1>Editar</h1>
    </div>

    <form action="{{ route('update.gerenciar') }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="bar-container">
            <div class="bar-input">
                <label for="apartment">Apartamento</label>
                <input type="text" name="apartment" id="apartment" value="{{ $userId->apartment }}">
            </div>

            <div class="line" id="edit-save">
                <button type="submit">Salvar alterações</button>
            </div>
        </div>
    </form>
    <!--fim editar-->
</section>


<script>
    var active = document.querySelector("#side-gerenciar-morador")
    var activeImg = document.querySelector('#side-gerenciar-morador img')
    active.style.color = 'white'
    active.style.background = 'var(--primary-color)'
    activeImg.style.filter = 'invert(1) brightness(3)'
</script>
<script src="{{asset('../js/administrador/gerenciar.js')}}"></script>
<script src="{{asset('../js/administrador/bar-select.js')}}"></script>


@endsection