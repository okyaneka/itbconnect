<x-app-layout>
  <div id="slider-1" class="w-full h-96">
    <div class="relative flex h-full">
      <div class="absolute w-full h-full overflow-hidden">
        <div class="flex flex-nowrap h-full w-full transition-all ease-in-out duration-1000 slide relative left-0">
          <div class="w-full h-full bg-pink-500 text-white flex flex-none items-center px-16 bg-center bg-cover"
            style="background-image: url(/images/slide-1.jpg)">
            <div class="container mx-auto">
              <div class="text-5xl">
                Type your title here
              </div>
              <div class="text-xl">
                Type your subtitle here
              </div>
              <x-button href="#" color="primary">Button</x-button>
            </div>
          </div>
          <div class="w-full h-full bg-red-500 text-white flex flex-none items-center text-5xl px-16 bg-center bg-cover"
            style="background-image: url(/images/slide-2.jpg)">
            <div class="container mx-auto">
              <div class="text-5xl">
                Type your title here
              </div>
              <div class="text-xl">
                Type your subtitle here
              </div>
              <x-button href="#" color="primary">Button</x-button>
            </div>
          </div>
          <div class="w-full h-full bg-primary text-white flex flex-none items-center text-5xl px-16 bg-center bg-cover"
            style="background-image: url(/images/slide-3.jpg)">
            <div class="container mx-auto">
              <div class="text-5xl">
                Type your title here
              </div>
              <div class="text-xl">
                Type your subtitle here
              </div>
              <x-button href="#" color="primary">Button</x-button>
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
        @for ($i = 0; $i < 9; ++$i) 
        <x-user-card :user="$i" />
        @endfor
      </div>

      <div class="flex justify-end">
        <x-button href="#" color="primary" class="ml-auto">Selengkapnya</x-button>
      </div>
    </x-section>
    
    <x-section>
      <x-slot name="title">Kabar Alumni</x-slot>

      <div id="news" class="relative mb-4">
        <div class="wrapper h-56">
          <div class="content h-full absolute flex flex-nowrap space-x-4 transition-all ease-in-out duration-1000 slide left-0">
            @for ($i = 0; $i < 3; $i++)
            <x-article-card :article="'News #'.($i + 1)"></x-article-card>
            @endfor
          </div>
        </div>

        <x-button-icon class="prev absolute inset-y-1/2 -left-4 transform -translate-y-1/2"><i class="ri-arrow-left-s-fill"></i></x-button-icon>
        <x-button-icon class="next absolute inset-y-1/2 -right-4 transform -translate-y-1/2"><i class="ri-arrow-right-s-fill"></i></x-button-icon>
      </div>

      <div class="flex justify-end">
        <x-button href="#" color="primary" class="ml-auto">Selengkapnya</x-button>
      </div>
    </x-section>

    <x-section>
      <x-slot name="title">#Ayoberesinbareng</x-slot>

      <div id="ayoberesinbareng" class="relative mb-4">
        <div class="wrapper h-56">
          <div class="content h-full absolute flex flex-nowrap space-x-4 transition-all ease-in-out duration-1000 slide left-0">
            @for ($i = 0; $i < 3; $i++)
            <x-article-card :article="'Gerakan #'.($i + 1)"></x-article-card>
            @endfor
          </div>
        </div>

        <x-button-icon class="prev absolute inset-y-1/2 -left-4 transform -translate-y-1/2"><i class="ri-arrow-left-s-fill"></i></x-button-icon>
        <x-button-icon class="next absolute inset-y-1/2 -right-4 transform -translate-y-1/2"><i class="ri-arrow-right-s-fill"></i></x-button-icon>
      </div>

      <div class="flex justify-end">
        <x-button href="#" color="primary" class="ml-auto">Selengkapnya</x-button>
      </div>
    </x-section>

    <x-section>
      <x-slot name="title">Info Loker, Project & Beasiswa</x-slot>

      <div id="infoloker" class="relative mb-4">
        <div class="wrapper h-40">
          <div class="content absolute h-full flex flex-nowrap space-x-4 transition-all ease-in-out duration-1000 slide left-0">
            {{-- Loker --}}
            <div class="p-4 flex-none border-2 border-gray-800 flex flex-col w-96 rounded-lg shadow-md hover:shadow-lg bg-rasberry overflow-hidden">
              <div class="text-3xl text-white">Loker</div>
              <div class="text-white">Caption text here</div>
              <div class="mt-auto">
                <x-button href="#" color="white">Read more</x-button>
              </div>
            </div>
            {{-- Project --}}
            <div class="p-4 flex-none border-2 border-gray-800 flex flex-col w-96 rounded-lg shadow-md hover:shadow-lg bg-yellow overflow-hidden">
              <div class="text-3xl text-white">Loker</div>
              <div class="text-white">Caption text here</div>
              <div class="mt-auto">
                <x-button href="#" color="white">Read more</x-button>
              </div>
            </div>
            {{-- Beasisawa --}}
            <div class="p-4 flex-none border-2 border-gray-800 flex flex-col w-96 rounded-lg shadow-md hover:shadow-lg bg-primary overflow-hidden">
              <div class="text-3xl text-white">Loker</div>
              <div class="text-white">Caption text here</div>
              <div class="mt-auto">
                <x-button href="#" color="white">Read more</x-button>
              </div>
            </div>
          </div>
        </div>

        <x-button-icon class="prev absolute inset-y-1/2 -left-4 transform -translate-y-1/2"><i class="ri-arrow-left-s-fill"></i></x-button-icon>
        <x-button-icon class="next absolute inset-y-1/2 -right-4 transform -translate-y-1/2"><i class="ri-arrow-right-s-fill"></i></x-button-icon>
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