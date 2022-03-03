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
    <div id="columns">
        <div class="titulo">
            <h2>{{$comic->title}}</h2><br>
        </div>
        <div class="imagem">
        <a href="#" class="comic-link">
            <img src={{$comic->thumbnail->path}}/portrait_xlarge.jpg alr="Teste"/>
        </div>
        <div class="span-mais">
            <span class="mais">
                Descrição
            </span>
        </div>
        <div class="span-desc">
            <span class="desc">
                @if($comic->description=='')
                     <p>Não há descrição oficial para esse quadrinho.</p>
                @elseif($comic->description=='#N/A')
                    <p>Não há descrição oficial para esse quadrinho.</p>
                @else
                 <p>{{$comic->description}}</p>}
                 @endif
            </span>
            </div>
            </a>
    </div>
@endforeach
    </div>

</main>
@endsection