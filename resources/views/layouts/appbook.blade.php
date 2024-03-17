<!DOCTYPE html>
<html lang="es">
<head>
    @include('layouts.analytics')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @yield('customcss')
    <style>
        .bg-purple-deep { background-color: #4B0082; }
        .bg-lavender { background-color: #E6E6FA; }
        .text-soft-black { color: #333333; }
        .text-slate-gray { color: #708090; }
        .accent-color { background-color: #FF851B; color: white; }
    </style>
    
</head>
<body class="bg-lavender text-soft-black font-sans">

    @include('layouts.appbookmenu')

    <div class="container mx-auto p-4">

        @yield('content')
        

        @include('layouts.appbookfooter')
    </div>

</body>
@yield('customjs')
</html>
