@props(['article'])

<div class="flex-none flex w-96 rounded shadow-md hover:shadow-lg bg-primary bg-center bg-cover overflow-hidden" style="background-image: url(/images/slide-1.jpg)">
    <div class="w-full bg-primary bg-opacity-40 flex flex-col p-4 mt-auto">
        <div class="text-3xl text-white">{{ $article }}</div>
        <div class="text-gray-300">Caption text here</div>
        <div class="mt-2">
            <x-button color="primary">Read more</x-button>
        </div>
    </div>
</div>