@props(['active'])

@php
$classes = ($active ?? false)
? 'block w-full pl-3 pr-4 py-2 text-center text-xs font-medium text-gray-500 focus:outline-none transition duration-150 ease-in-out'
: 'block w-full pl-3 pr-4 py-2 text-center text-xs font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
  {{ $slot }}.
</a>
