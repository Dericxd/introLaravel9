<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aprendible | {{ $title ?? '' }}</title>
    <meta name="desription" content="{{ $metaDescription ?? 'Defaul meta description' }}">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/css/app.scss')


</head>

<body class="antialiased bg-slate-100 dark:bg-slate-900">

    <x-layouts.navigation />

    @if(session('status'))
        <div class="max-w-screen-xl px-3 py-2 mx-auto font-bold text-white sm:px-6 lg:px-8 bg-emerald-500 dark:bg-emerald-700">
            {{ session('status') }}
        </div>
    @endif

    {{ $slot }}


    @vite('resources/js/app.js')
</body>

</html>
