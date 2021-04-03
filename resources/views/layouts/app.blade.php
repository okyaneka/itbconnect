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

  <script>
    !function(f,b,e,v,n,t,s) 
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod? 
    n.callMethod.apply(n,arguments):n.queue.push(arguments)}; 
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; 
    n.queue=[];t=b.createElement(e);t.async=!0; 
    t.src=v;s=b.getElementsByTagName(e)[0]; 
    s.parentNode.insertBefore(t,s)}(window, document,'script', 
    'https://connect.facebook.net/en_US/fbevents.js'); 
    fbq('init', '799016247693956'); 
    fbq('track', 'PageView'); 
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=799016247693956&ev=PageView&noscript=1" /></noscript>
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