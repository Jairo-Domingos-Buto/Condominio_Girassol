@extends('layouts.main')

@section('title', 'Visitas Autorizadas')

@section('links')
<link rel="stylesheet" href="{{asset('../css/porteiro/visita_autorizada.css')}}">

@section('content')

@section('search')

<div class="none"></div>

@endsection

<section id="Autorizado">
    <div class="inline-search">
        <form action="" method="">
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
                    <div class="select-option" data-value="2">Morador</div>
                    <div class="select-option" data-value="3">Nº do apartamento</div>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <div id="visitaAutorizada">
            <!--Ínicio card-->
            <div class="card">
                <div class="content">
                    <div class="flex">
                        <img src="{{asset('../img/avatar2.png')}}" alt="">
                        <div class="wrap">
                            <p><span>Nome:</span>Mauro Luis António</p>
                            <p><span>Nº do BI:</span>545344343434ALD5</p>
                            <p><span>Idade:</span>21</p>
                            <p><span>Duração da visita:</span>3 Meses</p>
                            <p><span>Morador visitado:</span>Jorge Dias</p>
                        </div>
                    </div>
                    <div class="row">
                        <p><span>Tipo da viatura:</span>Carro</p>
                        <p><span>Marca:</span>Hyundai</p>
                        <p><span>Cor:</span>Verde</p>
                        <p><span>Matrícula:</span>LD-32-34-MS</p>
                    </div>
                </div>
                <div class="line">
                    <button type="button">Autenticar</button>
                </div>
            </div>
            <!--Fim card-->
            <!--Ínicio card-->
            <div class="card">
                <div class="content">
                    <div class="flex">
                        <img src="{{asset('../img/avatar3.png')}}" alt="">
                        <div class="wrap">
                            <p><span>Nome:</span>Mauro Luis António</p>
                            <p><span>Nº do BI:</span>545344343434ALD5</p>
                            <p><span>Idade:</span>21</p>
                            <p><span>Duração da visita:</span>3 Meses</p>
                            <p><span>Morador visitado:</span>Jorge Dias</p>
                        </div>
                    </div>
                    <div class="row">
                        <p><span>Tipo da viatura:</span>Carro</p>
                        <p><span>Marca:</span>Hyundai</p>
                        <p><span>Cor:</span>Verde</p>
                        <p><span>Matrícula:</span>LD-32-34-MS</p>
                    </div>
                </div>
                <div class="line">
                    <button type="button">Autenticar</button>
                </div>
            </div>
            <!--Fim card-->
            <!--Ínicio card-->
            <div class="card">
                <div class="content">
                    <div class="flex">
                        <img src="{{asset('../img/avatar3.png')}}" alt="">
                        <div class="wrap">
                            <p><span>Nome:</span>Mauro Luis António</p>
                            <p><span>Nº do BI:</span>545344343434ALD5</p>
                            <p><span>Idade:</span>21</p>
                            <p><span>Duração da visita:</span>3 Meses</p>
                            <p><span>Morador visitado:</span>Jorge Dias</p>
                        </div>
                    </div>
                    <div class="row">
                        <p><span>Tipo da viatura:</span>Carro</p>
                        <p><span>Marca:</span>Hyundai</p>
                        <p><span>Cor:</span>Verde</p>
                        <p><span>Matrícula:</span>LD-32-34-MS</p>
                    </div>
                </div>
                <div class="line">
                    <button type="button">Autenticar</button>
                </div>
            </div>
            <!--Fim card-->
            <!--Ínicio card-->
            <div class="card">
                <div class="content">
                    <div class="flex">
                        <img src="{{asset('../img/avatar3.png')}}" alt="">
                        <div class="wrap">
                            <p><span>Nome:</span>Mauro Luis António</p>
                            <p><span>Nº do BI:</span>545344343434ALD5</p>
                            <p><span>Idade:</span>21</p>
                            <p><span>Duração da visita:</span>3 Meses</p>
                            <p><span>Morador visitado:</span>Jorge Dias</p>
                        </div>
                    </div>
                    <div class="row">
                        <p><span>Tipo da viatura:</span>Carro</p>
                        <p><span>Marca:</span>Hyundai</p>
                        <p><span>Cor:</span>Verde</p>
                        <p><span>Matrícula:</span>LD-32-34-MS</p>
                    </div>
                </div>
                <div class="line">
                    <button type="button">Autenticar</button>
                </div>
            </div>
            <!--Fim card-->
            <!--Ínicio card-->
            <div class="card">
                <div class="content">
                    <div class="flex">
                        <img src="{{asset('../img/avatar3.png')}}" alt="">
                        <div class="wrap">
                            <p><span>Nome:</span>Mauro Luis António</p>
                            <p><span>Nº do BI:</span>545344343434ALD5</p>
                            <p><span>Idade:</span>21</p>
                            <p><span>Duração da visita:</span>3 Meses</p>
                            <p><span>Morador visitado:</span>Jorge Dias</p>
                        </div>
                    </div>
                    <div class="row">
                        <p><span>Tipo da viatura:</span>Carro</p>
                        <p><span>Marca:</span>Hyundai</p>
                        <p><span>Cor:</span>Verde</p>
                        <p><span>Matrícula:</span>LD-32-34-MS</p>
                    </div>
                </div>
                <div class="line">
                    <button type="button">Autenticar</button>
                </div>
            </div>
            <!--Fim card-->
            <!--Ínicio card-->
            <div class="card">
                <div class="content">
                    <div class="flex">
                        <img src="{{asset('../img/avatar2.png')}}" alt="">
                        <div class="wrap">
                            <p><span>Nome:</span>Mauro Luis António</p>
                            <p><span>Nº do BI:</span>545344343434ALD5</p>
                            <p><span>Idade:</span>21</p>
                            <p><span>Duração da visita:</span>3 Meses</p>
                            <p><span>Morador visitado:</span>Jorge Dias</p>
                        </div>
                    </div>
                    <div class="row">
                        <p><span>Tipo da viatura:</span>Carro</p>
                        <p><span>Marca:</span>Hyundai</p>
                        <p><span>Cor:</span>Verde</p>
                        <p><span>Matrícula:</span>LD-32-34-MS</p>
                    </div>
                </div>
                <div class="line">
                    <button type="button">Autenticar</button>
                </div>
            </div>
            <!--Fim card-->
            <!--Ínicio card-->
            <div class="card">
                <div class="content">
                    <div class="flex">
                        <img src="{{asset('../img/avatar3.png')}}" alt="">
                        <div class="wrap">
                            <p><span>Nome:</span>Mauro Luis António</p>
                            <p><span>Nº do BI:</span>545344343434ALD5</p>
                            <p><span>Idade:</span>21</p>
                            <p><span>Duração da visita:</span>3 Meses</p>
                            <p><span>Morador visitado:</span>Jorge Dias</p>
                        </div>
                    </div>
                    <div class="row">
                        <p><span>Tipo da viatura:</span>Carro</p>
                        <p><span>Marca:</span>Hyundai</p>
                        <p><span>Cor:</span>Verde</p>
                        <p><span>Matrícula:</span>LD-32-34-MS</p>
                    </div>
                </div>
                <div class="line">
                    <button type="button">Autenticar</button>
                </div>
            </div>
            <!--Fim card-->
            <!--Ínicio card-->
            <div class="card">
                <div class="content">
                    <div class="flex">
                        <img src="{{asset('../img/avatar2.png')}}" alt="">
                        <div class="wrap">
                            <p><span>Nome:</span>Mauro Luis António</p>
                            <p><span>Nº do BI:</span>545344343434ALD5</p>
                            <p><span>Idade:</span>21</p>
                            <p><span>Duração da visita:</span>3 Meses</p>
                            <p><span>Morador visitado:</span>Jorge Dias</p>
                        </div>
                    </div>
                    <div class="row">
                        <p><span>Tipo da viatura:</span>Carro</p>
                        <p><span>Marca:</span>Hyundai</p>
                        <p><span>Cor:</span>Verde</p>
                        <p><span>Matrícula:</span>LD-32-34-MS</p>
                    </div>
                </div>
                <div class="line">
                    <button type="button">Autenticar</button>
                </div>
            </div>
            <!--Fim card-->
            <!--Ínicio card-->
            <div class="card">
                <div class="content">
                    <div class="flex">
                        <img src="{{asset('../img/avatar2.png')}}" alt="">
                        <div class="wrap">
                            <p><span>Nome:</span>Mauro Luis António</p>
                            <p><span>Nº do BI:</span>545344343434ALD5</p>
                            <p><span>Idade:</span>21</p>
                            <p><span>Duração da visita:</span>3 Meses</p>
                            <p><span>Morador visitado:</span>Jorge Dias</p>
                        </div>
                    </div>
                    <div class="row">
                        <p><span>Tipo da viatura:</span>Carro</p>
                        <p><span>Marca:</span>Hyundai</p>
                        <p><span>Cor:</span>Verde</p>
                        <p><span>Matrícula:</span>LD-32-34-MS</p>
                    </div>
                </div>
                <div class="line">
                    <button type="button">Autenticar</button>
                </div>
            </div>
            <!--Fim card-->
            <!--Ínicio card-->
            <div class="card">
                <div class="content">
                    <div class="flex">
                        <img src="{{asset('../img/avatar2.png')}}" alt="">
                        <div class="wrap">
                            <p><span>Nome:</span>Mauro Luis António</p>
                            <p><span>Nº do BI:</span>545344343434ALD5</p>
                            <p><span>Idade:</span>21</p>
                            <p><span>Duração da visita:</span>3 Meses</p>
                            <p><span>Morador visitado:</span>Jorge Dias</p>
                        </div>
                    </div>
                    <div class="row">
                        <p><span>Tipo da viatura:</span>Carro</p>
                        <p><span>Marca:</span>Hyundai</p>
                        <p><span>Cor:</span>Verde</p>
                        <p><span>Matrícula:</span>LD-32-34-MS</p>
                    </div>
                </div>
                <div class="line">
                    <button type="button">Autenticar</button>
                </div>
            </div>
            <!--Fim card-->
            <!--Ínicio card-->
            <div class="card">
                <div class="content">
                    <div class="flex">
                        <img src="{{asset('../img/avatar2.png')}}" alt="">
                        <div class="wrap">
                            <p><span>Nome:</span>Mauro Luis António</p>
                            <p><span>Nº do BI:</span>545344343434ALD5</p>
                            <p><span>Idade:</span>21</p>
                            <p><span>Duração da visita:</span>3 Meses</p>
                            <p><span>Morador visitado:</span>Jorge Dias</p>
                        </div>
                    </div>
                    <div class="row">
                        <p><span>Tipo da viatura:</span>Carro</p>
                        <p><span>Marca:</span>Hyundai</p>
                        <p><span>Cor:</span>Verde</p>
                        <p><span>Matrícula:</span>LD-32-34-MS</p>
                    </div>
                </div>
                <div class="line">
                    <button type="button">Autenticar</button>
                </div>
            </div>
            <!--Fim card-->
            <!--Ínicio card-->
            <div class="card">
                <div class="content">
                    <div class="flex">
                        <img src="{{asset('../img/avatar2.png')}}" alt="">
                        <div class="wrap">
                            <p><span>Nome:</span>Mauro Luis António</p>
                            <p><span>Nº do BI:</span>545344343434ALD5</p>
                            <p><span>Idade:</span>21</p>
                            <p><span>Duração da visita:</span>3 Meses</p>
                            <p><span>Morador visitado:</span>Jorge Dias</p>
                        </div>
                    </div>
                    <div class="row">
                        <p><span>Tipo da viatura:</span>Carro</p>
                        <p><span>Marca:</span>Hyundai</p>
                        <p><span>Cor:</span>Verde</p>
                        <p><span>Matrícula:</span>LD-32-34-MS</p>
                    </div>
                </div>
                <div class="line">
                    <button type="button">Autenticar</button>
                </div>
            </div>
            <!--Fim card-->
        </div>
    </div>
</section>

<script>
    var active = document.querySelector("#side-visita-autorizada")
    var activeImg = document.querySelector('#side-visita-autorizada img')
    active.style.color = 'white'
    active.style.background = 'var(--primary-color)'
    activeImg.style.filter = 'invert(1) brightness(3)'
</script>

@endsection