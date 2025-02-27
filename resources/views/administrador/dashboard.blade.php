@extends('layouts.main')

@section('title', 'Dasboard')

@section('links')


@section('content')

@section('search')

<div class="none"></div>

@endsection

<section id="dasboard">

</section>


<script>
    var active = document.querySelector("#side-dashboard")
    var activeImg = document.querySelector('#side-dashboard img')
    active.style.color = 'white'
    active.style.background = 'var(--primary-color)'
    activeImg.style.filter = 'invert(1) brightness(3)'
</script>


@endsection