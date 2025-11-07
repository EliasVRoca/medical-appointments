@props(['active' => 'default'])
<div x-data="{ active: '{{ $active }}' }">
    @if (isset($header))
        <div class="border-b border-gray-200 dark:border-gray-700">
            <ul
                class="flex flex-wrap -mb-px text-sm font-medium justify-center text-center text-gray-500 dark:text-gray-400">
                {{ $header }}
            </ul>
        </div>
    @endif
    <div class="p-6">
        {{ $slot }}
    </div>
</div>
