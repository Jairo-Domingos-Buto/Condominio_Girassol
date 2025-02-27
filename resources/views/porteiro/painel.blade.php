@extends('layouts.main')

@section('title', 'Painel')

@section('links')
<link rel="stylesheet" href="{{asset('../css/porteiro/painel.css')}}">
<link rel="stylesheet" href="{{asset('../css/tabela.css')}}">
<link rel="stylesheet" href="{{asset('../css/card.css')}}">

@section('content')

@section('search')

<div class="none"></div>

@endsection

<section id="painel">
    <div class="cards">
        <div class="card">
            <h3>Total de visitas hoje</h3>
            <h1>169</h1>
        </div>
        <div class="card">
            <h3>Visitas dentro do condomínio</h3>
            <h1>170</h1>
        </div>
        <div class="card">
            <h3>Visitas agendadas pra hoje</h3>
            <h1>34</h1>
        </div>
        <div class="card">
            <h3>Entregas pendentes</h3>
            <h1>7</h1>
        </div>
        <div class="card">
            <h3>Alertas Não resolvidos</h3>
            <h1>7</h1>
        </div>
    </div>
    <div class="inline-search">
        <h1>Visitas agendadas pra hoje</h1>
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
        </form>
    </div>
    <div class="table-container">
        <div class="tabela">
            <table>
                <thead>
                    <tr>
                        <th>Visitante</th>
                        <th>Nº do Bilhete</th>
                        <th>Morador visitado</th>
                        <th>Nº do apartamento</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="user">
                                <img src="{{asset('../img/avatar2.png')}}" alt="">
                                <div class="wrap">
                                    <h6>Mauro Figueira Julho</h6>
                                    <p>maurofigueira@gmail.com</p>
                                </div>
                            </div>
                        </td>
                        <td>0034655437ADLO</td>
                        <td>Luis Neves Mingo</td>
                        <td>103DL</td>
                        <td><span class="state state1">Em acção</span></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="user">
                                <img src="{{asset('../img/avatar3.png')}}" alt="">
                                <div class="wrap">
                                    <h6>Mauro Figueira Julho</h6>
                                    <p>maurofigueira@gmail.com</p>
                                </div>
                            </div>
                        </td>
                        <td>0034655437ADLO</td>
                        <td>Luis Neves Mingo</td>
                        <td>103DL</td>
                        <td><span class="state state2">Pendente</span></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="user">
                                <img src="{{asset('../img/avatar.png')}}" alt="">
                                <div class="wrap">
                                    <h6>Mauro Figueira Julho</h6>
                                    <p>maurofigueira@gmail.com</p>
                                </div>
                            </div>
                        </td>
                        <td>0034655437ADLO</td>
                        <td>Luis Neves Mingo</td>
                        <td>103DL</td>
                        <td><span class="state state1">Em acção</span></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="user">
                                <img src="{{asset('../img/avatar2.png')}}" alt="">
                                <div class="wrap">
                                    <h6>Mauro Figueira Julho</h6>
                                    <p>maurofigueira@gmail.com</p>
                                </div>
                            </div>
                        </td>
                        <td>0034655437ADLO</td>
                        <td>Luis Neves Mingo</td>
                        <td>103DL</td>
                        <td><span class="state state2">Pendente</span></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="user">
                                <img src="{{asset('../img/avatar2.png')}}" alt="">
                                <div class="wrap">
                                    <h6>Mauro Figueira Julho</h6>
                                    <p>maurofigueira@gmail.com</p>
                                </div>
                            </div>
                        </td>
                        <td>0034655437ADLO</td>
                        <td>Luis Neves Mingo</td>
                        <td>103DL</td>
                        <td><span class="state state2">Pendente</span></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="user">
                                <img src="{{asset('../img/avatar2.png')}}" alt="">
                                <div class="wrap">
                                    <h6>Mauro Figueira Julho</h6>
                                    <p>maurofigueira@gmail.com</p>
                                </div>
                            </div>
                        </td>
                        <td>0034655437ADLO</td>
                        <td>Luis Neves Mingo</td>
                        <td>103DL</td>
                        <td><span class="state state2">Pendente</span></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="user">
                                <img src="{{asset('../img/avatar2.png')}}" alt="">
                                <div class="wrap">
                                    <h6>Mauro Figueira Julho</h6>
                                    <p>maurofigueira@gmail.com</p>
                                </div>
                            </div>
                        </td>
                        <td>0034655437ADLO</td>
                        <td>Luis Neves Mingo</td>
                        <td>103DL</td>
                        <td><span class="state state2">Pendente</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<script>
    var active = document.querySelector("#side-painel")
    var activeImg = document.querySelector('#side-painel img')
    active.style.color = 'white'
    active.style.background = 'var(--primary-color)'
    activeImg.style.filter = 'invert(1) brightness(3)'
</script>

@endsection