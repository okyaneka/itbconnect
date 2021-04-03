<x-app-layout>
  <div class="w-full h-96">
    <div class="relative flex h-full">
      <div class="w-full h-full bg-pink-500 text-white flex items-center bg-center bg-cover"
        style="background-image: url('{{ url('images/features/Detail Beasiswa LPDP.png') }}')">
        <div class="w-full h-full flex items-center justify-center flex-col bg-black bg-opacity-40">
          <div class="container flex flex-col">
            <div class="md:w-3/4 w-full p-4 mx-auto">
              <div class="text-5xl">
                Beasiswa LPDP
              </div>
              <div class="text-xl">
                by <a href="#" class="font-bold hover:underline">Dwi Larso</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-8 px-4 space-y-4">
    <div class="md:w-3/4 w-full mx-auto space-y-8">

      <div class="text-gray-400 flex space-x-4 flex-wrap">
        <div class="space-x-2 flex">
          <div class="ri-calendar-line"></div>
          <div class="whitespace-nowrap">September 25, 2020</div>
        </div>

        <div class="space-x-2 flex">
          <div class="ri-question-answer-line"></div>
          <div class="whitespace-nowrap">Add comment</div>
        </div>

        <div class="space-x-2 flex">
          <div class="ri-eye-line"></div>
          <div class="whitespace-nowrap">1.245 views</div>
        </div>

        <div class="space-x-2 flex">
          <div class="ri-time-line"></div>
          <div class="whitespace-nowrap">1 min read</div>
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

      <div class="space-y-4">
        <p>
          Mendukung upaya peningkatan kualitas SDM dan daya saing bangsa, LPDP memberikan
          kesempatan kepada putera-puteri terbaik bangsa yang memperoleh Letter of Acceptance
          pada perguruan tinggi terbaik dunia melalui Beasiswa PTUD.
        </p>
        <img class="bg-white p-2 border rounded" src="{{ url('images/features/Detail Beasiswa LPDP.png') }}" alt="" srcset="">
        <p>Apa saja persyaratan Beasiswa PTUD? Ke mana saja Perguruan tingginya? Yuk simak info berikut.</p>
        <p>Buku panduan beasiswa PTUD juga dapat kamu unduh melalui tautan: bit.ly/unduhanLPDP2021</p>
        <p>Yuk, daftar sekarang! Kami tunggu sampai 20 Oktober 2021 ya :)</p>
        <p>Semangat dan selalu jaga kesehatan!</p>
        <p>#Diriuntuknegeri </p>
        <p>#SDMUnggulIndonesiaMaju</p>
      </div>

      <div class="lg:w-1/2 w-full">
        <x-user-card :user="$user"></x-user-card>
      </div>
      <x-jet-section-border />

      <div class="grid grid-cols-2 gap-4">
        <div>
          <div class="text-gray-400 flex items-center">
            <i class="ri-arrow-left-line mr-2"></i>
            <div class="mt-1">Prev Post</div>
          </div>
          <a href="#" class="hover:underline">Beasiswa G86</a>
        </div>
        <div class="text-right">
          <div class="text-gray-400 flex items-center justify-end">
            <div class="mt-1">Next Post</div>
            <i class="ri-arrow-right-line ml-2"></i>
          </div>
          <a href="#" class="hover:underline">Loker PT Pertamina</a>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>