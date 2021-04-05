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
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=799016247693956&ev=PageView&noscript=1" /></noscript>
</head>

<body class="font-sans text-gray-800 antialiased h-screen" x-data="{popup: false}"
  x-init="setTimeout(() => { popup = true }, 500);">
  {{ $slot }}


  <div x-show="popup" x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
    x-transition:leave-end="transform opacity-0 scale-95"
    class="fixed h-screen w-screen bg-primary top-0 left-0 bg-opacity-50 flex items-center justify-center z-10">
    <div class="w-96 p-4 bg-white border rounded" @click.away="popup = false" @close.stop="popup = false">
      <img class="w-4/5 object-contain mx-auto" src="{{ url('/images/logo header.png') }}" />
      <div>Ini adalah Prototipe dari Platform Connecting The Dots. Beberapa Fitur Masih Dalam Tahap Pengembangan.
      </div>

      <div class="mt-4 text-center">
        <div @click="popup = false">
          <x-button href="#" color="primary">Tutup</x-button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>