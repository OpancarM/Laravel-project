@extends('layouts.app')

@section('content')
<section class="font-mono" id="hero">
        <!-- Flex Container -->
        <div class="container flex flex-col-reverse items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row">
        <!-- Left item -->
            <div class="flex flex-col mb-10 space-y-5 md:w-1/2">
          
                <h1 class="max-w-md text-4xl text-center md:text-5xl md:text-left">
                    Dobro Došli
                </h1>
                <p class="max-w text-center text-darkGrayishBlue md:text-left">
                    Športsko ribolovni klub "Jug 2" Osijek osnovan je 07. ožujka 1998. godine, a temeljem Statuta registriran je s osnovnim sadržajem obavljanja sljedećih djelatnosti:
                </p>
                <p class="max-w text-center text-darkGrayishBlue md:text-left">
                    -gospodarenje športskim ribolovnim područjem
                </p>
                <p class="max-w text-center text-darkGrayishBlue md:text-left">
                    -uzgoj, zaštita, ribolov i korištenje ribe, zaštita prirode i ljudskog okoliša
                </p>
                <p class="max-w text-center text-darkGrayishBlue md:text-left">
                    -odgoj i izobrazba ribiča
                </p>
                <p class="max-w text-center text-darkGrayishBlue md:text-left">
                    -organiziranje i sudjelovanje na natjecanjima i ostalim djelatnostima navedenim u Statutu ŠRK "Jug 2" Osijek.
                </p>
            <div class="flex justify-center md:justify-start">
                <a href="#" class="p-3 px-6 pt-2 rounded-full baseline bg-white hover:bg-gray-100 text-gray-800 shadow">
                    O nama...
                </a>
            </div>
        </div>
            <!-- Image -->
            <div class="md:w-1/2">
                <img src="{{ URL('images/jug2 version 2.png')}}" alt="Bajer jug 2" />
            </div>
        </div>
    </section>
@endsection