<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            <img id="logo" src="https://i.ibb.co/X27FcQt/logo-sfundo.png" alt="Loja das Lendas" > 
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Esqueceu sua senha? Sem problemas. Informe seu email de cadastro abaixo e te enviaremos um link para que possa escolher uma nova senha.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Redefinir minha senha') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
