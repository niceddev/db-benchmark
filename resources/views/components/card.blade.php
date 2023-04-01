@props([
    'title',
])

<div class="p-4">
    <a href="{{ route('searcher', $title) }}">
        <div class="border border-gray-200 p-6 rounded-lg shadow-lg">
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">{{ ucfirst($title) }}</h2>
        </div>
    </a>
</div>
