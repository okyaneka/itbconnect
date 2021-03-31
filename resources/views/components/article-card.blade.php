@props(['article', 'type'])

<div class="flex-none flex w-96 rounded shadow-md hover:shadow-lg bg-primary bg-center bg-cover overflow-hidden"
    style="background-image: url('{{ $article->image }}')">
    <div class="w-full bg-primary bg-opacity-40 flex flex-col p-4 mt-auto">
        @if ($type == 'news')
        <div class="text-white">{{ $article->caption }}</div>
        @endif
        <div class="mt-2">
            <x-button color="primary" href="{{ route('single.'.$type, $article->caption) }}">Read more</x-button>
        </div>
    </div>
</div>