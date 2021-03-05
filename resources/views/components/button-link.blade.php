<a href="{{ $attributes['type'] ?? '#' }}" type="{{ $attributes['type'] ?? 'submit' }}" class="{{ $class }}" {{ !$attributes['disabled'] ?: 'disabled' }}>
    {{ $slot }}
</a>