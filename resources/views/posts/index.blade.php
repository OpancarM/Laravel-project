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
                <p class="max-w text-center md:text-left">
                    -gospodarenje športskim ribolovnim područjem
                </p>
                <p class="max-w text-center md:text-left">
                    -uzgoj, zaštita, ribolov i korištenje ribe, zaštita prirode i ljudskog okoliša
                </p>
                <p class="max-w text-center md:text-left">
                    -odgoj i izobrazba ribiča
                </p>
                <p class="max-w text-center md:text-left">
                    -organiziranje i sudjelovanje na natjecanjima i ostalim djelatnostima navedenim u Statutu ŠRK "Jug 2" Osijek.
                </p>
            <div class="flex justify-center md:justify-start">
                <a href="{{ route('about') }}" class="p-3 px-6 pt-2 rounded-full baseline bg-white hover:bg-gray-100 hover:scale-125 text-gray-800 shadow">
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
    
    <section class="font-mono">
        <div class="relative container mx-auto p-6">
            <div class="flex items-center justify-between">
                <div class=" space-x-10 md:flex m-auto">
                    <h1 class="max-w text-5xl">
                        NOVOSTI
                    </h1>
                </div>
            </div>
        </div>

  
        @unless(count($posts) == 0)

        @foreach($posts as $post)
        <div class="flex flex-wrap items-center justify-center">
            <div class="max-w-96 max-h- m-5 border border-gray-200 rounded shadow-lg" style="height: 420px;">
                <div>   
                    <div class="">
                        <a href="/posts/{{$post->id}}">
                        @if ($post->image)   
                        <img class="m-auto" src="{{asset($post->image)}}" style="height: 240px;" onerror="this.style.display='none'" alt="{{$post->title}}" />  
                        @else
                        <img class="m-auto" src="{{ asset('images/grb jug 2.jpg')}}" style="height: 240px;" onerror="this.style.display='none'" alt="{{$post->title}}" />
                        @endif
                        </a>
                    </div>
                    <div class="px-6 py-4">
                        <h3 class="max-w text-2xl m-auto text-center">{{$post->title}}</h3>
                    </div>
                    <div class="px-6 py-4 flex flex-row items-center mt-3">
                        
                        <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <svg height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256
			                            c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128
			                            c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z"></path>
                                    </g>
                                </g>
                            </svg>
                        <span class="ml-1">{{$post->created_at}}</span>
                        <a href="/posts/{{$post->id}}" class="ml-24 relative absolute bottom-0 right-0 p-1 px-1 pt-1 rounded-full baseline bg-white hover:bg-gray-100 hover:scale-125 text-gray-800 shadow">Više!</a>
                    </div>
                </div>
            </div>
                @endforeach
            @else
            <p>Prazno</p>
            @endunless
        </div>
        </div>
    </div>
                            
    </section>
    <div class="container m-auto">
                {{ $posts->links() }}
        </div>
@endsection

