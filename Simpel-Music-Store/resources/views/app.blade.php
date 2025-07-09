<!DOCTYPE html>
<html lang="en" class="bg-[#0A0A0A]">

<head>
  <meta charset="UTF-8">
  <title>Music-Store</title>
  @vite('resources/css/app.css')
  <div class="">
  @livewire('nav-bar')
  </div>
  @livewireStyles

</head>

<body class="mt-20">
    <img class="w-full h-auto " src="{{ asset('Images/VinylPlayer.png') }}" alt="VinylRecordPlayer">

  @livewire('music-list')
  @livewireScripts

</body>

</html>
