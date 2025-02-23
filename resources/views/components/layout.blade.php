<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daylio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="px-10 py-10 bg-l-background text-l-text-primary dark:bg-d-background  dark:text-d-text-primary  ">

<nav class="flex justify-between items-center border-b py-5 border-l-border dark:border-d-border">
    <a href="/">Home</a>

    @auth
        <div class="flex gap-4">
            <x-buttons.primary href="/entries/create">Add Entry</x-buttons.primary>
            <x-buttons.primary href="/profile">Profile</x-buttons.primary>
            <form method="POST" action="/logout">
                @csrf
                <x-buttons.primary>Log out</x-buttons.primary>
            </form>
        </div>
    @endauth

    @guest
        <div class="flex gap-4">
            <x-buttons.primary href="/login"
            >Log in
            </x-buttons.primary>

            <x-buttons.primary href="/register">Register</x-buttons.primary>
        </div>
    @endguest

</nav>
<main class="mt-10 mx-auto max-w-5xl justify-center">
    {{$slot}}
</main>
</body>
</html>
