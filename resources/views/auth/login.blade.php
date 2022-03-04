@extends('layout.main')
@section('title','Cadastre-se')

@section('content')
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo" class="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="input-box">
                {{ session('status') }}
            </div>
        @endif

        <div class="div-fundo">
            <h1 class="titulo">Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <fieldset>
                <div class="input-box">
                    <label for="email" value="{{ __('Email')}}" placeholder="Email">
                    <input id="email" class="login-input" type="email" name="email" :value="old('email')" required autofocus placeholder="Email"/>
                </div>

                <div class="input-box">
                    <label for="password" value="{{ __('Password') }}">
                    <input id="password" class="login-input" type="password" name="password" required autocomplete="current-password" placeholder="Senha"/>
                </div>
                <br>
            <div class="input-box">
                <label for="remember_me" class="div-login">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Salvar') }}</span>
                </label>
            </div>
            <br>
            <div class="input-box">
                @if (Route::has('password.request'))
                    <a class="div-login" href="{{ route('password.request') }}">
                        {{ __('Esqueceu a senha?') }}
                    </a>
                @endif
                <br><br>
                
                <button class="submit-padrao">
                    {{ __('Login') }}
                <button>

                <a href="{{ route('register')}}">
                    <button class="submit-padrao">
                    {{ __('Cadastre-se') }}
                    </button>
                </a>
            </div>
        </form>
            </fieldset>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
@endsection
