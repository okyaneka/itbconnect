<div {{ $attributes }}>
    @if (isset($title))
    <div class="w-20 h-2 bg-primary rounded mb-4"></div>
    <div class="text-3xl mb-4">{{ $title }}</div>
    @endif
    {{ $slot }}
</div>