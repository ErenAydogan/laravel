<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <nav class="bg-gray-100 px-8 py-4 text-gray-700 flex item-center justify-between">
        <span class="font-bold text-2xl">Brand</span>
        <span>Hello, @yield('name', 'Guest')</span>
    </nav>
    <section class="p-12 mx-auto max-w-6xl text-gray-800">
        @yield('content')
    </section>
</body>
</html>