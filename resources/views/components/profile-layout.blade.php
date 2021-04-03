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

<body class="font-sans text-gray-800 antialiased">
  <x-jet-banner />

  <div class="bg-primary text-white fixed w-full h-14 top-0 left-0 px-4 items-center flex">
    <div class="text-lg w-1/5 text-bold">
      <a href="{{ url('/') }}">
        {{ env('APP_SHORT_NAME') }}
      </a>
    </div>
  </div>
  
  <div class="flex">
    <div class="mt-14 w-64 bg-primary-50 fixed overflow-y-auto shadow border-gray-300 border-r" style="height: calc(100vh - 56px)">
      <div class="py-8 flex items-center flex-col space-y-4">
        <div
          class="rounded-full flex-none md:h-24 md:w-24 h-20 w-20 bg-primary bg-center bg-cover border-2 border-primary"
          style="background-image: url({{ $profile_photo_url }})"></div>
        <div class="font-bold text-xl">{{ Auth::user()->name }}</div>
      </div>
      @foreach ($menus as $menu)
      <a href="{{ route($menu['route']) }}"
        class="{{ Route::is($menu['route']) ? 'bg-opacity-100 text-white' : 'bg-opacity-0'}} transition-all duration-300 block items-center flex p-3 space-x-4 rounded m-2 bg-primary-500 hover:bg-opacity-100 hover:text-white">
        <div class="{{ $menu['icon'] }}"></div>
        <div>{{ $menu['text'] }}</div>
      </a>
      @endforeach
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a class="transition-all duration-300 bg-opacity-0 block items-center flex p-3 space-x-4 rounded m-2 bg-primary-500 hover:bg-opacity-100 hover:text-white"
          href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">
          <div class="ri-logout-box-line"></div>
          <div>{{ __('Log Out') }}</div>
        </a>
      </form>
    </div>

    <main class="pt-20 min-h-screen w-full ml-64 p-4 bg-primary-500 bg-opacity-10">
      <div class="shadow bg-white">
        @if (isset($header))
        <div class="font-bold p-4 border-b">{{ $header }}</div>
        @endif
        <div class="p-4">
          {{ $slot }}
        </div>
      </div>
    </main>
  </div>

  @stack('modals')

  @livewireScripts
</body>

</html>