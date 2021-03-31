@props(['user'])

<div class="rounded shadow-md hover:shadow-lg bg-white p-4 space-x-4 flex">
    <div class="rounded-full flex-none md:h-24 md:w-24 h-20 w-20 bg-primary bg-center bg-cover border-2 border-primary" style="background-image: url('{{ $user->profile_photo_url }}')"></div>
    <div class="w-full">
        <div class="font-bold text-xl">{{ $user->name }}</div>
        <div class="text-primary">{{ $user->profession }} @empty(!$user->company) at {{ $user->company }} @endempty</div>
        <div class="text-gray-500">{{ $user->entry_year }} - {{ $user->major }}</div>
        <div class="mt-2">
            <x-button color="primary" :href="route('user', 'johndoe')">Lihat profil</x-button>
        </div>
    </div>
</div>