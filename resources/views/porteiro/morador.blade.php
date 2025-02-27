@extends('layouts.main')

@section('title', 'Moradores')

@section('links')
<link rel="stylesheet" href="{{asset('../css/porteiro/autenticacao.css')}}">
<link rel="stylesheet" href="{{asset('../css/cadastro.css')}}">

@section('content')

@section('search')

<div class="none"></div>

@endsection

<script>
    var active = document.querySelector("#side-morador")
    var activeImg = document.querySelector('#side-morador img')
    active.style.color = 'white'
    active.style.background = 'var(--primary-color)'
    activeImg.style.filter = 'invert(1) brightness(3)'
</script>

@endsection