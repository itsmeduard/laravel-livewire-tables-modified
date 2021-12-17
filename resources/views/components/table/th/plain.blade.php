@aware(['component'])

@php
    $theme = $component->getTheme();
@endphp

@if ($theme === 'tailwind')
    <th scope="col" {{ $attributes->merge(['class' => 'table-cell px-3 py-2 md:px-6 md:py-3 text-left bg-gray-50 dark:bg-gray-800']) }}>{{ $slot }}</th>
@elseif ($theme === 'bootstrap-4')

@elseif ($theme === 'bootstrap-5')

@endif
