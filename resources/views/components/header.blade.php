<div class="bg-primary text-white">
  <div class="container p-4 flex justify-between items-center mx-auto">
    <div class="text-lg px-4 w-1/5">
      <x-jet-application-mark class="block h-9 w-auto" />
    </div>
    @csrf
    <form class="block flex mx-4 w-3/5" action="{{ route('search') }}" method="GET">
      <div class="relative rounded-md w-full mr-2 text-gray-800">
        <div class="absolute inset-y-0 left-0 flex items-center">
          <x-button color="transparent" type="button" class="h-full" icon><i class="ri-menu-line"></i></x-button>
        </div>

        <x-jet-input id="search" class="block w-full px-10" type="text" name="q" required placeholder="Search"
          :value="old('search',  request()->q)" />

        <div class="absolute inset-y-0 right-0 flex items-center">
          <x-button color="transparent" type="button" class="h-full" icon><i class="ri-arrow-drop-down-fill"></i></x-button>
        </div>
      </div>

      <x-button color="white" icon><i class="ri-search-line"></i></x-button>
  </form>

    <div class="text-lg flex justify-end w-1/5">
      <x-button color="transparent-dark" class="h-full" icon><i class="ri-chat-4-fill"></i></x-button>
      <x-button color="transparent-dark" class="h-full" icon><i class="ri-user-fill"></i></x-button>
    </div>
  </div>
</div>