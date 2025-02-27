@extends('layouts.main')

@section('title', 'Prestadores')

@section('links')
<link rel="stylesheet" href="{{asset('../css/porteiro/autenticacao.css')}}">
<link rel="stylesheet" href="{{asset('../css/cadastro.css')}}">

@section('content')

@section('search')

<div class="none"></div>

@endsection

<section id="auth">
    <div class="row-wrap">
        <div class="divider">
            <h1>Autenticação de prestadores de serviços</h1>
            <div class="wrap">
                <label for="">Nome completo</label>
                <input type="text" name="" id="">
            </div>
            <div class="wrap">
                <label for="">Nº do Bilhete</label>
                <input type="text" name="" id="">
            </div>
            <div class="wrap">
                <label>Tipo de serviço</label>
                <div class="select-container">
                    <div class="show-option" id="showOption">
                        <div class="custom-select" id="customSelect">
                            Selecione uma opção
                        </div>
                        <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                    </div>
                    <div class="select-options" id="selectOptions">
                        <div class="select-option" data-value="1">Entrega ao domicílio</div>
                        <div class="select-option" data-value="2">Taxí</div>
                        <div class="select-option" data-value="3">Faxina</div>
                        <div class="select-option" data-value="4">Outro</div>
                    </div>
                </div>
            </div>
            <div class="wrap">
                <label for="">Empresa</label>
                <input type="text" name="" id="">
            </div>
            <div class="wrap">
                <label for="">Tipo de veículo</label>
                <div class="select-container desabilitado">
                    <div class="show-option" id="showOption">
                        <div class="custom-select" id="customSelect">
                            Selecione uma opção
                        </div>
                        <img src="{{asset('../img/sort_down_52px.png')}}" alt="">
                    </div>
                    <div class="select-options" id="selectOptions">
                        <div class="select-option" data-value="1">Carro</div>
                        <div class="select-option" data-value="2">Mota</div>
                        <div class="select-option" data-value="3">Caminhão</div>
                    </div>
                </div>
            </div>
            <div class="wrap">
                <label for="">Marca</label>
                <input type="text" name="" id="" class="desabilitado">
            </div>
            <div class="wrap">
                <label for="">Matrícula</label>
                <input type="text" name="" id="" class="desabilitado">
            </div>
            <div class="wrap">
                <label for="">Cor</label>
                <input type="text" name="" id="" class="desabilitado">
            </div>
            <div class="divider">
                <div class="line">
                    <label for="check" onclick="customCheck()" class="check">Não possui um veículo
                        <div class="custom-checkbox">
                            <img src="{{asset('../img/checkmark.png')}}" id="checkImg" alt="">
                        </div>
                    </label>
                    <input type="checkbox" name="" id="check">
                </div>
            </div>
        </div>
        <div class="divider mostrar-foto">
            <h1>Foto</h1>
            <div class="foto">
                <img src="{{asset('../img/sem_foto.png')}}" alt="">
            </div>
            <p class="status-foto">Sem fotografia</p>
        </div>
        <div class="divider">
            <h1>Observação</h1>
            <div class="wrap obs">
                <textarea name="" id=""></textarea>
            </div>
        </div>
        <div class="btn">
            <button type="button">Limpar</button>
            <button type="button">Autorizar</button>
        </div>
    </div>
</section>


<script>
    var active = document.querySelector("#side-prestador")
    var activeImg = document.querySelector('#side-prestador img')
    active.style.color = 'white'
    active.style.background = 'var(--primary-color)'
    activeImg.style.filter = 'invert(1) brightness(3)'
</script>


@endsection