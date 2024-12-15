<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daylio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="px-10 py-10 light:bg-white bg-slate-800 text-white">
<nav class="flex justify-between items-center border-b py-5">
    <a href="/">Home</a>

    <div>
        @auth
            <div class="flex gap-4">
                <x-button-link href="/new-entry">Add Entry</x-button-link>
                <x-form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')
                    <x-button-primary>Log out</x-button-primary>
                </x-form>
            </div>
        @endauth

        @guest
            <div class="flex gap-4">
                <x-button-link href="/login"
                >Log in
                </x-button-link>

                <x-button-link href="/register">Register</x-button-link>
            </div>
        @endguest
    </div>
</nav>
<main class="mt-10 mx-auto">
    {{$slot}}
</main>
</body>
</html>
