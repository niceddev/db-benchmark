@props([
    'title',
    'routeName',
])

<div class="p-4">
    <a href="{{ route($routeName) }}">
        <div class="border border-gray-200 p-6 rounded-lg shadow-lg">
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">{{ $title }}</h2>
        </div>
    </a>
</div>
