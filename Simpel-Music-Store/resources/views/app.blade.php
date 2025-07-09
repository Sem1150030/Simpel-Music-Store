<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Music-Store</title>
  @vite('resources/css/app.css')
  <div class="">
  @livewire('nav-bar')
  </div>
  @livewireStyles

</head>

<body >
  @livewire('music-list')
  @livewireScripts

</body>

</html>
