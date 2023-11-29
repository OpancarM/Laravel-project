@extends('layouts.app')

@section('content')
<div class="flex justify-center font-mono">
    <div class="w-10/12 bg-white p-6 rounded-lg">
        <form action="/posts" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title" class="inline-block text-lg mb-2">Naziv</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" placeholder="Naziv..." value="{{old('title')}}" />
                @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="description" class="inline-block text-lg mb-2">Tekst:</label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10" placeholder="Tekst...">{{old('description')}}</textarea>
                @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="image" class="inline-block text-lg mb-2">Image</label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image"/>
                @error('image')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <button type="submit" class="p-3 px-6 pt-2 mt-5 rounded-full baseline bg-white hover:bg-gray-100 hover:scale-125 text-gray-800 shadow">Post</button>
                <a href="/dashboard" class="p-3 px-6 pt-2 mt-5 rounded-full baseline bg-white hover:bg-red-100 hover:scale-125 text-gray-800 shadow"> Nazad </a>
            </div>
            
            

        </form>       
    </div>
</div>
@endsection
