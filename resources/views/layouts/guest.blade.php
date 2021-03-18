<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ url('/images/Sketch_Ai-03.png') }}" type="image/x-icon">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans text-gray-800 antialiased">
  {{ $slot }}


  <div class="container mt-auto mb-8">
    <div class="mx-8">
      <div class="text-lg text-uppercase text-white">
        {{ env('APP_SHORT_NAME', 'APP_NAME') }} @ 2021 by <img class="h-12 inline-block align-middle"
          src="/images/logo.png" alt="">
      </div>
    </div>
  </div>
</body>

</html>