@extends('layouts.main')

@section('title', 'Dashboard')

@section('links')
<link rel="stylesheet" href="{{asset('../css/morador/home.css')}}">

@section('content')

@section('search')

<div class="none"></div>

@endsection

<section class="container">

    <div class="cards">
        <div class="card">
            <p class="card-info">Entradas Pendente</p>
            <p class="card-number">10</p>
        </div>
        <div class="card">
            <p class="card-info">Entradas Pendente</p>
            <p class="card-number">10</p>
        </div>
        <div class="card">
            <p class="card-info">Entradas Pendente</p>
            <p class="card-number">10</p>
        </div>
        <div class="card">
            <p class="card-info">Entradas Pendente</p>
            <p class="card-number">10</p>
        </div>
    </div>
    <div class="notification-alert">
        <svg class="notification-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="1.5">
            <path
                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
            </path>
        </svg>
        <p><span class="number-of-notification">9</span> Solicitacoes de entrada de visitante a espera de aprovacao
        </p>
    </div>

    <div class="table-container">
        <h3>Últimas Entradas</h3>
        <table>
            <thead>
                <tr>
                    <th>Visitante</th>
                    <th>Contacto</th>
                    <th>Nº do BI</th>
                    <th>Status de entrada</th>
                    <th>Veiculo</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Carlos Silva</td>
                    <td id="contacto">
                        <p>934943554</p>

                        <p>jairobuto@gmail.com</p>
                    </td>
                    <td>AOL6553633634</td>
                    <td><span class="status-active">Autorizado</span></td>
                    <td>Lander Cruser</td>
                    <td>
                        <div id="data">
                            <p>Inicio: 12-12-2024</p>
                            <p>Fim: 14-12-2024</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Ana </td>
                    <td id="contacto">
                        <p>934943554</p>

                        <p>jairobuto@gmail.com</p>
                    </td>
                    <td>AOL6553633634</td>
                    <td><span class="status-pending">Pendente</span></td>
                    <td>BMW</td>
                    <td>
                        <div id="data">
                            <p>Inicio: 12-12-2024</p>
                            <p>Fim: 14-12-2024</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Roberto Lima</td>
                    <td id="contacto">
                        <p>934943554</p>

                        <p>jairobuto@gmail.com</p>
                    </td>
                    <td>AOL6553633634</td>
                    <td><span class="status-active">Autorizado</span></td>
                    <td>Porche</td>
                    <td>
                        <div id="data">
                            <p>Inicio: 12-12-2024</p>
                            <p>Fim: 14-12-2024</p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</section>

<script>
    var active = document.querySelector("#side-dashboard-morador")
    var activeImg = document.querySelector('#side-dashboard-morador img')
    active.style.color = 'white'
    active.style.background = 'var(--primary-color)'
    activeImg.style.filter = 'invert(1) brightness(3)'
</script>

@endsection
