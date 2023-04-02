@extends('layouts.app')

@section('title', 'Meilisearch')

@section('content')
    @include('components.header')

    <div class="flex justify-center items-center gap-3">
        {!! \App\Enums\SearchMethod::getSvgLogo($method) !!}
        <h1 class="inline-block font-bold text-lg">{{ ucfirst($method) }}</h1>
    </div>

    <form action="{{ route('searcher', $method) }}" method="GET" class="flex justify-center mt-6">
        <div class="flex items-center">
            <input name="query"  type="text" class="px-4 py-2 border rounded-l-md w-64" placeholder="Search...">
            <button type="submit" class="ml-4 px-4 py-2 bg-blue-500 text-white rounded-r-md hover:bg-blue-600">Search</button>
        </div>
    </form>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-2">
                @foreach($orders as $order)
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center border-gray-200 bg-white border p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">{{ $orders->firstItem() + $loop->index }}</h2>
                                <p class="text-gray-500">id: {{ $order->id }}</p>
                                <p class="text-gray-500">{{ $order->title }}</p>
                                <p class="text-gray-900">{{ $order->client }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{ $orders->links() }}
    </section>
@endsection
