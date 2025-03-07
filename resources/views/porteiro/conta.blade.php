@extends('layouts.main')

@section('title', 'Conta')

@section('links')
<link rel="stylesheet" href="{{asset('../css/porteiro/conta.css')}}">
<link rel="stylesheet" href="{{asset('../css/perfil.css')}}">


@section('content')

@section('search')

<div class="none"></div>
 
@endsection

<section id="conta">
    <!--informações do perfil-->
    <div class="perfil-inline">
        <figure>
            @if (Auth::user()->profile_photo_path)
            <img src="{{asset(''.Auth::user()->photo.'')}}" alt="">
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
                        <p>{{ Auth::user()->name }}</p>
                    </div>
                    <div class="wrap">
                        <h3>data de nascimento</h3>
                        <p>{{ Auth::user()->birthdate }}</p>
                    </div>
                    <div class="wrap">
                        <h3>gênero</h3>
                        <p>{{ Auth::user()->gender }}</p>
                    </div>
                    <div class="wrap">
                        <h3>documento de identidade</h3>
                        <p>{{ Auth::user()->card_id }}</p>
                    </div>
                    <div class="wrap">
                        <h3>telefone</h3>
                        <p>{{ Auth::user()->phone }}</p>
                    </div>
                    <div class="wrap">
                        <h3>e-mail</h3>
                        <p>{{ Auth::user()->email }}</p>
                    </div>
                    <div class="wrap">
                        <h3>departamento</h3>
                        <p>{{ Auth::user()->concierge->department }}</p>
                    </div>
                    <div class="wrap">
                        <h3>turno</h3>
                        <p>{{ Auth::user()->concierge->shift }}</p>
                    </div>
                    <div class="wrap">
                        <h3>morada</h3>
                        <p>{{ Auth::user()->concierge->address }}</p>
                    </div>
                    <div class="wrap">
                        <h3>supervisor</h3>
                        <p>{{ Auth::user()->concierge->supervisor }}</p>
                    </div>
                </div>
            </div>
            <!--Fim divider-->
        </div>
    </div>
    <!--fim informações do perfil-->

    <!--inicio adicionar foto-->
    <form method="post" action="{{ route('customProfilef.update') }}" enctype="multipart/form-data" class="addFoto">
        @csrf
        @method('PUT')

        <button type="submit" name="updatePhoto">Substituir foto <img src="{{ asset('/img/plus.png') }}" alt=""></button>
        <label for="photo">
            <img src="{{ asset('/img/photo.png') }}" alt="" class="photo">
        </label>
        <hr>
    </form>
    <!--fim adicionar foto-->

    <!--inicio componente-->
    <div class="componente">
        <x-app-layout>
            <div>
                <div class="custom-profile">
                    <div class="info">
                        <h3>Informações do Perfil.</h3>
                        <p>Atualize as informações do seu perfil.</p>
                    </div>
                    <!-- Início do formulário -->
                    <form method="post" action="{{ route('customProfile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row-wrap">
                            <!-- Nome completo -->
                            <div class="wrap">
                                <label for="name">nome completo</label>
                                <input id="name" name="name" type="text" value="{{ Auth::user()->name }}">
                            </div>
                            <!-- Data de nascimento -->
                            <div class="wrap">
                                <label for="birthdate">data de nascimento</label>
                                <input id="birthdate" name="birthdate" type="date" value="{{ Auth::user()->birthdate }}">
                            </div>
                            <!-- Gênero -->
                            <div class="wrap">
                                <label for="gender">gênero</label>
                                <input id="gender" name="gender" type="text" value="{{ Auth::user()->gender }}">
                            </div>
                            <!-- Documento de identidade -->
                            <div class="wrap">
                                <label for="card_id">documento de identidade</label>
                                <input id="card_id" name="card_id" type="text" value="{{ Auth::user()->card_id }}">
                            </div>
                            <!-- Telefone -->
                            <div class="wrap">
                                <label for="phone">telefone</label>
                                <input id="phone" name="phone" type="text" value="{{ Auth::user()->phone }}">
                            </div>
                            <!-- E-mail -->
                            <div class="wrap">
                                <label for="email">e-mail</label>
                                <input id="email" name="email" type="email" value="{{ Auth::user()->email }}">
                            </div>
                            <div class="line">
                                <p class="message">
                                    @if (session('status'))
                                    {{ session('status') }}
                                    @endif
                                </p>
                                <button type="submit" name="updateProfile">Salvar</button>
                            </div>
                        </div>
                    </form>
                    <!-- Fim do formulário -->
                </div>

                <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.update-password-form')
                    </div>

                    <x-section-border />
                    @endif

                    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.two-factor-authentication-form')
                    </div>

                    <x-section-border />
                    @endif

                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.logout-other-browser-sessions-form')
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <x-section-border />

                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.delete-user-form')
                    </div>
                    @endif
                </div>
            </div>
        </x-app-layout>
    </div>
    <!--fim componente-->


    <div class="space-between">

        <div class="evaluation">
            <h1>avaliação de desempenho</h1>
            <div class="progress">
                <!--início progress-current-->
                <div class="wrap">
                    <h4>Comunicação</h4>
                    <div class="progress-home">
                        <div class="progress-current"></div>
                    </div>
                </div>
                <!--fim progress-current-->
                <!--início progress-current-->
                <div class="wrap">
                    <h4>Trabalho em equipe</h4>
                    <div class="progress-home">
                        <div class="progress-current" style="width: 50%;"></div>
                    </div>
                </div>
                <!--fim progress-current-->
                <!--início progress-current-->
                <div class="wrap">
                    <h4>Resolução de problemas</h4>
                    <div class="progress-home">
                        <div class="progress-current" style="width: 80%;"></div>
                    </div>
                </div>
                <!--fim progress-current-->
            </div>
        </div>
        <div class="time">
            <h1>horas trabalhadas hoje</h1>
            <div class="space-between">
                <div class="time-box">
                    <h2>12</h2>
                    <p>Horas</p>
                </div>
                <div class="time-box">
                    <h2>34</h2>
                    <p>Minutos</p>
                </div>
                <div class="time-box">
                    <h2>50</h2>
                    <p>Segundos</p>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    var active = document.querySelector("#side-conta")
    var activeImg = document.querySelector('#side-conta img')
    active.style.color = 'white'
    active.style.background = 'var(--primary-color)'
    activeImg.style.filter = 'invert(1) brightness(3)'

    function nomeFoto(event) {
        
    }
</script>
<script src="{{asset('/main.js')}}"></script>


@endsection