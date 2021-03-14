<x-profile-layout>
  <x-slot name="header">
    {{ __('Message') }}
  </x-slot>

  <div class="max-h-96 flex space-x-4 items-stretch">
    <div class="flex-auto w-3/4 relative">
      <div class="max-h-full pb-16 flex flex-col space-y-2 text-white">
        <div class="flex justify-center">
          <div class="text-gray-500">Yesterday</div>
        </div>
        <div class="flex justify-start">
          <div class="bg-gray-500 rounded px-4 py-2">Halo</div>
        </div>
        <div class="flex justify-start">
          <div class="bg-gray-500 rounded px-4 py-2">P</div>
        </div>
        <div class="flex justify-end">
          <div class="bg-primary rounded px-4 py-2">Ya</div>
        </div>
      </div>

      <div class="w-full absolute bottom-0 flex h-12 space-x-4">
        <x-jet-input id="name" class="block w-full" type="text" name="name" autofocus />
        <x-button type="button" color="primary">Kirim</x-button>
      </div>
    </div>

    <div class="flex-auto overflow-auto max-h-full w-1/4 bg-gray-200 p-2 space-y-1 flex-col">
      @for ($i = 0; $i < 5; $i++)
        <a href="#"
          class="{{ $i == 1 ? 'bg-opacity-100 text-white' : 'bg-opacity-0'}} block items-center flex px-4 py-1 space-x-2 rounded m-2 bg-primary-500 hover:bg-opacity-100 hover:text-white">
          <div class="ri-user-fill"></div>
          <div class="p-2 ">User {{ $i + 1 }}</div>
        </a>
      @endfor
    </div>
  </div>
</x-profile-layout>