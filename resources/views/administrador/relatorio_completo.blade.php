@extends('layouts.main')

@section('title', 'Relatóio')

@section('links')

<link rel="stylesheet" href="{{asset('../css/relatorio.css')}}">
<link rel="stylesheet" href="{{asset('../css/tabela.css')}}">

@section('content')

@section('search')

<div class="none"></div>

@endsection


<section id="relatorio">
    <div class="inline-search">
        <h1>Relatório de movimentação de entrada e saída</h1>
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
    <div class="inline">
        <button type="button" onclick="location.href='exibirrelatorio'">Exibir relatório</button>
    </div>
    <div class="table-container">
        <div class="tabela">
            <table>
                <thead>
                    <tr>
                        <th>Nome do usuário</th>
                        <th>Nº do Bilhete</th>
                        <th>Classificado</th>
                        <th>Morador visitado</th>
                        <th>Nº do apartamento</th>
                        <th><input type="checkbox" name="" id="checkAll" onclick="activeChekBox()"></th>
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
                        <td>Visita</td>
                        <td>Luis Neves Mingo</td>
                        <td>103DL</td>
                        <td><input type="checkbox" name="" id=""></td>
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
                        <td>Visita</td>
                        <td>Luis Neves Mingo</td>
                        <td>103DL</td>
                        <td><input type="checkbox" name="" id=""></td>
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
                        <td>Visita</td>
                        <td>Luis Neves Mingo</td>
                        <td>103DL</td>
                        <td><input type="checkbox" name="" id=""></td>
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
                        <td>Visita</td>
                        <td>Luis Neves Mingo</td>
                        <td>103DL</td>
                        <td><input type="checkbox" name="" id=""></td>
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
                        <td>Visita</td>
                        <td>Luis Neves Mingo</td>
                        <td>103DL</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>


<script>
    var active = document.querySelector("#side-relatorio")
    var activeImg = document.querySelector('#side-relatorio img')
    active.style.color = 'white'
    active.style.background = 'var(--primary-color)'
    activeImg.style.filter = 'invert(1) brightness(3)'
</script>
<script src="{{asset('../js/relatorio.js')}}"></script>

@endsection