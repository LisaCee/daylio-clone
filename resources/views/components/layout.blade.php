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

<nav class="flex justify-between items-center border-b py-5">
    <a href="/">Home</a>

    @auth
        <div class="flex gap-4">
            <x-button-link href="/new-entry">Add Entry</x-button-link>
            <x-button-link href="/profile">Profile</x-button-link>
            <form method="POST" action="/logout">
                @csrf
                <x-button-primary>Log out</x-button-primary>
            </form>
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

</nav>
<main class="mt-10 mx-auto max-w-2xl">
    {{$slot}}
</main>
</body>
</html>
