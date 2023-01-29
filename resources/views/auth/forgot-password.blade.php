<x-guest-layout>
    {{-- <x-jet-authentication-card> --}}
    <x-slot name="logo">
        <x-jet-authentication-card-logo />
    </x-slot>

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
        <div class="pt-2 text-center">
            <div class="col d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded my-3">
                {{-- <img src="/img/png 01.png" width="200" alt=""> --}}
                <x-jet-validation-errors class="mb-4" />
            </div>
            <div class="m-4 mt-2 text-sm text-gray-900">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('password.email') }}" class="text-center col-12 col-md-12">
                @csrf

                <div class="mt-4 col-12 col-md-5 ml-md-auto text-center justify-center">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autofocus />
                </div>

                <div class="d-grid col-12 col-md-5 mt-4 mb-4">
                    <button type="submit" class="btn-primary rounded-md p-2 mb-4">{{ __('Email Password Reset Link') }}</button>
                </div>

                {{-- <div class="flex items-center justify-end mt-4">
                    <x-jet-button>
                        {{ __('Email Password Reset Link') }}
                    </x-jet-button>
                </div> --}}
            </form>
            {{-- </x-jet-authentication-card> --}}
        </div>
    </div>

</x-guest-layout>
