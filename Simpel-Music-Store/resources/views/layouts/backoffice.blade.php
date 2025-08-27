<!DOCTYPE html>
<html lang="en" class="bg-white">

<head>
    <meta charset="UTF-8">
    <title>Backoffice</title>
    @vite('resources/css/app.css')
    @livewireStyles

</head>

<body>
    <div class="mb-10">
        @livewire('backoffice.topnav')
    </div>

    @yield('content')

    {{-- @livewire('backoffice.sidenav') --}}

    @livewireScripts
</body>

<footer></footer>
</html>
