<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="font-mono">
  <!-- Navbar -->
  <header class="container mx-auto p-2">
        <nav class="flex items-center justify-between mx-auto">
            <div>
                <a href="/"><p class="py-5 text-xl hover:text-darkGrayishBlue hover:scale-125">ŠRK &ensp;Jug 2</p></a>
            </div>
            <div
                class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[15vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a class="font-mono text-lg hover:text-darkGrayishBlue hover:scale-125" href="/">Početna</a>
                    </li>
                    <li>
                        <a class="font-mono text-lg hover:text-darkGrayishBlue hover:scale-125" href="{{ route('about') }}">O nama</a>
                    </li>
                    @auth
                    <li>
                        <a class="font-mono text-lg hover:text-darkGrayishBlue hover:scale-125" href="{{ route('dashboard') }}">Nadzorna Ploča</a>
                    </li>
                    @endauth
                </ul>
            </div>
            <div class="flex items-center gap-6">
                  
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
      
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
    </header>

    @yield('content')
  
  <footer class="font-mono">
    <div class="container flex flex-col-reverse items-center px-6 mx-auto mt-10 mb-10 space-y-0 md:space-y-0 md:flex-row">
        <!-- Image -->
      <div class="md:w-1/2 mt-7">
        <img src="{{ URL('images/grb.png')}}" class="mx-auto" alt="Bajer jug 2" />    
      </div>
      <!-- Right -->
      <div class="flex flex-col mb-2 space-y-5 md:w-1/2">
        <h4 class="mx-auto text-3xl text-center">
          Kontakt
        </h4>
        <li class="mx-auto text-center list-none">
          TEL: 098 528 666 
        </li>
        <li class="mx-auto text-center list-none">
          MAIL: srk.jug2.osijek@gamil.com
        </li> 
        <li class="mx-auto text-center list-none">
          ADRESA: Južno predgrađe 21, 31000 Osijek
        </li>         
      </div>
    </div>
     <div class=" flex items-center justify-center  ">
      <a href="#">
        <svg class="h-8 w-8 text-black hover:bg-gray-100 hover:scale-125 rounded rounded-full shadow-lg"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <polyline points="16 12 12 8 8 12" />  <line x1="12" y1="16" x2="12" y2="8" /></svg>
      </a>
    </div>
    <div class="relative container mx-auto p-6">
      <div class=" flex items-center justify-between">
        <div class=" m-auto">
          <p class="max-w text-2x1">
            © | Made by <a href="https://github.com/OpancarM">Mateo Opančar</a>! 
          </p>
        </div>
      </div>
    </div>
   
  </footer>    
</body>
    @vite('resources/js/app.js')
</html>
