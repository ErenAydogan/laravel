<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>
    <nav>
        <x-navbar href="/">Home</x-navbar>
        <x-navbar href="/about">About</x-navbar>
        <x-navbar href="/contact">Contact</x-navbar>
    </nav>
    {{ $slot }}
</body>
</html>