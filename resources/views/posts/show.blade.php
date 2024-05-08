@extends('layouts.app')

@section('content')
    <section class="font-mono">
        <div class="container  items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row"> 
            <div class="px-6 py-4">
            <img class="m-auto" src="{{ asset($posts->image) }}" onerror="this.style.display='none'" alt="Bajer jug 2" />
            </div>
            <div class="px-6 py-4">
                <h1 class="text-5xl text-center">{{$posts->title}}</h1>
            </div> 
            <div class="px-6 py-4">
                <article class="mt-4">{{$posts->description}}</article>
            </div>
            <div class="px-6 py-4">
                <span class="ml-1">{{$posts->created_at}}</span> 
            </div>
        </div>     
    </section>   
@endsection