{{--<form action="{{ route('import') }}" method="POST" class="flex justify-center" enctype="multipart/form-data">--}}
{{--    @csrf--}}
{{--    <div class="flex items-center">--}}
{{--        <input name="file" type="file" class="px-4 py-2 border rounded-l-md w-64" />--}}
{{--        <button type="submit" class="ml-4 px-4 py-2 bg-blue-500 text-white rounded-r-md hover:bg-blue-600">Import</button>--}}
{{--    </div>--}}
{{--</form>--}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', 'LARAVEL')
    </title>
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>
<body>
    <main class="bg-gray-100 min-h-screen flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
        @yield('content')
    </main>
    @stack('scripts')
</body>
</html>
