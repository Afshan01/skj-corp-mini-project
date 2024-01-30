<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SKJ CORP BLOGS</title>
        @vite('resources/css/app.css')
    </head>
    <body class="mx-auto mt-10 max-w-2xl bg-slate-200 text-slate-700">
        <div class="text-2xl mb-2">SKJ Corp Blogs</div>
        {{ $slot }}
    </body>
</html>