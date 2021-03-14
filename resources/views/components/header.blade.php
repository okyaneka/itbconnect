<div class="bg-primary text-white">
  <div class="container p-4 flex justify-between items-center mx-auto">
    <div class="text-lg px-4 w-1/5">
      <a class="inline-block" href="{{ url('/') }}">
        <x-jet-application-mark class="block h-9 w-auto" />
      </a>
    </div>
    @csrf
    <form class="block flex mx-4 w-3/5" action="{{ route('search') }}" method="GET">
      <div class="relative rounded-md w-full mr-2 text-gray-800">
        <div id="showFilter" class="absolute inset-y-0 left-0 flex items-center">
          <x-button color="transparent" type="button" class="h-full" icon><i class="ri-menu-line"></i></x-button>
        </div>

        <x-jet-input id="search" class="block w-full px-10" type="text" name="q" placeholder="Search"
          :value="old('search',  request()->q)" />

        <div class="absolute inset-y-0 right-0 flex items-center">
          <x-button color="transparent" type="button" class="h-full" icon><i class="ri-arrow-drop-down-fill"></i>
          </x-button>
        </div>

        <div id="filter" class="hidden absolute top-12 w-full p-4 shadow-md rounded-md bg-gray-100 z-10">
          <div class="grid grid-cols-3 gap-4 mb-4">
            <div>
              <x-jet-label for="major" value="{{ __('Major') }}" />
              <x-select class="block mt-1 w-full" name="major" id="major">
                <option disabled selected>{{ __('Please select one') }}</option>
              </x-select>
            </div>
            <div>
              <x-jet-label for="profession" value="{{ __('Profession') }}" />
              <x-select class="block mt-1 w-full" name="profession" id="profession">
                <option disabled selected>{{ __('Please select one') }}</option>
              </x-select>
            </div>
            <div>
              <x-jet-label for="businnes" value="{{ __('Field of business') }}" />
              <x-select class="block mt-1 w-full" name="businnes" id="businnes">
                <option disabled selected>{{ __('Please select one') }}</option>
              </x-select>
            </div>
          </div>
          <div class="flex justify-end space-x-4">
            <x-button class="hideFilter" color="white" type="button">Batal</x-button>
            <x-button color="primary">Terapkan</x-button>
          </div>
        </div>
      </div>

      <x-button color="white" icon><i class="ri-search-line"></i></x-button>

      <script>
        window.addEventListener('load', function () {
          let filter = document.getElementById('filter');
          document.getElementById('showFilter').onclick = function () {
            filter.classList.toggle('hidden')
          }

          document.querySelector('.hideFilter').onclick = function () {
            if (!filter.classList.contains('hidden')) {
              filter.classList.add('hidden')
            }
          }
        })
      </script>
    </form>

    <div class="text-lg flex justify-end w-1/5 items-center">
      <x-button color="transparent-dark" class="h-full" icon><i class="text-xl ri-question-answer-line"></i></x-button>
      <x-jet-dropdown align="right" width="48">
        <x-slot name="trigger">
          @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
          <x-button color="transparent-dark" class="h-full" icon>
            @if (Auth::user()->profile_photo_url)
            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
              alt="{{ Auth::user()->name }}" />
            @else
            <i class="ri-user-fill"></i>
            @endif
          </x-button>
          @else
          <x-button color="transparent-dark" class="h-full" icon>
            <i class="ri-user-fill"></i>
            <i class="ri-arrow-drop-down-fill"></i>
          </x-button>
          @endif
        </x-slot>

        <x-slot name="content">
          <!-- Account Management -->
          <div class="block px-4 py-2 text-xs text-gray-400">
            {{ __('Manage Account') }}
          </div>

          <x-jet-dropdown-link href="{{ route('profile.show') }}">
            {{ __('Profile') }}
          </x-jet-dropdown-link>

          @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
          <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
            {{ __('API Tokens') }}
          </x-jet-dropdown-link>
          @endif

          <div class="border-t border-gray-100"></div>

          <!-- Authentication -->
          <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
              {{ __('Log Out') }}
            </x-jet-dropdown-link>
          </form>
        </x-slot>
      </x-jet-dropdown>
    </div>
  </div>
</div>