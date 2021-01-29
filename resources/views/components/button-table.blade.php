<a {!! $attributes->merge(['class' => 'text-xs px-1 py-1 border-blue-500 border text-blue-500 rounded transition
    duration-300 hover:bg-blue-700 hover:text-white focus:outline-none']) !!}
    >
    {{ $slot }}
</a>
