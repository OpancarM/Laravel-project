@extends('layouts.app')

@section('content')
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Promjeni novost</h2>
      <p class="mb-4">Promjeni: {{$posts->title}}</p>
    </header>

<div class="flex justify-center font-mono">
  <div class="w-10/12 bg-white p-6 rounded-lg">
    <form method="POST" action="/posts/{{$posts->id}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="font-mono mb-10">
        <label for="title" class="inline-block text-lg mb-2">Naslov</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
          placeholder="Example: Senior Laravel Developer" value="{{$posts->title}}" />

        @error('title')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="font-mono mb-10">
        <label for="description" class="inline-block text-lg mb-2">
          Tekts
        </label>
        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
          placeholder="Include tasks, requirements, salary, etc">{{$posts->description}}</textarea>

        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div>
        <label for="image" class="inline-block text-lg mb-2">Image</label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image"/>
        <p>{{$posts->image}}</p>
                
        @error('image')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="font-mono">
        <button class="p-3 px-6 pt-2 mt-5 rounded-full baseline bg-white hover:bg-gray-100 hover:scale-125 text-gray-800 shadow">
          Promjeni
        </button>

        <a href="/dashboard" class="p-3 px-6 pt-2 mt-5 rounded-full baseline bg-white hover:bg-red-100 hover:scale-125 text-gray-800 shadow"> Nazad </a>
      </div>
    </form>
  </div>
</div>
@endsection
