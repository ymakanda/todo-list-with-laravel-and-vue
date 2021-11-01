<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    
</head>
<body>
<div id="app">
    <nav id="header" class="w-full z-30 top-3 py-1 bg-white shadow-lg border-b border-blue-400 mt-2">
      <div class="w-full flex items-center justify-between mt-0 px-6 py-2">
         <label for="menu-toggle" class="cursor-pointer md:hidden block">
            <svg class="fill-current text-blue-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
               <title>menu</title>
               <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
         </label>
         <input class="hidden" type="checkbox" id="menu-toggle">
         
         <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
            <nav>
               <ul class="md:flex items-center justify-between text-base text-blue-600 pt-4 md:pt-0">
                @guest
                    @if (Route::has('login'))
                        <li><a class="inline-block no-underline hover:text-black font-medium text-lg py-2 px-4 lg:-ml-2" href="{{ route('login') }}">Login</a></li>
                    @endif

                    @if (Route::has('register'))
                        <li><a class="inline-block no-underline hover:text-black font-medium text-lg py-2 px-4 lg:-ml-2" href="{{ route('register') }}">Register</a></li>
                    @endif
                    @else
                        <li><a class="inline-block no-underline hover:text-black font-medium text-lg py-2 px-4 lg:-ml-2" href="{{ route('register') }}">{{ Auth::user()->name }}</a></li>
                        <li><a class="inline-block no-underline hover:text-black font-medium text-lg py-2 px-4 lg:-ml-2" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                @endguest
               </ul>
            </nav>
         </div>
      </div>
   </nav>
    <main class="_h-screen_">
        @yield('content')
    </main>
</div>
</body>
</html>
