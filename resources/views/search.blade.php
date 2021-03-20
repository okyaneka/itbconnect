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
            Ditemukan 53 hasil dengan kata kunci "{{ request()->q }}"
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-8 px-4 space-y-8">
    <x-section>
      <div class="grid grid-cols-1 sm:grid-cols-3 space-x-4 text-white">
        <div class="bg-primary p-4 rounded-lg flex items-center">
          <i class="ri-medal-fill text-6xl block"></i>
          <div class="text-right ml-auto">
            <div class="text-4xl font-bold">7</div>
            <div class="text-xl">Total ditemukan</div>
          </div>
        </div>
        <div class="bg-primary p-4 rounded-lg flex items-center">
          <i class="ri-star-fill text-6xl block"></i>
          <div class="text-right ml-auto">
            <div class="text-4xl font-bold">2</div>
            <div class="text-xl">Total seangkatan</div>
          </div>
        </div>
        <div class="bg-primary p-4 rounded-lg flex items-center">
          <i class="ri-government-fill text-6xl block"></i>
          <div class="text-right ml-auto">
            <div class="text-4xl font-bold">5</div>
            <div class="text-xl">Total sejurusan</div>
          </div>
        </div>

      </div>
    </x-section>

    <x-section>
      <x-slot name="title">Koneksi Alumni</x-slot>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
        @foreach ($users as $user)
        <x-user-card :user="$user" />
        @endforeach
      </div>

      <div class="flex justify-end gap-2">
        <x-button class="shadow-md" href="#" color="white">
          <div class="ri-arrow-left-s-fill"></div>
        </x-button>
        <x-button class="shadow-md" href="#" color="primary">
        <span class="px-2">1</span>
        </x-button>
        {{-- <x-button class="shadow-md" href="#" color="white">2</x-button> --}}
        {{-- <x-button class="shadow-md" href="#" color="white">3</x-button> --}}
        <x-button class="shadow-md" href="#" color="white">
          <div class="ri-arrow-right-s-fill"></div>
        </x-button>
      </div>
    </x-section>
  </div>
</x-app-layout>