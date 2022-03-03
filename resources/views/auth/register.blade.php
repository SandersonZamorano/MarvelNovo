@extends('layout.main')
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
@section('title','Cadastre-se')
        <x-jet-validation-errors class="mb-4" />
@section('content')
        <div class="teste">
            <form method="POST" action="{{ route('register') }}">
                <fieldset>
                    <legend>Cadastre-se</legend>
                    @csrf
                    <div class="input-box">
                        <label for="name" value="{{ __('Nome') }}" class="label-input">
                        <input id="name" class="login-input" type="text" name="name" :value="old('name')" placeholder="Nome" required autofocus autocomplete="name" />
                    </div>
                    <br>
                    <div class="input-box">
                        <label for="email" value="{{ __('Email') }}" class="label-input">
                        <input id="email" class="login-input" type="email" name="email" :value="old('email')" placeholder="Email" required />
                    </div>
                    <br>
                    <div class="input-box">
                        <label for="password" value="{{ __('Senha') }}" class="label-input">
                        <input id="password" class="login-input" type="password" name="password" placeholder="Senha" required autocomplete="new-password" />
                    </div>
                    <br>
                    <div class="input-box">
                        <label for="password_confirmation" value="{{ __('Confirme a sua senha') }}" class="label-input">
                        <input id="password_confirmation" class="login-input" type="password" name="password_confirmation" placeholder="Confirme sua senha" required autocomplete="new-password" />
                    </div>
                    <br>
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="input-box">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms"/>
                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                        <br>
                    @endif
                    <div class="adsfas">
                        <a class="text-1" href="{{ route('login') }}">
                            {{ __('Já possui uma conta?') }}
                        </a>
                        <br><br>
                        <button type="submit" class="submit-padrao">
                            {{ __('Cadastrar') }}
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
@endsection
