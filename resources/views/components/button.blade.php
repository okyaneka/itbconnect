<{{ $tag }}
    @if ($tag == 'a') href="{{ $attributes['href'] ?? '#' }}" @endif
    type="{{ $attributes['type'] ?? 'submit' }}" class="{{ $class }}" {{ !$attributes['disabled'] ?: 'disabled' }}>
    {{ $slot }}
</{{ $tag }}>