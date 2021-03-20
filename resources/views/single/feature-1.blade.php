<x-app-layout>
  <div class="md:w-3/4 w-full mx-auto space-y-8">
    <div class="container my-8 px-4 space-y-4">
      <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
        <div class="bg-white p-2 border rounded flex items-center">
          <img src="{{ url('images/Sketch_Ai-03.png') }}" alt="" srcset="">
        </div>

        <div class="flex flex-col space-y-4">
          <div class="text-2xl">
            Your article title here
          </div>

          <x-user-card :user="$user"></x-user-card>

          {{-- <div class="border border-primary bg-white rounded py-4 px-6 flex space-x-4">
            <div class="rounded-full flex-none h-20 w-20 bg-center bg-cover"
              style="background-image: url(/images/slide-1.jpg)"></div>
            <div class="flex flex-col">
              <div class="font-bold text-lg">Your name here</div>
              <div class="text-primary">Your company here</div>
              <div class="text-gray-500">Angkatan - jurusan</div>
            </div>
          </div> --}}

          <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla efficitur nisl ac eros dictum interdum.
            Pellentesque luctus mollis turpis id placerat. Phasellus ultrices dictum pulvinar. </div>

          <x-button href="#" class="text-center" color="primary">#AyoBeresinBareng</x-button>
        </div>
      </div>

      <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
        <a href="#"
          class="transition duration-300  text-indigo-500 background-transparent hover:text-white hover:bg-indigo-500 hover:border-none font-bold uppercase px-3 py-1 border border-current justify-center items-center flex focus:border"><i
            class="ri-facebook-fill mr-2"></i>
          <div class="mt-1">Facebook</div>
        </a>
        <a href="#"
          class="transition duration-300  text-blue-400 background-transparent hover:text-white hover:bg-blue-400 hover:border-none font-bold uppercase px-3 py-1 border border-current justify-center items-center flex focus:border"><i
            class="ri-twitter-fill mr-2"></i>
          <div class="mt-1">Twitter</div>
        </a>
        <a href="#"
          class="transition duration-300  text-pink-700 background-transparent hover:text-white hover:bg-pink-700 hover:border-none font-bold uppercase px-3 py-1 border border-current justify-center items-center flex focus:border"><i
            class="ri-instagram-line mr-2"></i>
          <div class="mt-1">Instagram</div>
        </a>
        <a href="#"
          class="transition duration-300  text-blue-800 background-transparent hover:text-white hover:bg-blue-800 hover:border-none font-bold uppercase px-3 py-1 border border-current justify-center items-center flex focus:border"><i
            class="ri-linkedin-fill mr-2"></i>
          <div class="mt-1">Linkedin</div>
        </a>
      </div>
      <x-section>
        <x-slot name="title">Story</x-slot>

        <div class="space-y-4">
          <div class="bg-white p-2 border rounded flex items-center">
            <img src="{{ url('images/Sketch_Ai-03.png') }}" alt="" srcset="">
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum non arcu auctor luctus. Maecenas tempus
            pellentesque ullamcorper. Duis auctor congue eros, non consequat nunc elementum in. Proin a ipsum tempus,
            sollicitudin sem non, scelerisque quam. Nullam ut risus vitae turpis ornare pharetra. Nulla non sapien
            facilisis
            tellus rutrum pellentesque quis in eros. Donec ac dui id metus suscipit iaculis. Proin arcu tortor, luctus
            nec
            quam sit amet, feugiat tempor arcu. Donec non risus imperdiet, venenatis ipsum venenatis, maximus justo.
            Nullam
            et massa quis augue interdum faucibus vel a dolor. Morbi dictum tortor ornare, egestas enim a, bibendum
            lectus.
            Etiam at finibus arcu, in aliquet libero. Sed nunc odio, blandit a tortor sed, consequat venenatis tellus.
          </p>
        </div>
      </x-section>
      <x-section>
        <x-slot name="title">Goals</x-slot>

        <div class="space-y-4">
          <div class="bg-white p-2 border rounded flex items-center">
            <img src="{{ url('images/Sketch_Ai-03.png') }}" alt="" srcset="">
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum non arcu auctor luctus. Maecenas tempus
            pellentesque ullamcorper. Duis auctor congue eros, non consequat nunc elementum in. Proin a ipsum tempus,
            sollicitudin sem non, scelerisque quam. Nullam ut risus vitae turpis ornare pharetra. Nulla non sapien
            facilisis
            tellus rutrum pellentesque quis in eros. Donec ac dui id metus suscipit iaculis. Proin arcu tortor, luctus
            nec
            quam sit amet, feugiat tempor arcu. Donec non risus imperdiet, venenatis ipsum venenatis, maximus justo.
            Nullam
            et massa quis augue interdum faucibus vel a dolor. Morbi dictum tortor ornare, egestas enim a, bibendum
            lectus.
            Etiam at finibus arcu, in aliquet libero. Sed nunc odio, blandit a tortor sed, consequat venenatis tellus.
          </p>
        </div>
      </x-section>
      <x-jet-section-border />

      <div class="grid grid-cols-2 gap-4">
        <div>
          <div class="text-gray-400 flex items-center">
            <i class="ri-arrow-left-line mr-2"></i>
            <div class="mt-1">Prev Post</div>
          </div>
          <a href="#" class="hover:underline">Topik Blog Meningkatkan Pengunjung</a>
        </div>
        <div class="text-right">
          <div class="text-gray-400 flex items-center justify-end">
            <div class="mt-1">Next Post</div>
            <i class="ri-arrow-right-line ml-2"></i>
          </div>
          <a href="#" class="hover:underline">Riset Keyword</a>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>