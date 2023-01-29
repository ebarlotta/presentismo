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
            <div class="col bg-white p-5 rounded" style="opacity: 88%; margin-top: 10px; margin-bottom: 10px">
                <div class="flex" style="margin: auto; justify-content: center;">
                    <img src="{{ asset('logo/logoPresentismoMedio.png') }}" width="200" alt="">
                </div>
                <h2 class="fw-bold text-center pt-5">Bienvenido</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mt-0">
                        <x-jet-label for="name" value="{{ __('Nombre') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="email" value="{{ __('Correo Electrónico') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms" />

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' =>
                                                '<a target="_blank" href="' .
                                                route('terms.show') .
                                                '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                                __('Terms of Service') .
                                                '</a>',
                                            'privacy_policy' =>
                                                '<a target="_blank" href="' .
                                                route('policy.show') .
                                                '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                                __('Privacy Policy') .
                                                '</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                    @endif

                    {{-- <div class="flex items-center justify-end mt-4"> --}}
                        {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a> --}}
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn-primary rounded-md p-2">Registrarse</button>
                        </div>
                        <div class="d-grid mt-4">
                            <x-jet-validation-errors class="mb-4" />
                        </div>
                        {{-- <x-jet-button class="ml-4">
                            {{ __('Register') }}
                        </x-jet-button> --}}
                    {{-- </div> --}}
                </form>
                {{-- </x-jet-authentication-card> --}}
            </div>
        </div>
    </div>    
</x-guest-layout>
