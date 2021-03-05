<button {{ $attributes->merge([
    'class' => 'pa-2 text-xl flex w-8 h-8 flex items-center justify-center bg-gray-500 text-white font-semibold rounded-full shadow-md active:bg-gray-700 focus:outline-none'
]) }}>
    {{ $slot }}
</button>