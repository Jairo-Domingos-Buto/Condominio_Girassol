@extends('layouts.main')

@section('title', 'Lista de Visitas')

@section('links')
<link rel="stylesheet" href="{{asset('../css/porteiro/lista.css')}}">

@section('content')

@section('search')

<div class="none"></div>

@endsection

<section id="lista">
    <div class="inline-search">
        <form action="" method="" id="formSelect">
            <div class="search">
                <input type="search" name="" id="" placeholder="Nome da visita...">
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
    <div class="container">
        <div class="listing">
            <!--inicio inline-->
            <div class="inline more-list">
                <figure>
                    <img src="{{asset('/img/avatar3.png')}}" alt="">
                </figure>

                <div class="information">
                    <!--inicio block-->
                    <div class="block">
                        <h1>identidade</h1>
                        <div class="line">
                            <div class="wrap">
                                <h2>Nome</h2>
                                <p>Carlos Augusto Miles</p>
                            </div>
                            <div class="wrap">
                                <h2>Nº do Bilhete</h2>
                                <p>0000123233LDAO</p>
                            </div>
                            <div class="wrap">
                                <h2>Data de Nascimento</h2>
                                <p>13 - 06 - 2005</p>
                            </div>
                        </div>
                    </div>
                    <!--fim block-->
                    <!--inicio block-->
                    <div class="block">
                        <h1>Contactos</h1>
                        <div class="line">
                            <div class="wrap">
                                <h2>Telefone</h2>
                                <p>934 543 775</p>
                            </div>
                            <div class="wrap">
                                <h2>E-mail</h2>
                                <p>carlosaugusto@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <!--fim block-->
                    <!--inicio block-->
                    <div class="block">
                        <h1>Associados</h1>
                        <div class="line">
                            <div class="wrap">
                                <h2>Nº de associados</h2>
                                <p>1</p>
                            </div>
                            <div class="wrap">
                                <h2>1º Associado</h2>
                                <p><span class="bold">Nome:</span>Marcos Primeiro Rui</p>
                                <p><span class="bold">BI:</span>0000123233LDAO</p>
                                <p><span class="bold">Idade:</span>16</p>
                            </div>
                        </div>
                    </div>
                    <!--fim block-->
                    <!--inicio block-->
                    <div class="block">
                        <h1>sobre o condomínio</h1>
                        <div class="line">
                            <div class="wrap">
                                <h2>Morador</h2>
                                <p>Laurindo Moras</p>
                            </div>
                            <div class="wrap">
                                <h2>Nº do apartamento</h2>
                                <p>13D9</p>
                            </div>
                            <div class="wrap">
                                <h2>Entrada</h2>
                                <p>16h 17- 06 - 2024</p>
                            </div>
                            <div class="wrap">
                                <h2>Saida</h2>
                                <p>16h 18- 06 - 2024</p>
                            </div>
                            <div class="wrap">
                                <h2>Permanência</h2>
                                <p>8h</p>
                            </div>
                        </div>
                    </div>
                    <!--fim block-->
                    <!--inicio block-->
                    <div class="block">
                        <h1>veículo</h1>
                        <div class="line">
                            <div class="wrap">
                                <h2>Tipo</h2>
                                <p>Carro</p>
                            </div>
                            <div class="wrap">
                                <h2>Matrícula</h2>
                                <p>LD 23-31-6AG</p>
                            </div>
                            <div class="wrap">
                                <h2>Cor</h2>
                                <p>Verde</p>
                            </div>
                        </div>
                    </div>
                    <!--fim block-->
                </div>
                <button type="button" onclick="moreList(this)" class="ver">Extender</button>
            </div>
            <!--fim inline-->
            <!--inicio inline-->
            <div class="inline more-list">
                <figure>
                    <img src="{{asset('/img/avatar3.png')}}" alt="">
                </figure>

                <div class="information">
                    <!--inicio block-->
                    <div class="block">
                        <h1>identidade</h1>
                        <div class="line">
                            <div class="wrap">
                                <h2>Nome</h2>
                                <p>Carlos Augusto Miles</p>
                            </div>
                            <div class="wrap">
                                <h2>Nº do Bilhete</h2>
                                <p>0000123233LDAO</p>
                            </div>
                            <div class="wrap">
                                <h2>Data de Nascimento</h2>
                                <p>13 - 06 - 2005</p>
                            </div>
                        </div>
                    </div>
                    <!--fim block-->
                    <!--inicio block-->
                    <div class="block">
                        <h1>Contactos</h1>
                        <div class="line">
                            <div class="wrap">
                                <h2>Telefone</h2>
                                <p>934 543 775</p>
                            </div>
                            <div class="wrap">
                                <h2>E-mail</h2>
                                <p>carlosaugusto@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <!--fim block-->
                    <!--inicio block-->
                    <div class="block">
                        <h1>Associados</h1>
                        <div class="line">
                            <div class="wrap">
                                <h2>Nº de associados</h2>
                                <p>1</p>
                            </div>
                            <div class="wrap">
                                <h2>1º Associado</h2>
                                <p><span class="bold">Nome:</span>Marcos Primeiro Rui</p>
                                <p><span class="bold">BI:</span>0000123233LDAO</p>
                                <p><span class="bold">Idade:</span>16</p>
                            </div>
                        </div>
                    </div>
                    <!--fim block-->
                    <!--inicio block-->
                    <div class="block">
                        <h1>sobre o condomínio</h1>
                        <div class="line">
                            <div class="wrap">
                                <h2>Morador</h2>
                                <p>Laurindo Moras</p>
                            </div>
                            <div class="wrap">
                                <h2>Nº do apartamento</h2>
                                <p>13D9</p>
                            </div>
                            <div class="wrap">
                                <h2>Entrada</h2>
                                <p>16h 17- 06 - 2024</p>
                            </div>
                            <div class="wrap">
                                <h2>Saida</h2>
                                <p>16h 18- 06 - 2024</p>
                            </div>
                            <div class="wrap">
                                <h2>Permanência</h2>
                                <p>8h</p>
                            </div>
                        </div>
                    </div>
                    <!--fim block-->
                    <!--inicio block-->
                    <div class="block">
                        <h1>veículo</h1>
                        <div class="line">
                            <div class="wrap">
                                <h2>Tipo</h2>
                                <p>Carro</p>
                            </div>
                            <div class="wrap">
                                <h2>Matrícula</h2>
                                <p>LD 23-31-6AG</p>
                            </div>
                            <div class="wrap">
                                <h2>Cor</h2>
                                <p>Verde</p>
                            </div>
                        </div>
                    </div>
                    <!--fim block-->
                </div>
                <button type="button" onclick="moreList(this)" class="ver">Extender</button>
            </div>
            <!--fim inline-->
        </div>
    </div>
</section>


<script>
    var active = document.querySelector("#side-lista-visita")
    var activeImg = document.querySelector('#side-lista-visita img')
    active.style.color = 'white'
    active.style.background = 'var(--primary-color)'
    activeImg.style.filter = 'invert(1) brightness(3)'
</script>
<script src="{{asset('../js/porteiro/lista.js')}}"></script>


@endsection