@extends('layouts.main')

@section('title', 'Alertas')

@section('links')
<link rel="stylesheet" href="{{asset('../css/porteiro/alerta.css')}}">
<link rel="stylesheet" href="{{asset('../css/tabela.css')}}">

@section('content')

@section('search')

<div class="none"></div>

@endsection

<section id="alerta">
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
        </form>
    </div>
    <div class="table-container">
        <div class="tabela">
            <table>
                <thead>
                    <tr>
                        <th>Morador</th>
                        <th>Contacto</th>
                        <th>Estação</th>
                        <th>Tipo de alerta</th>
                        <th>Descrição</th>
                        <th>Status</th>
                        <th>Data e hora</th>
                        <th>...</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mauro Figueira Julho</td>
                        <td>945 325 323</td>
                        <td>D34A</td>
                        <td>Emergência Médica</td>
                        <td>Desmaio por falta de ar</td>
                        <td><span class="state state1">Resolvido</span></td>
                        <td>12 / 15 / 2024 <span>15:34</span></td>
                        <td><button><img src="{{asset('../img/delete.png')}}" alt=""></button></td>
                    </tr>
                    <tr>
                        <td>Mauro Figueira Julho</td>
                        <td>945 325 323</td>
                        <td>Portão frontal</td>
                        <td>Emergência Médica</td>
                        <td>Desmaio por falta de ar</td>
                        <td><span class="state state2">Pendente</span></td>
                        <td>12 / 15 / 2024 <span>15:34</span></td>
                        <td><button><img src="{{asset('../img/delete.png')}}" alt=""></button></td>
                    </tr>
                    <tr>
                        <td>Mauro Figueira Julho</td>
                        <td>945 325 323</td>
                        <td>Garagem</td>
                        <td>Emergência Médica</td>
                        <td>Desmaio por falta de ar</td>
                        <td><span class="state state3">Em acção</span></td>
                        <td>12 / 15 / 2024 <span>15:34</span></td>
                        <td><button><img src="{{asset('../img/delete.png')}}" alt=""></button></td>
                    </tr>
                    <tr>
                        <td>Mauro Figueira Julho</td>
                        <td>945 325 323</td>
                        <td>D34A</td>
                        <td>Emergência Médica</td>
                        <td>Desmaio por falta de ar</td>
                        <td><span class="state state1">Pendente</span></td>
                        <td>12 / 15 / 2024 <span>15:34</span></td>
                        <td><button><img src="{{asset('../img/delete.png')}}" alt=""></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="line">
        <button>Apagar tudo</button>
    </div>
</section>

<script>
    var active = document.querySelector("#side-alerta")
    var activeImg = document.querySelector('#side-alerta img')
    active.style.color = 'white'
    active.style.background = 'var(--primary-color)'
    activeImg.style.filter = 'invert(1) brightness(3)'
</script>

@endsection