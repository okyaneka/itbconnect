<x-app-layout>
  <div id="slider-1" class="w-full h-96">
    <div x-data="{popup: false, invite: false, active: 1}" class="relative flex h-full"
      x-init="setTimeout(() => { popup = true }, 500);">
      <div class="absolute w-full h-full overflow-hidden">
        <div class="flex flex-nowrap h-full w-full transition-all ease-in-out duration-1000 slide relative left-0">
          <div class="w-full h-full bg-pink-500 text-white flex flex-none items-center px-16 bg-center bg-cover"
            style="background-image: url('{{ url('/images/ITB Connect_Web-alt size.png') }}')">
            <div class="container mx-auto flex">
              <div class="rounded bg-black bg-opacity-50 p-4">
                <div class="text-3xl">
                  Undang teman
                </div>
                <div class="text-xl">
                  Undang teman untuk bergabung dengan itbconnect.org
                </div>
                <div class="mt-4">
                  <div @click="invite = true">
                    <x-button href="#" color="primary">Undang Teman</x-button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full h-full bg-red-500 text-white flex flex-none items-center px-16 bg-center bg-cover"
            style="background-image: url('{{ url('/images/ITB Connect2_Web-alt size.png') }}')">
            <div class="container mx-auto flex">
              <div class="rounded bg-black bg-opacity-50 p-4">
                <div class="text-3xl">
                  Undang teman
                </div>
                <div class="text-xl">
                  Undang teman untuk bergabung dengan itbconnect.org
                </div>
                <div class="mt-4">
                  <div @click="invite = true">
                    <x-button href="#" color="primary">Undang Teman</x-button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full h-full bg-primary text-white flex flex-none items-center px-16 bg-center bg-cover"
            style="background-image: url('{{ url('/images/ITB Connect3_Web-alt size.png') }}')">
            <div class="container mx-auto flex">
              <div class="rounded bg-black bg-opacity-50 p-4">
                <div class="text-3xl">
                  Undang teman
                </div>
                <div class="text-xl">
                  Undang teman untuk bergabung dengan itbconnect.org
                </div>
                <div class="mt-4">
                  <div @click="invite = true">
                    <x-button href="#" color="primary">Undang Teman</x-button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <x-button-icon class="prev absolute inset-y-1/2 left-4 transform -translate-y-1/2"><i
          class="ri-arrow-left-s-fill"></i>
      </x-button-icon>
      <x-button-icon class="next absolute inset-y-1/2 right-4 transform -translate-y-1/2"><i
          class="ri-arrow-right-s-fill"></i>
      </x-button-icon>

      <div x-show="invite" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="fixed h-screen w-screen bg-primary top-0 left-0 bg-opacity-50 flex items-center justify-center">
        <div class="w-96 p-4 bg-white border rounded" @click.away="invite = false" @close.stop="invite = false">
          <div>
            <x-jet-label for="email" value="{{ __('Masukkan alamat email teman') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
              autofocus placeholder="Email" />
          </div>

          <div class="mt-4">
            <div @click="invite = false">
              <x-button href="#" color="primary">Undang Teman</x-button>
            </div>
          </div>
        </div>
      </div>
      <div x-show="popup" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="fixed h-screen w-screen bg-primary top-0 left-0 bg-opacity-50 flex items-center justify-center z-10">
        <div class="w-96 p-4 bg-white border rounded" @click.away="popup = false" @close.stop="popup = false">
          <img class="w-4/5 object-contain mx-auto" src="{{ url('/images/logo header.png') }}" />
          <div>Ini adalah Prototipe dari Platform Connecting The Dots. Beberapa Fitur Masih Dalam Tahap Pengembangan.
          </div>

          <div class="mt-4 text-center">
            <div @click="popup = false">
              <x-button href="#" color="primary">Tutup</x-button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      window.addEventListener('load', (event) => {
        let slide = document.querySelector('#slider-1 .slide');

        document.querySelector('#slider-1 .next').addEventListener('click', function () {
            let cur_loc = (parseInt(slide.style.left) || 0);
            slide.style.left = `${cur_loc - 100 > slide.childElementCount * -100 ? cur_loc - 100 : 0}%`
        })

        document.querySelector('#slider-1 .prev').addEventListener('click', function () {
            let cur_loc = (parseInt(slide.style.left) || 0);
            slide.style.left = `${cur_loc + 100 <= 0 ? cur_loc + 100 : (slide.childElementCount - 1) * -100}%`
        })

        let slider = setInterval(() => {
          try {
            let cur_loc = (parseInt(slide.style.left) || 0);
            slide.style.left = `${cur_loc - 100 > slide.childElementCount * -100 ? cur_loc - 100 : 0}%`
            // slide.style.left = `${cur_loc + 100 <= 0 ? cur_loc + 100 : (slide.childElementCount - 1) * -100}%`
          } catch (error) {
            clearInterval(slider)
            console.error(error);
          }
        }, 5000);
      })
    </script>
  </div>

  <div class="container my-8 px-4 space-y-8">
    <x-section>
      <x-slot name="title">Koneksi Alumni</x-slot>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
        @foreach ($users as $user)
        <x-user-card :user="$user" />
        @endforeach
      </div>

      <div class="flex justify-end">
        <x-button href="#" color="primary" class="ml-auto">Selengkapnya</x-button>
      </div>
    </x-section>

    <x-section>
      <x-slot name="title">Kabar Alumni</x-slot>

      <div id="news" class="relative mb-4">
        <div class="wrapper h-56">
          <div
            class="content h-full absolute flex flex-nowrap space-x-4 transition-all ease-in-out duration-1000 slide left-0">
            @foreach ($articles as $article)
            <x-article-card :article="$article" />
            @endforeach
          </div>
        </div>

        <x-button-icon class="prev absolute inset-y-1/2 -left-4 transform -translate-y-1/2"><i
            class="ri-arrow-left-s-fill"></i></x-button-icon>
        <x-button-icon class="next absolute inset-y-1/2 -right-4 transform -translate-y-1/2"><i
            class="ri-arrow-right-s-fill"></i></x-button-icon>
      </div>

      <div class="flex justify-end">
        <x-button href="#" color="primary" class="ml-auto">Selengkapnya</x-button>
      </div>
    </x-section>

    <x-section>
      <x-slot name="title">#Ayoberesinbareng</x-slot>

      <div id="ayoberesinbareng" class="relative mb-4">
        <div class="wrapper h-56">
          <div
            class="content h-full absolute flex flex-nowrap space-x-4 transition-all ease-in-out duration-1000 slide left-0">
            @foreach ($features as $feature)
            <x-article-card :article="$feature" type="feature-1" />
            @endforeach
          </div>
        </div>

        <x-button-icon class="prev absolute inset-y-1/2 -left-4 transform -translate-y-1/2"><i
            class="ri-arrow-left-s-fill"></i></x-button-icon>
        <x-button-icon class="next absolute inset-y-1/2 -right-4 transform -translate-y-1/2"><i
            class="ri-arrow-right-s-fill"></i></x-button-icon>
      </div>

      <div class="flex justify-end">
        <x-button href="#" color="primary" class="ml-auto">Selengkapnya</x-button>
      </div>
    </x-section>

    <x-section>
      <x-slot name="title">Info Loker, Project & Beasiswa</x-slot>

      <div id="infoloker" class="relative mb-4">
        <div class="wrapper h-40">
          <div
            class="content absolute h-full flex flex-nowrap space-x-4 transition-all ease-in-out duration-1000 slide left-0">
            {{-- Loker --}}
            <div
              class="p-4 flex-none border-2 border-gray-800 flex flex-col w-96 rounded-lg shadow-md bg-cover bg-center hover:shadow-lg overflow-hidden"
              style="background-image: url(/images/slide-1.jpg)">
              <div class="text-3xl text-white mb-2">
                <span class="p-1 pt-2 bg-black bg-opacity-50">Loker</span></div>
              <div class="text-white">
                <span class="p-1 pt-2 bg-black bg-opacity-50">
                  Caption text here
                </span>
              </div>
              <div class="mt-auto">
                <x-button href="{{ route('single.feature-2', 'loker') }}" color="primary">Read more</x-button>
              </div>
            </div>
            {{-- Project --}}
            <div
              class="p-4 flex-none border-2 border-gray-800 flex flex-col w-96 rounded-lg shadow-md bg-cover bg-center hover:shadow-lg overflow-hidden"
              style="background-image: url(/images/slide-1.jpg)">
              <div class="text-3xl text-white mb-2">
                <span class="p-1 pt-2 bg-black bg-opacity-50">Project</span></div>
              <div class="text-white">
                <span class="p-1 pt-2 bg-black bg-opacity-50">
                  Caption text here
                </span>
              </div>
              <div class="mt-auto">
                <x-button href="{{ route('single.feature-2', 'project') }}" color="primary">Read more</x-button>
              </div>
            </div>
            {{-- Beasiswa --}}
            <div
              class="p-4 flex-none border-2 border-gray-800 flex flex-col w-96 rounded-lg shadow-md bg-cover bg-center hover:shadow-lg overflow-hidden"
              style="background-image: url(/images/slide-1.jpg)">
              <div class="text-3xl text-white mb-2">
                <span class="p-1 pt-2 bg-black bg-opacity-50">Beasiswa</span></div>
              <div class="text-white">
                <span class="p-1 pt-2 bg-black bg-opacity-50">
                  Caption text here
                </span>
              </div>
              <div class="mt-auto">
                <x-button href="{{ route('single.feature-2', 'beasiswa') }}" color="primary">Read more</x-button>
              </div>
            </div>
          </div>
        </div>

        <x-button-icon class="prev absolute inset-y-1/2 -left-4 transform -translate-y-1/2"><i
            class="ri-arrow-left-s-fill"></i></x-button-icon>
        <x-button-icon class="next absolute inset-y-1/2 -right-4 transform -translate-y-1/2"><i
            class="ri-arrow-right-s-fill"></i></x-button-icon>
      </div>

      <div class="flex justify-end">
        <x-button href="#" color="primary" class="ml-auto">Selengkapnya</x-button>
      </div>
    </x-section>

    <script>
      window.addEventListener('load', function () {
        function slider(id) {
          let prev = document.querySelector(`#${id} .prev`);
          let next = document.querySelector(`#${id} .next`);
          let content = document.querySelector(`#${id} .content`);
          let wrapper = document.querySelector(`#${id} .wrapper`);
          let item = document.querySelector(`#${id} .content div`);

          next.onmousedown = function () {
            if (content.clientWidth - wrapper.clientWidth + (parseInt(content.style.left) || 0) - item.clientWidth < item.clientWidth) {
              content.style.left = `${wrapper.clientWidth - content.clientWidth}px`;
            } else {
              content.style.left = `${(parseInt(content.style.left) || 0) - item.clientWidth}px`;
            }
          }
          prev.onmousedown = function () {
            content.clientWidth - wrapper.clientWidth + (parseInt(content.style.left) || 0) - item.clientWidth < item.clientWidth
            if ((parseInt(content.style.left) || 0) == 0) {
              return;
            } 
            if (-(parseInt(content.style.left) || 0) < item.clientWidth) {
              content.style.left = `0px`;
            } else {
              content.style.left = `${(parseInt(content.style.left) || 0) + item.clientWidth}px`;
            }
          }
        }

        slider('news');
        slider('ayoberesinbareng');
        slider('infoloker');
      })
    </script>
  </div>
</x-app-layout>