<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="d-flex justify-content-center mb-4">
                <x-application-logo width=64 height=64 />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('auth.inputs.email')" />

                <x-input id="email" class="" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('auth.inputs.password')" />

                <x-input id="password" class="" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('auth.inputs.confirm_pass')" />

                <x-input id="password_confirmation" class=""
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="d-flex justify-content-end mt-4">
                <x-button>
                    {{ __('auth.buttons.change_pass') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
