<a
    {{ $attributes->merge([
    'href '=> "#",
    'class' => "text-lg text-red-500 hover:text-white inline-flex items-center justify-center focus:outline-none focus:border-gray-900 focus:ring ring-gray-300"
]) }}
>
    {{ $slot }}
</a>
