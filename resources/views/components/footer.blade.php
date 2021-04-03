<div class="bg-primary flex text-white flex-col items-center shadow-md">
  <div class="container mt-4">
    <div class="flex flex-col sm:flex-row m-4">
      <div class="flex flex-col space-y-2 p-4 w-full">
        <div class="text-2xl text-bold">About ITBConnect.org</div>
        <div>
          Adalah prototipe dari platform Connecting The Dots. Bangun jejaring baru, bertemu dengan alumni dengan
          kesamaan minat, profesi dll. Jaring ide, rencanakan kegiatan, buat jadi nyata. Saling mengisi dan melengkapi
          antar alumni ITB.
        </div>
      </div>
      <div class="flex flex-col space-y-2 p-4 sm:w-3/5 w-full">
        <div class="text-2xl text-bold">Keep connected</div>

        <div class="flex space-x-2 items-start">
          <div class="ri-facebook-fill text-yellow no-underline"></div>
          <a href="https://www.facebook.com/gemilangiaitb/?_rdc=2&_rdr" target="_blank" class=" hover:underline">
            <div>Follow us on Facebook</div>
          </a>
        </div>

        <div class="flex space-x-2 items-start">
          <div class="ri-twitter-fill text-yellow no-underline"></div>
          <a href="https://twitter.com/gemilangiaitb?lang=en" target="_blank" class=" hover:underline">
            <div>Follow us on Twitter</div>
          </a>
        </div>

        <div class="flex space-x-2 items-start">
          <div class="ri-instagram-line text-yellow no-underline"></div>
          <a href="https://www.instagram.com/gembongiaitb/" target="_blank" class=" hover:underline">
            <div>Follow us on Instagram</div>
          </a>
        </div>

        @if (false)
        <div class="flex space-x-2 items-start">
          <div class="ri-youtube-fill text-yellow no-underline"></div>
          <a href="#" target="_blank" class=" hover:underline">
            <div>Subcribe to our Youtube channel</div>
          </a>
        </div>
        @endif
      </div>
      <div class="flex flex-col space-y-2 p-4 sm:w-3/5 w-full">
        <div class="text-2xl text-bold">Kontak PP IA ITB</div>
        <div class="flex space-x-2 items-start">
          <div class="ri-mail-fill text-yellow text-xl align-middle"></div>
          <div>timses.gembong@gmail.com</div>
        </div>
        <div class="flex space-x-2 items-start">
          <div class="ri-map-pin-2-fill text-yellow text-xl align-middle"></div>
          <div>
            Sekre Jl Praja Dalam D no. 52, Kebayoran Lama, Jakarta <br>
            Sekre Jl Banteng no. 104, Lengkong, Bandung
          </div>
        </div>
        <div class="flex space-x-2 items-start">
          <div class="ri-phone-fill text-yellow text-xl align-middle"></div>
          <div>WhatsApp 0813 3333 8673</div>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-4">
    <div class="text-lg text-uppercase text-white text-center mb-4">
      {{ env('APP_SHORT_NAME', 'APP_NAME') }} @ 2021 by <img class="h-12 inline-block align-middle"
        src="/images/logo.png" alt="">
    </div>
  </div>
</div>