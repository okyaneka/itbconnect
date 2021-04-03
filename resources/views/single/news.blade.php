<x-app-layout>
  <div class="w-full h-96">
    <div class="relative flex h-full">
      <div class="w-full h-full bg-pink-500 text-white flex items-center bg-center bg-cover"
        style="background-image: url('{{ url('/images/news/header_kabar_alumni.jpg') }}')">
        <div class="w-full h-full flex items-center justify-center flex-col bg-black bg-opacity-40">
          <div class="container flex flex-col">
            <div class="md:w-3/4 w-full p-4 mx-auto">
              <div class="text-5xl">
                IndonesianIsME Summit
              </div>
              <div class="text-xl">
                by <a href="#" class="font-bold hover:underline">Admin ITB Connect</a>
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
        <p>IA ITB mendorong penguasaan teknologi dan industri oleh insan Indonesia dengan senantiasa menggaungkan pesan
          ini sejak 2016 dengan semangat IndonesianIsMe demi terwujudnya Kebangkitan Teknologi di Indonesia. Setelah
          sukses dengan Indonesianisme Summit 2016 sampai 2019, IA-ITB melanjutkan spirit kedaulatan indonesianisme,
          bekerjasama dengan Metro TV, menyelenggarakan i-TECH FORUM dengan Tema Kekayaan Mineral untuk Indonesia Maju :
          Dari Nikel ke Kendaraan Listrik.
        </p>
        <img class="bg-white p-2 border rounded" src="{{ url('/images/news/konten_artikel_kabar_alumni.png')  }}" alt=""
          srcset="">
        <p>Pada i-TECH FORUM episode 2 ini diharapkan memberikan gambaran mengenai rencana dan strategi hilirisasi
          mineral terutama nikel baik jangka pendek maupun jangka panjang, serta mendorong penguasaan teknologi
          pertambangan, pengolahan dan mengembangkan serta meningkatkan potensi kandungan sumber daya alam dalam negeri.
        </p>

        <p><b><i>"Kekayaan alam Indonesia yang dulu adalah kekayaan komparatif, sedang diupayakan menjadi keunggulan
              kompetitif"</i></b> </p>
      </div>

      <x-jet-section-border />

      <div class="grid grid-cols-2 gap-4">
        <div>
          <div class="text-gray-400 flex items-center">
            <i class="ri-arrow-left-line mr-2"></i>
            <div class="mt-1">Prev Post</div>
          </div>
          <a href="#" class="hover:underline">Anak Gajah Pulang Kandang 2019</a>
        </div>
        <div class="text-right">
          <div class="text-gray-400 flex items-center justify-end">
            <div class="mt-1">Next Post</div>
            <i class="ri-arrow-right-line ml-2"></i>
          </div>
          <a href="#" class="hover:underline">Turnamen Futsal IA-ITB</a>
        </div>
      </div>

      <x-jet-section-border />

      <form action="">
        <div class="flex flex-col space-y-4">
          <div class="text-lg">Leave a reply</div>
          <div class="text-gray-400">Your email address will not be published. Required field ar marked <span
              class="text-red-500">*</span></div>
          <textarea
            class="block resize-none border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            id="adress" type="text" name="adress" rows="6" placeholder="Comment*" required></textarea>
          <x-jet-input id="name" class="block" type="text" name="name" placeholder="Name*" required />
          <x-jet-input id="email" class="block" type="email" name="email" placeholder="Email*" required />
          <x-jet-input id="website" class="block" type="text" name="website" placeholder="Website" />
          <div class="flex">
            <x-button color="primary">Post Comment</x-button>
          </div>
        </div>
      </form>
    </div>
  </div>
</x-app-layout>