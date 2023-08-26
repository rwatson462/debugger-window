<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    @vite('resources/css/app.css')
    @vite('resources/ts/app.ts')

</head>
<body class="bg-slate-600 text-white max-w-2xl mx-auto p-4 pt-[2rem]">

     <header class="bg-slate-500 fixed shadow p-2 -m-4 -mt-[2rem] t-0 l-0 w-full">
        <h1 class="text-4xl font-semibold">Debug-window</h1>
    </header>

    <main class="my-8 text-black">
        {{ $slot }}
    </main>

    <footer class="border-t border-t-slate-100 p-4">
        <p>&copy;2023 Source Pot, Rob Watson</p>
    </footer>

</body>
</html>
