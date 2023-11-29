<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body>
  <!-- Navbar -->
  <nav class="relative container mx-auto p-6">
    <!-- Flex container -->
    <div class="flex items-center justify-between">
      <!-- Logo -->
      <div class="pt-2">
        <a href="/"><p class="font-hand hover:text-darkGrayishBlue hover:scale-125">Jug 2</p></a>
      </div>
      <!-- Menu Items -->
      <div class="hidden space-x-10 md:flex">
        <a href="/" class="hover:text-darkGrayishBlue hover:scale-125">Početna</a>
        <a href="{{ route('about') }}" class="hover:text-darkGrayishBlue hover:scale-125">O nama</a>
        @auth
        <a href="{{ route('dashboard') }}" class="hover:text-darkGrayishBlue hover:scale-125">Nadzorna Ploča</a>
        @endauth
      </div>

      <!-- Button -->
      @guest
      <a href="{{ route('login') }}" class="hidden p-3 px-6 bg-white hover:bg-gray-100 text-gray-800 py-2 px-4 border rounded-full shadow md:block hover:scale-125">
        Login
      </a>
      @endguest

      @auth
          <li class="sm:hidden md:block list-none">
            <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                @csrf
              <button type="submit" class="hover:scale-125">{{ auth()->user()->name }} logout</button>
            </form>
          </li>
      @endauth


      <!-- Hamburger Icon -->
      <button
        id="menu-btn"
        class="block hamburger md:hidden focus:outline-none">
        <span class="hamburger-top"></span>
        <span class="hamburger-middle"></span>
        <span class="hamburger-bottom"></span>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden">
      <div
        id="menu"
        class="absolute flex-col items-center hidden self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
        <a href="/">Početna</a>
        <a href="{{ route('about') }}">O nama</a>
        @auth
        <a href=" {{ route('dashboard') }}">Nadzorna Ploča</a>
        <li class="list-none">
            <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                @csrf
              <button type="submit">{{ auth()->user()->name }} logout</button>
            </form>
          </li> 
        @endauth
        @guest
        <a href="{{ route('login') }}">Login</a>
        @endguest

       
      </div>
    </div>
  </nav>

    @yield('content')
  
  <footer class="font-mono">
  <hr class="w-96 h-1 mx-auto my-4 bg-gray-200 border-0 rounded md:my-10">
    <div class="container flex flex-col-reverse items-center px-6 mx-auto mt-10 mb-10 space-y-0 md:space-y-0 md:flex-row">
        <!-- Image -->
      <div class="md:w-1/2 mt-3">
        <img src="{{ URL('images/grb.png')}}" class="mx-auto" alt="Bajer jug 2" />    
      </div>
      <!-- Right -->
      <div class="flex flex-col mb-3 space-y-12 md:w-1/2">
        <h4 class="max-w-md text-4xl text-center">
          Kontakt
        </h4>
        <p class="max-w-md text-center text-darkGrayishBlue">
          Športsko ribolovni klub "Jug 2" Osijek osnovan je 07. ožujka 1998. godine, a temeljem Statuta registriran je s osnovnim sadržajem obavljanja sljedećih djelatnosti:
        </p>
      </div>
    </div>
    <div class="conatiner float-right mb-20 mr-20">
      <a href="#">
        <svg class="h-8 w-8 text-black hover:bg-gray-100 hover:scale-125 rounded rounded-full shadow-lg"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <polyline points="16 12 12 8 8 12" />  <line x1="12" y1="16" x2="12" y2="8" /></svg>
      </a>
    </div>
    
  </footer>
 

    
</body>
    @vite('resources/js/app.js')
</html>

