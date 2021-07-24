<x-guest-layout>
    <div class="container flex items-center justify-center mt-5 py-10">
        <div class="w-full md:w-1/2 xl:w-1/3">
            <div class="mx-5 md:mx-10">
                <h2 class="uppercase">Create Your Account</h2>
                <h4 class="uppercase">Let's Roll</h4>
            </div>
            <form method="POST" class="card mt-5 p-5 md:p-10" action="{{ route('register') }}">
                @csrf
                <div class="mb-5">
                    <label class="label block mb-2" for="name">Name</label>
                    <input id="name" type="text" class="form-control" placeholder="John Doe" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" >
                </div>
                <div class="mb-5">
                    <label class="label block mb-2" for="email">Email</label>
                    <input id="email" type="text" class="form-control" placeholder="example@example.com" type="email" name="email" value="{{ old('email')}}" required>
                </div>
                <div class="mb-5">
                    <label class="label block mb-2" for="password">Password</label>
                    <label class="form-control-addon-within">
                        <input id="password" type="password" class="form-control border-none" value="12345" name="password" required autocomplete="new-password" >
                        <span class="flex items-center pr-4">
                            <button type="button" class="btn btn-link la la-eye text-gray-600 text-xl leading-none"
                                data-toggle="password-visibility"></button>
                        </span>
                    </label>
                </div>
                <div class="mb-5">
                    <label class="label block mb-2" for="password">Confirm Password</label>
                    <label class="form-control-addon-within">
                        <input id="password" type="password" class="form-control border-none" name="password_confirmation" required autocomplete="new-password">
                    </label>
                </div>
                <div class="flex">
                    <button type="submit" class="btn btn_primary ml-auto uppercase">Register</button>
                </div>
            </form>
        </div>
    </div>
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
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
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> --}}
</x-guest-layout>
