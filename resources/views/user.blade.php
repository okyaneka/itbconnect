<x-app-layout>
  <div class="w-full h-96">
    <div class="relative flex h-full">
      <div class="w-full h-full bg-pink-500 text-white flex items-center bg-center bg-cover" style="background-image: url(/images/slide-2.jpg)"></div>
    </div>
  </div>
  
  <div class="w-full flex justify-center bg-white shadow-md">
    <div class="container p-4 flex items-center">
      <div class="rounded-full mr-4 relative -top-16 flex-none md:h-32 md:w-32 h-20 w-20 bg-primary bg-center bg-cover border-4 border-primary" style="background-image: url(/images/slide-3.jpg)"></div>
      <div class="mr-auto space-y-2">
        <div class="text-xl font-bold">{{ $username }}</div>
        <div>{{ $company ?? 'CEO PT Maju Makmur' }}</div>
        <div>{{ $a ?? 'Angkatan - Jurusan' }}</div>
      </div>
      <div class="flex space-x-4">
        <a href="#" class="rounded-full text-white text-3xl flex items-center justify-center md:h-16 md:w-16 h-20 w-20" style="background-color: #1877f2"><div class="ri-facebook-fill"></div></a>
        <a href="#" class="rounded-full text-white text-3xl flex items-center justify-center md:h-16 md:w-16 h-20 w-20" style="background-color: #c32aa3"><div class="ri-instagram-fill"></div></a>
        <a href="#" class="rounded-full text-white text-3xl flex items-center justify-center md:h-16 md:w-16 h-20 w-20" style="background-color: #1da1f2"><div class="ri-twitter-fill"></div></a>
        <a href="#" class="rounded-full text-white text-3xl flex items-center justify-center md:h-16 md:w-16 h-20 w-20" style="background-color: #0a66c2"><div class="ri-linkedin-fill"></div></a>
      </div>
    </div>
  </div>

  <div class="container my-8 px-4 space-y-8">
    <div x-data="{ active: 1 }">
      <div class="flex gap-2">
        <div @click="active = 1" :class="{ 'bg-white': active == 1, 'bg-gray-200': active != 1 }" class="uppercase cursor-pointer py-2 px-4">Profil</div>
        <div @click="active = 2" :class="{ 'bg-white': active == 2, 'bg-gray-200': active != 2 }" class="uppercase cursor-pointer py-2 px-4">Pengalaman</div>
        <div @click="active = 3" :class="{ 'bg-white': active == 3, 'bg-gray-200': active != 3 }" class="uppercase cursor-pointer py-2 px-4">Pendidikan</div>
        <div @click="active = 4" :class="{ 'bg-white': active == 4, 'bg-gray-200': active != 4 }" class="uppercase cursor-pointer py-2 px-4">Minat & Organisasi</div>
        <div @click="active = 5" :class="{ 'bg-white': active == 5, 'bg-gray-200': active != 5 }" class="uppercase cursor-pointer py-2 px-4">Bisnis & Profesi</div>
      </div>

      <div class="bg-white py-8 px-4">
        <div x-show="active == 1" class="d text-3xl">Nanti text nya disini</div>
      </div>
    </div>
  </div>
</x-app-layout>