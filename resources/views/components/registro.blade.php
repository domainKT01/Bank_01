<x-guest-layout>
  <x-jet-authentication-card>
    <x-slot name="logo">
      <x-jet-authentication-card-logo />
    </x-slot>

    <x-jet-validation-errors class="mb-4" />

    <div class="h-screen bg-slate-50 flex justify-center items-center w-full">

      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-md max-w-sm">
          <img class="h-14 mb-4 mx-auto" src="images/banco_de_sangre.png" alt="banco de sangre de cordoba">
          <div class="space-y-4">
            <h1 class="text-center text-2xl font-semibold text-gray-600">Registro</h1>
            <div>
              <x-jet-label class="block mb-1 text-gray-600 font-semibold" for="name" value="{{ __('Name') }}" />
              <x-jet-input class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            <div class="mt-4">
              <x-jet-label class="block mb-1 text-gray-600 font-semibold" for="email" value="{{ __('Email') }}" />
              <x-jet-input class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" id="email" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="mt-4">
              <x-jet-label class="block mb-1 text-gray-600 font-semibold" for="password" value="{{ __('Password') }}" />
              <x-jet-input id="password" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" type="password" name="password" required autocomplete="new-password" />
            </div>
          </div>
          <div class="mt-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
          </div>
        </div>
        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
        <div class="mt-4">
          <x-jet-label for="terms">
            <div class="flex items-center">
              <x-jet-checkbox name="terms" id="terms" />

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
    </div>
  </x-jet-authentication-card>
</x-guest-layout>





class="block mb-1 text-gray-600 font-semibold"
class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full"