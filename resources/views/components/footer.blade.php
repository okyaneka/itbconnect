<div class="bg-primary flex text-white flex-col items-center shadow-md">
  <div class="container mt-4">
    <div class="flex flex-col sm:flex-row m-4">
      <div class="flex flex-col space-y-2 p-4 w-full">
        <div class="text-2xl text-bold">More about company</div>
        <div>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia vitae nisl eu consectetur. Sed eu
          ipsum facilisis, laoreet purus eget, dignissim augue. </div>
      </div>
      <div class="flex flex-col space-y-2 p-4 sm:w-3/5 w-full">
        <div class="text-2xl text-bold">Keep connected</div>

        <div class="flex space-x-2 items-start">
          <div class="ri-facebook-fill text-yellow no-underline"></div>
          <a href="#" target="_blank" class=" hover:underline">
            <div>Like us on Facebook</div>
          </a>
        </div>

        <div class="flex space-x-2 items-start">
          <div class="ri-twitter-fill text-yellow no-underline"></div>
          <a href="#" target="_blank" class=" hover:underline">
            <div>Follow us on Twitter</div>
          </a>
        </div>

        <div class="flex space-x-2 items-start">
          <div class="ri-instagram-line text-yellow no-underline"></div>
          <a href="#" target="_blank" class=" hover:underline">
            <div>Follow us on Instagram</div>
          </a>
        </div>

        <div class="flex space-x-2 items-start">
          <div class="ri-youtube-fill text-yellow no-underline"></div>
          <a href="#" target="_blank" class=" hover:underline">
            <div>Subcribe to our Youtube channel</div>
          </a>
        </div>
      </div>
      <div class="flex flex-col space-y-2 p-4 sm:w-3/5 w-full">
        <div class="text-2xl text-bold">Kontak PP IA ITB</div>
        <div class="flex space-x-2 items-start"><div class="ri-mail-fill text-yellow text-xl align-middle"></div>
          <div>sekretariat.ia.itb@gmail.com</div>
        </div>
        <div class="flex space-x-2 items-start"><div class="ri-map-pin-2-fill text-yellow text-xl align-middle"></div>
          <div>Jl. Hang Lekiu II No. 40 Jakarta Selatan</div>
        </div>
        <div class="flex space-x-2 items-start"><div class="ri-phone-fill text-yellow text-xl align-middle"></div>
          <div>0812 8865 3858</div>
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