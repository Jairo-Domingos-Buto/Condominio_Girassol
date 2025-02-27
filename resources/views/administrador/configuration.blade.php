@extends('layouts.main')

@section('title', 'Dasboard')

@section('links')
<link rel="stylesheet" href="{{asset('../css/administrador/bar_select.css')}}">
<link rel="stylesheet" href="{{asset('../css/administrador/configuration.css')}}">


@section('content')

@section('search')

<div class="none"></div>

@endsection

<section id="configuration">
    <div class="content">
        <div class="float-right">
            <button><img src="{{asset('../img/save.png')}}" alt=""> Salvar</button>
        </div>
        <div class="area">
            <div class="line">
                <h1>Porteiros</h1>
            </div>
            <div class="bar-container">
                <div class="bar">
                    <div class="show" onclick="showOption(this)">
                        <h1 for="">Atribuir acesso no sistema</h1>
                        <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                    </div>
                    <div class="select-edit">
                        <div class="edit multi-select" data-value="1" onclick="selecionarMulti(this)">Eliminar visitante <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit multi-select" data-value="2" onclick="selecionarMulti(this)">Editar perfil <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit multi-select" data-value="3" onclick="selecionarMulti(this)">Eliminar registo <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="show" onclick="showOption(this)">
                        <h1 for="">Restringir acesso no sistema</h1>
                        <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                    </div>
                    <div class="select-edit">
                        <div class="edit multi-select" data-value="1" onclick="selecionarMulti(this)">Eliminar visitante <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit multi-select" data-value="2" onclick="selecionarMulti(this)">Editar perfil <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit multi-select" data-value="3" onclick="selecionarMulti(this)">Eliminar registo <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                    </div>
                </div>

                <div class="bar">
                    <div class="show" onclick="showOption(this)">
                        <h1 for="">Trocar posição</h1>
                        <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                    </div>
                    <div class="select-edit">
                        <div class="edit uni-select" data-value="1" onclick="selecionarUni(this)">Portão Pincipal <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit uni-select" data-value="2" onclick="selecionarUni(this)">Portão Secundáio <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="show" onclick="showOption(this)">
                        <h1 for="">Trocar supervisor</h1>
                        <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                    </div>
                    <div class="select-edit">
                        <div class="edit uni-select" data-value="1" onclick="selecionarUni(this)">Luis Marcos Pedro <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit uni-select" data-value="2" onclick="selecionarUni(this)">Jorge gonsalves Rui <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit uni-select" data-value="3" onclick="selecionarUni(this)">Emanuel Dias Noite <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit uni-select" data-value="3" onclick="selecionarUni(this)">Miguel Senior Junior <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="area">
            <div class="line">
                <h1>Moradores</h1>
            </div>
            <div class="bar-container">
                <div class="bar">
                    <div class="show" onclick="showOption(this)">
                        <h1 for="">Atribuir acesso no sistema</h1>
                        <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                    </div>
                    <div class="select-edit">
                        <div class="edit multi-select" data-value="1" onclick="selecionarMulti(this)">Eliminar visitante <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit multi-select" data-value="2" onclick="selecionarMulti(this)">Editar perfil <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit multi-select" data-value="3" onclick="selecionarMulti(this)">Eliminar registo <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="show" onclick="showOption(this)">
                        <h1 for="">Restringir acesso no sistema</h1>
                        <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                    </div>
                    <div class="select-edit">
                        <div class="edit multi-select" data-value="1" onclick="selecionarMulti(this)">Eliminar visitante <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit multi-select" data-value="2" onclick="selecionarMulti(this)">Editar perfil <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit multi-select" data-value="3" onclick="selecionarMulti(this)">Eliminar registo <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                    </div>
                </div>

                <div class="bar">
                    <div class="show" onclick="showOption(this)">
                        <h1 for="">Trocar posição</h1>
                        <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                    </div>
                    <div class="select-edit">
                        <div class="edit uni-select" data-value="1" onclick="selecionarUni(this)">Portão Pincipal <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit uni-select" data-value="2" onclick="selecionarUni(this)">Portão Secundáio <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="show" onclick="showOption(this)">
                        <h1 for="">Trocar supervisor</h1>
                        <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                    </div>
                    <div class="select-edit">
                        <div class="edit uni-select" data-value="1" onclick="selecionarUni(this)">Luis Marcos Pedro <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit uni-select" data-value="2" onclick="selecionarUni(this)">Jorge gonsalves Rui <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit uni-select" data-value="3" onclick="selecionarUni(this)">Emanuel Dias Noite <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit uni-select" data-value="3" onclick="selecionarUni(this)">Miguel Senior Junior <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="area">
            <div class="line">
                <h1>Visitas</h1>
            </div>
            <div class="bar-container">
                <div class="bar">
                    <div class="show" onclick="showOption(this)">
                        <h1 for="">Atribuir acesso no sistema</h1>
                        <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                    </div>
                    <div class="select-edit">
                        <div class="edit multi-select" data-value="1" onclick="selecionarMulti(this)">Eliminar visitante <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit multi-select" data-value="2" onclick="selecionarMulti(this)">Editar perfil <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit multi-select" data-value="3" onclick="selecionarMulti(this)">Eliminar registo <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="show" onclick="showOption(this)">
                        <h1 for="">Restringir acesso no sistema</h1>
                        <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                    </div>
                    <div class="select-edit">
                        <div class="edit multi-select" data-value="1" onclick="selecionarMulti(this)">Eliminar visitante <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit multi-select" data-value="2" onclick="selecionarMulti(this)">Editar perfil <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit multi-select" data-value="3" onclick="selecionarMulti(this)">Eliminar registo <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                    </div>
                </div>

                <div class="bar">
                    <div class="show" onclick="showOption(this)">
                        <h1 for="">Trocar posição</h1>
                        <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                    </div>
                    <div class="select-edit">
                        <div class="edit uni-select" data-value="1" onclick="selecionarUni(this)">Portão Pincipal <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit uni-select" data-value="2" onclick="selecionarUni(this)">Portão Secundáio <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="show" onclick="showOption(this)">
                        <h1 for="">Trocar supervisor</h1>
                        <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                    </div>
                    <div class="select-edit">
                        <div class="edit uni-select" data-value="1" onclick="selecionarUni(this)">Luis Marcos Pedro <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit uni-select" data-value="2" onclick="selecionarUni(this)">Jorge gonsalves Rui <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit uni-select" data-value="3" onclick="selecionarUni(this)">Emanuel Dias Noite <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                        <div class="edit uni-select" data-value="3" onclick="selecionarUni(this)">Miguel Senior Junior <img src="{{asset('../img/green_checkmark.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="side">
        <div class="profile-admin">
            <div class="profile">
                <img src="{{asset('../img/avatar.png')}}" alt="">
                <div class="wrap">
                    <h4>João Luis Mora</h4>
                    <p>Administrador</p>
                </div>
            </div>
        </div>
        <div class="profile-update">
            <div class="bar-container">
                <div class="bar-input">
                    <p>Nome:</p>
                    <input type="text" name="" id="" placeholder="João Luis Mora">
                </div>
                <div class="bar-input">
                    <p>Email:</p>
                    <input type="text" name="" id="" placeholder="Joãoluismora@gmail.com">
                </div>
                <div class="bar-input">
                    <p>Telefone:</p>
                    <input type="tel" name="" id="" placeholder="932-423-823">
                </div>
                <div class="bar-input">
                    <p>Senha Atual:</p>
                    <input type="text" name="" id="" placeholder="***********">
                </div>
                <div class="bar-input">
                    <p>Senha Nova:</p>
                    <input type="text" name="" id="">
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    var active = document.querySelector("#side-configuration")
    var activeImg = document.querySelector('#side-configuration img')
    active.style.color = 'white'
    active.style.background = 'var(--primary-color)'
    activeImg.style.filter = 'invert(1) brightness(3)'
</script>
<script src="{{asset('../js/administrador/bar-select.js')}}"></script>

@endsection