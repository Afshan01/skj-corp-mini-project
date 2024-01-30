<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SKJ CORP BLOGS</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="from-10% via-30% to-90% mx-auto mt-10 max-w-2xl bg-gradient-to-r from-indigo-200 via-sky-200 to-emerald-200 text-slate-700">        
        <div class="text-4xl mb-4 mr-4 ml-4 text-center">SKJ Corp Blogs</div>
        {{ $slot }}
    </body>
</html>
