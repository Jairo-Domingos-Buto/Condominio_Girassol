@extends('layouts.main')

@section('title', 'Cadastrar Morador')

@section('links')
<link rel="stylesheet" href="{{asset('../css/cadastro.css')}}">
<link rel="stylesheet" href="{{asset('../css/administrador/cadastrar.css')}}">


@section('content')

@section('search')

<div class="none"></div>

@endsection

<section id="auth">
    <form action="{{ route('customCreate.create') }}" method="POST" class="row-wrap">
        @csrf

        <div class="divider">
            <h1>Cadastro de Morador</h1>
            <div class="wrap">
                <label for="name">Nome completo</label>
                <input type="text" name="name" autofocus autocomplete="name" id="name" required>
            </div>
            <div class="wrap">
                <label for="card_id">Nº do Bilhete</label>
                <input type="text" id="card_id" name="card_id" required>
            </div>
            <div class="wrap">
                <label for="birthdate">Data de nascimento</label>
                <input type="date" name="birthdate" id="birthdate" required>
            </div>
            <div class="wrap">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="wrap">
                <label for="phone">Telefone</label>
                <input type="tel" name="phone" id="phone" required>
            </div>
            <div class="wrap genero">
                <label for="">Gênero</label>
                <div class="inline">
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
                <label for="apartment">Apartamento</label>
                <input type="text" name="apartment" id="apartment" required>
            </div>
            <div class="wrap">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" required readonly placeholder="Será atribuida uma senha padrão" value="12345678">
            </div>
            <!-- input Hidden-->
            <input type="password" name="password_confirmation" required value="12345678" hidden>
            <input type="text" name="user_type" required value="morador" hidden>
        </div>
        <div class="divider obs">
            <p>O restante das informações serão acescentadas pelo morador. Para melhor convicção da informação.</p>
        </div>
        <!--inicio mensagem-->
        <p class="message">
            @if (session('status_create'))
            {{ session('status_create') }}
            @endif
        </p>
        <p class="message">
            <x-validation-errors class="message-component message-ul" />
        </p>
        <!--fim mensagem-->
        <div class="divider mostrar-foto">
            <h1>Foto</h1>
            <label for="photo" class="foto">
                <img src="{{asset('../img/sem_foto.png')}}" alt="" id="exibirFoto">
            </label>
            <input type="file" name="profile_photo_path" id="photo" onchange="nomeFoto(event)">

            <p class="status-foto">Sem fotografia</p>
        </div>
        <div class="btn">
            <button type="button">Cancelar</button>
            <button type="submit">Cadastrar</button>
        </div>
    </form>
</section>


<script>
    var active = document.querySelector("#side-cadastrar-morador");
    var activeImg = document.querySelector('#side-cadastrar-morador img');
</script>
<script src="{{asset('../js/administrador/cadastrar.js')}}"></script>



@endsection