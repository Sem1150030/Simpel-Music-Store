<!DOCTYPE html>
<html lang="en" class="bg-[#0A0A0A]">

    <head>
        <meta charset="UTF-8">
        <title>VinylStar</title>
        @vite('resources/css/app.css')
            <div class="">
                @livewire('nav-bar')
            </div>
        @livewireStyles

    </head>

    <body class="mt-30">
        @yield('content')
        @livewireScripts
    </body>
</html>
