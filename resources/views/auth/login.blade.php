<x-guest-layout>
  <x-jet-authentication-card>
    <div class="font-medium text-3xl mb-4">{{ __('Login') }}</div>
    <div>{{ __('login_instruction', ['app_name' => config('app.name')]) }}</div>

    <x-jet-validation-errors class="mb-4" />

    @if (session('status'))
    <div class="mb-4 font-medium text-green-600">
      {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="mt-4">
        <x-jet-label for="email" value="{{ __('Email') }}" />
        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
          autofocus />
      </div>

      <div class="mt-4">
        <x-jet-label for="password" value="{{ __('Password') }}" />
        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
          autocomplete="current-password" />
      </div>

      <div class="flex justify-between mt-4">
        <label for="remember_me" class="flex">
          <x-jet-checkbox id="remember_me" class="text-primary" name="remember" />
          <span class="ml-2 text-gray-600">{{ __('Remember me') }}</span>
        </label>
        @if (Route::has('password.request'))
        <a class="underline block text-right text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
          {{ __('Forgot your password?') }}
        </a>
        @endif
      </div>

      <div class="mt-4">
        <x-button color="primary" block>
          {{ __('Log in') }}
        </x-button>
      </div>

      <div class="grid grid-cols-1 gap-2 mt-4">
        <div class="text-gray-600 text-center">{{ __('Dont have an account?') }}</div>
        <a class="block px-4 pt-3 pb-2 border-transparent border rounded-md text-center font-semibold text-sm text-grey-200 uppercase tracking-widest bg-yellow hover:bg-yellow-500 active:bg-yellow-600 focus:outline-none focus:bg-yellow-600 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150"
          href="{{ route('register') }}">
          {{ __('Register') }}
        </a>
      </div>
    </form>
  </x-jet-authentication-card>
</x-guest-layout>