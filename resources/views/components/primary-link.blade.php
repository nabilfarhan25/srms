<a {{ $attributes->merge(['class' => 'inline-flex items-center px-5 py-3 bg-lime-600 border
    border-transparent rounded-full font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
    focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-lime-600 focus:ring-offset-2
    transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>