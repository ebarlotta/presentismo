<x-guest-layout>
    {{-- <x-jet-authentication-card> --}}
    {{-- <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot> --}}
    <style>
        body {}

        .bg {
            background-image: url(img/png\ 01.png);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
    </style>
    <div class="container w-75 mt-5 rounded shadow bg">
        <div class="flex">

            
            <div class="col d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded my-3">
                {{-- <img src="/img/png 01.png" width="200" alt=""> --}}
                {{-- <x-jet-validation-errors class="mb-4" /> --}}
            </div>
            {{-- <div class="col bg  d-lg-block col-md-5 col-lg-5 col-xl-6 rounded my-3" style="background-image: url(img/png\ 01.png)">
                cansao
            </div> --}}
            

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <div class="col bg-white p-5 rounded" style="opacity: 88%; margin-top: 10px; margin-bottom: 10px">
                <div class="flex" style="margin: auto; justify-content: center;">
                    <img src="{{ asset('logo/logoPresentismoMedio.png') }}" width="200" alt="">
                </div>
                <h2 class="fw-bold text-center py-5">Bienvenido</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <x-jet-label for="email" value="{{ __('Correo Electronico') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />
                    </div>

                    <div class="block mt-4 my-3">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                        </label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn-primary rounded-md p-2">Iniciar Sesión</button>
                    </div>

                    <div class="my-3">
                        <span>No tienes Cuenta ?
                            <a href="{{ route('register') }}"><span>{{ __(' Registrate') }}</span></a>
                    </div>

                    <div class="my-3">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"> Recuperar Contraseña</a>
                        @endif
                    </div>
                    <div class="d-grid mt-4">
                        <x-jet-validation-errors class="mb-4" />
                    </div>
{{--                    <x-jet-button class="ml-4">
                            {{ __('Log in') }}
                        </x-jet-button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
