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

  @livewireStyles
  @stack('styles')

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans text-gray-800 antialiased overflow-x-hidden">
  <x-jet-banner />

  <x-header />

  <div class="min-h-screen bg-gray-100">
    <!-- Page Heading -->
    @if (isset($header))
    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        {{ $header }}
      </div>
    </header>
    @endif

    <!-- Page Content -->
    <main class="flex flex-col items-center overflow-hidden">
      {{ $slot }}
    </main>
  </div>

  <x-footer />

  @stack('modals')

  @livewireScripts
</body>

</html>