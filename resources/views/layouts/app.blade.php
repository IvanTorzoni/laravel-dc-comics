<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DC Comics</title>
  <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/img/logo.png')}}">

  <!-- Includiamo gli assets con la direttiva vite -->
  @vite('resources/js/app.js')
</head>

<body>

  @include('partials.head')

  <main>
    @yield('content')
  </main>

</body>

</html>
