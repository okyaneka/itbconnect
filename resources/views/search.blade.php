<x-app-layout>
  <div class="w-full h-96">
    <div class="relative flex h-full">
      <div class="w-full h-full bg-pink-500 text-white flex items-center bg-center bg-cover"
            style="background-image: url(/images/slide-1.jpg)">
            <div class="w-full h-full flex items-center justify-center flex-col bg-black bg-opacity-40">
              <div class="text-5xl">
                Hasil pencarian
              </div>
              <div class="text-xl">
                Ditemukan 14 hasil dengan kata kunci "{{ request()->q }}"
              </div>
            </div>
          </div>
    </div>
  </div>

  <div class="container my-8 px-4 space-y-8">
    <x-section>
      <x-slot name="title">Koneksi Alumni</x-slot>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
        @for ($i = 0; $i < 12; ++$i) 
        <x-user-card :user="$i" />
        @endfor
      </div>

      <div class="flex justify-end gap-2">
          <x-button class="shadow-md" href="#" color="white">
            <div class="ri-arrow-left-s-fill"></div>
          </x-button>
          <x-button class="shadow-md" href="#" color="primary">1</x-button>
          <x-button class="shadow-md" href="#" color="white">2</x-button>
          <x-button class="shadow-md" href="#" color="white">3</x-button>
          <x-button class="shadow-md" href="#" color="white">
            <div class="ri-arrow-right-s-fill"></div>
          </x-button>
      </div>
    </x-section>
  </div>
</x-app-layout>