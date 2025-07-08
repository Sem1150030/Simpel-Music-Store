<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Music-Store</title>
  @vite('resources/css/app.css')
  @livewireStyles

</head>

<body class="container mx-auto mt-10 mb-10 max-w-3xl">
  @livewire('music-list')
  @livewireScripts

</body>

</html>
