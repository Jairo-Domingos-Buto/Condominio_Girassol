<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('../css/login.css')}}">
    <link rel="stylesheet" href="{{asset('../css/style.css')}}">
    <link rel="stylesheet" href="{{asset('../css/personalizado.css')}}">
</head>

<body>
    <section id="container">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <h1>Login</h1>
            <div class="wrap">
                <label for="email" value="{{ __('Email') }}">Email</label>
                <input type="email" id="email" type="email" name="email" required autofocus autocomplete="username">
            </div>
            <div class="wrap">
                <label for="password">Senha</label>
                <input type="password" name="password" required autocomplete="current-password" id="password">
            </div>
            <div class="line">
                <input type="checkbox" name="remember" id="remember_me"><label for="remember_me">Relembrar-me</label>
            </div>


            <div class="between">
                <button type="button" onclick="location.href='/criarconta'">Criar conta</button>
                <button type="submit">Entrar</button>
            </div>
            <div class="center">
                @if (Route::has('password.request'))
                <a class="" href="{{ route('password.request') }}">
                    {{ __('Esqueceu a sua palavra passe?') }}
                </a>
                @endif
            </div>
            <!--inicio mensagem-->
            <p class="message">
                <x-validation-errors class="message-component message-center" />
            </p>
            <!--fim mensagem-->
        </form>
    </section>

    <script src="{{asset('../js/personalizado.js')}}"></script>

</body>

</html>