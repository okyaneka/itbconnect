<x-guest-layout>
  <x-jet-authentication-card>
    <x-slot name="logo">
      <x-auth-illustration />
    </x-slot>

    <div class="font-medium text-3xl mb-4">{{ __('Register') }}</div>
    <div>{{ __('register_instruction', ['app_name'=>config('app.name')]) }}</div>

    <x-jet-validation-errors class="mb-4" />

    <form id="register" method="POST" action="{{ route('register') }}">
      @csrf

      <div class="overflow-hidden">
        <div class="flex flex-nowrap page transition-all ease-in-out duration-300 slide">
          {{-- Page 1 --}}
          <div class="w-full flex-none">
            <div class="mt-4">
              <x-jet-label for="name" value="{{ __('Name') }}" />
              <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            </div>

            <div class="mt-4 ">
              <x-jet-label for="email" value="{{ __('Email') }}" />
              <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required />
            </div>

            <div class="mt-4 ">
              <x-jet-label for="password" value="{{ __('Password') }}" />
              <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
            </div>

            <div class="mt-4 ">
              <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
              <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />
            </div>
          </div>

          {{-- Page 2 --}}
          <div class="w-full flex-none">
            <div class="mt-4">
              <x-jet-label for="grade" value="{{ __('Grade') }}" />
              <x-select class="block mt-1 w-full" name="grade" id="grade" required>
                <option disabled selected>{{ __('Please select one') }}</option>
                <option value="d3">D3</option>
                <option value="s1">S1</option>
                <option value="s2">S2</option>
                <option value="s3">S3</option>
              </x-select>
            </div>

            <div class="mt-4">
              <x-jet-label for="major" value="{{ __('Major') }}" />
              <x-select class="block mt-1 w-full" name="major" id="major" required>
                <option disabled selected>{{ __('Please select one') }}</option>
                @for ($i = 1; $i <= 10; $i++) <option>{{ $i }}</option> @endfor
              </x-select>
            </div>

            <div class="lg:flex gap-4">
              <div class="mt-4">
                <x-jet-label for="entry_year" value="{{ __('Entry year') }}" />
                <x-select class="block mt-1 w-full" name="entry_year" id="entry_year" required>
                  <option disabled selected>{{ __('Please select one') }}</option>
                  @for ($i = date('Y'); $i >= 1920; $i--)
                  <option>{{ $i }}</option>
                  @endfor
                </x-select>
              </div>

              <div class="mt-4">
                <x-jet-label for="grad_year" value="{{ __('Graduation year') }}" />
                <x-select class="block mt-1 w-full" name="grad_year" id="grad_year" required>
                  <option disabled selected>{{ __('Please select one') }}</option>
                  @for ($i = date('Y') + 7; $i >= 1920; $i--)
                  <option>{{ $i }}</option>
                  @endfor
                </x-select>
              </div>
            </div>
          </div>

          {{-- Page 3 --}}
          <div class="w-full flex-none">
            <div class="mt-4">
              <x-jet-label for="profession" value="{{ __('Profession') }}" />
              <x-select class="block mt-1 w-full" name="profession" id="profession" required>
                <option disabled selected>{{ __('Please select one') }}</option>
                @for ($i = 1; $i <= 10; $i++) <option>{{ $i }}</option> @endfor
              </x-select>
            </div>

            <div class="mt-4">
              <x-jet-label for="instantion" value="{{ __('Instantion / Company') }}" />
              <x-jet-input id="instantion" class="block mt-1 w-full" type="text" name="instantion" required />
            </div>


            <div class="lg:flex gap-4">
              <div class="mt-4">
                <x-jet-label for="start_year" value="{{ __('Start year') }}" />
                <x-select class="block mt-1 w-full" name="start_year" id="start_year" required>
                  <option disabled selected>{{ __('Please select one') }}</option>
                  @for ($i = date('Y'); $i >= 1920; $i--)
                  <option>{{ $i }}</option>
                  @endfor
                </x-select>
              </div>

              <div class="mt-4">
                <x-jet-label for="end_year" value="{{ __('End year') }}" />
                <x-select class="block mt-1 w-full" name="end_year" id="end_year" required>
                  <option disabled selected>{{ __('Please select one') }}</option>
                  <option val="now">{{ __('Now') }}</option>
                  @for ($i = date('Y'); $i >= 1920; $i--)
                  <option>{{ $i }}</option>
                  @endfor
                </x-select>
              </div>
            </div>

            <div class="mt-4">
              <x-jet-label for="location" value="{{ __('Location') }}" />
              <x-jet-input id="location" class="block mt-1 w-full" type="text" name="location" required />
            </div>
          </div>
        </div>
      </div>

      {{-- Page indicator --}}
      <div class="flex justify-center">
        <div class="mt-4 flex w-4/5  grid gap-2 grid-cols-3">
          <div class="h-2 indicator bg-gray-500 rounded transition-all ease-in-out duration-300 slide"></div>
          <div class="h-2 indicator bg-gray-400 rounded transition-all ease-in-out duration-300 slide"></div>
          <div class="h-2 indicator bg-gray-400 rounded transition-all ease-in-out duration-300 slide"></div>
        </div>
      </div>

      @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
      <div class="mt-4">
        <x-jet-label for="terms">
          <div class="flex items-center">
            <x-jet-checkbox name="terms" id="terms" />

            <div class="ml-2">
              {!! __('I agree to the :terms_of_service and :privacy_policy', [
              'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of
                Service').'</a>',
              'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy
                Policy').'</a>',
              ]) !!}
            </div>
          </div>
        </x-jet-label>
      </div>
      @endif

      <div class="flex space-x-4">
        <div class="mt-4 prev w-full">
          <x-button color="primary" block type="button" disabled>
            {{ __('prev') }}
          </x-button>
        </div>

        <div class="mt-4 next w-full">
          <x-button color="primary" block type="button">
            {{ __('Next') }}
          </x-button>
        </div>

        <div class="mt-4 submit w-full hidden">
          <x-button color="primary" block>
            {{ __('Submit') }}
          </x-button>
        </div>
      </div>


      <div class="grid grid-cols-1 gap-2 mt-4">
        <div class="text-gray-600 text-center">{{ __('Already registered?') }}</div>
        <a class="block px-4 pt-3 pb-2 border-transparent border rounded-md text-center font-semibold text-sm text-grey-200 uppercase tracking-widest bg-yellow hover:bg-yellow-500 active:bg-yellow-600 focus:outline-none focus:bg-yellow-600 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150"
          href="{{ route('login') }}">
          {{ __('Login') }}
        </a>
      </div>

      <script>
        window.addEventListener('load', (event) => {
          let pos = 0;
          let next = document.querySelector('#register .next');
          let prev = document.querySelector('#register .prev button');
          let submit = document.querySelector('#register .submit');

          let page = document.querySelector('#register .page');
          let indicators = document.querySelectorAll('#register .indicator');

          next.addEventListener('click', () => {
            pos++;
            page.style.transform = `translateX(-${pos*100}%)`
            if (pos == 2) {
              next.classList.toggle('hidden')
              submit.classList.toggle('hidden')
            }
            if (pos == 1) {
              prev.toggleAttribute('disabled')
            }

            moveIndicators();
          });

          prev.addEventListener('click', function () {
            pos--;
            page.style.transform = `translateX(-${pos*100}%)`
            if (pos == 0) {
              prev.toggleAttribute('disabled')
            }
            if (pos == 1) {
              next.classList.toggle('hidden')
              submit.classList.toggle('hidden')
            }

            moveIndicators();
          });

          function moveIndicators() {
            indicators.forEach((item, index) => {
              console.log(pos, index);
              if (pos == index) {
                item.classList.add('bg-gray-500')
                item.classList.remove('bg-gray-400')
              } else {
                item.classList.add('bg-gray-400')
                item.classList.remove('bg-gray-500')
              }
            })
          }
        });
      </script>
    </form>
  </x-jet-authentication-card>
</x-guest-layout>