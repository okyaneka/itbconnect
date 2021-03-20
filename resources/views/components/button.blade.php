<{{ $tag }} 
    class="{{ $class }}" 
    @if ($tag=='a' ) href="{{ $attributes['href'] ?? '#' }}" @endif
    @if ($tag !='a' ) type="{{ $attributes['type'] ?? 'submit' }}" {{ $attributes['disabled'] ? 'disabled' : '' }} @endif
>
    {{ $slot }}
</{{ $tag }}>