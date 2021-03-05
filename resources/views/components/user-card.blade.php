@props(['user'])

<div class="rounded shadow-md hover:shadow-lg bg-white p-4 space-x-4 flex">
    <div class="rounded-full flex-none md:h-24 md:w-24 h-20 w-20 bg-primary bg-center bg-cover border-2 border-primary" style="background-image: url(/images/slide-1.jpg)"></div>
    <div class="w-full">
        <div class="font-bold text-xl">Your name here</div>
        <div class=" text-primary">Your company here</div>
        <div class="text-gray-500">Angkatan - jurusan</div>
        <x-button color="primary" :href="route('user', 'johndoe')" class="mt-4" >Lihat profil</x-button>
    </div>
</div>