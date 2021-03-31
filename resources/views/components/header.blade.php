<div class="bg-primary text-white">
  <div class="container px-4 py-2 flex justify-between items-center mx-auto">
    <div class="flex w-1/5 sm:block hidden">
      <a class="block" href="{{ url('/') }}">
        <x-jet-application-mark class="block h-9 w-auto" />
      </a>
    </div>
    @csrf
    <form class="block flex sm:mx-4 w-3/5" action="{{ route('search') }}" method="GET">
      <div x-data="{open: false}" class="relative rounded-md w-full mr-2 text-gray-800" @click.away="open = false"
        @close.stop="open = false">
        <div class="absolute inset-y-0 left-0 flex items-center" @click="open = true">
          <x-button color="transparent" type="button" class="h-full" icon><i class="ri-menu-line"></i></x-button>
        </div>

        <x-jet-input id="search" class="block w-full px-10" type="text" name="q" placeholder="Search"
          :value="old('search',  request()->q)" @click="open = true" autocomplete="off" />

        <div class="absolute inset-y-0 right-0 flex items-center" @click="open = true">
          <x-button color="transparent" type="button" class="h-full" icon><i class="ri-arrow-drop-down-fill"></i>
          </x-button>
        </div>

        <div x-show="open" x-transition:enter="transition ease-out duration-200"
          x-transition:enter-start="transform opacity-0 scale-95"
          x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
          x-transition:leave-start="transform opacity-100 scale-100"
          x-transition:leave-end="transform opacity-0 scale-95"
          class="absolute top-12 w-full p-4 shadow-md rounded-md bg-gray-100 z-10">
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-4">
            <div>
              <x-jet-label for="major" value="{{ __('Major') }}" />
              <x-select class="block mt-1 w-full" name="major" id="major">
                <option disabled selected>{{ __('Please select one') }}</option>
                @foreach ($majors as $major)
                <option {{ $major->disabled }}>{{ $major->text }}</option>
                @endforeach
              </x-select>
            </div>
            <div>
              <x-jet-label for="profession" value="{{ __('Profession') }}" />
              <x-select class="block mt-1 w-full" name="profession" id="profession">
                <option disabled selected>{{ __('Please select one') }}</option>
                @foreach ($profs as $prof)
                <option>{{ $prof }}</option>
                @endforeach
              </x-select>
            </div>
            <div>
              <x-jet-label for="businnes" value="{{ __('Field of business') }}" />
              <x-select class="block mt-1 w-full" name="businnes" id="businnes">
                <option disabled selected>{{ __('Please select one') }}</option>
                @foreach ($business_field as $business)
                <option>{{ $business }}</option>
                @endforeach
              </x-select>
            </div>
          </div>
          <div class="flex -m-2 flex-row-reverse flex-wrap">
            <div @click="open = false">
              <x-button class="m-2" color="primary" type="button">Terapkan</x-button>
            </div>
            <div @click="open = false">
              <x-button class="m-2" color="white" type="button">Batal</x-button>
            </div>
          </div>
        </div>
      </div>

      <x-button color="white" icon><i class="ri-search-line"></i></x-button>
    </form>

    <div class="text-lg flex justify-end sm:w-1/5 items-center space-x-2">
      <x-jet-dropdown align="right" width="w-56">
        <x-slot name="trigger">
          <x-button color="transparent-dark" class="h-full hidden sm:block" icon><i class="text-xl ri-chat-1-fill"></i>
          </x-button>
        </x-slot>

        <x-slot name="content">
          <div class="block px-4 py-2 text-xs text-gray-400">
            {{ __('Message') }}
          </div>

          <x-jet-dropdown-link href="#" class="flex justify-between space-x-2 items-center">
            <div class="w-8 h-8 rounded-full bg-primary bg-center bg-cover"
              style="background-image: url('{{ url('/images/Alfin Dwisatrio Ilham Fatullah. Teknik mesin 2016 Engineer at PT SAS Aero Sishan.jpeg') }}')">
            </div>
            <div>
              <div class="font-bold">Alfin Dwisatrio</div>
              <div>Your message here</div>
            </div>
            <div class="w-4 h-4 text-xs flex rounded-full bg-primary text-white items-center justify-center">3</div>
          </x-jet-dropdown-link>
          <x-jet-dropdown-link href="#" class="flex justify-between space-x-2 items-center">
            <div class="w-8 h-8 rounded-full bg-primary bg-center bg-cover"
              style="background-image: url('{{ url('/images/Arya Dipajaya Nugraha. Teknik mesin 2016 Engineer at PT SAS Aero Sishan.jpeg') }}')">
            </div>
            <div>
              <div class="font-bold">Arya Dipajaya</div>
              <div>Your message here</div>
            </div>
            <div class="w-4 h-4 text-xs flex rounded-full bg-primary text-white items-center justify-center">3</div>
          </x-jet-dropdown-link>
        </x-slot>
      </x-jet-dropdown>
      <x-jet-dropdown align="right" width="48">
        <x-slot name="trigger">
          <div class="flex items-center">
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <x-button color="transparent-dark" icon>
              @if (Auth::user()->profile_photo_url)
              <img class="h-full w-full rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
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
          </div>
        </x-slot>

        <x-slot name="content">
          <!-- Account Management -->
          <div class="block px-4 py-2 text-xs text-gray-400">
            {{ __('Manage Account') }}
          </div>

          <x-jet-dropdown-link href="{{ route('profile.show') }}">
            {{ __('Profile') }}
          </x-jet-dropdown-link>

          <x-jet-dropdown-link class="sm:hidden block flex justify-between" href="#">
            {{ __('Message') }} <span
              class="h-4 w-4 bg-primary text-white flex items-center justify-center rounded-full">2</span>
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