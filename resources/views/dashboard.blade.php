@extends('layout.main')

@section('title', 'Marvel')

@section('content')
<header>
    <nav>
        <a class="logo" href="/">Marvel</a>
        <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-list">
            @auth
            <form action="/logout" method="POST">
                @csrf
                <a href="/logout" 
                class="nav-button" 
                onclick="event.preventDefault();
                this.closest('form').submit();">
                Sair
            </a>
            </form>
            @endauth
            @guest
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Cadastre-se</a></li>
            @endguest
        </ul>
    </nav>
</header>
<main>
    <div class=teste>
@foreach($resultado->data->results as $comic) 
     <h2>Titulo: {{$comic->title}}</h2><br>
     <p>Descrição: {{$comic->description}}<p><br>
     <div class="imagem"img><p><img src={{$comic->thumbnail->path}}/portrait_xlarge.jpg alr="Teste" </p></div><hr>
@endforeach

    </div>
</main>
@endsection