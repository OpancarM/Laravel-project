@extends('layouts.app')

@section('content')
<div class="container flex flex-col-reverse just px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row">
    <a href="/posts/create">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 hover:bg-gray-100 hover:scale-125 rounded rounded-full shadow-lg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
            <path strokeLinecap="round" strokeLinejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </a>
    
</div>
<div class="container flex flex-col-reverse justify-end px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-rowshadow-md sm:rounded-lg w-4/5 items-center font-mono">
    <table class="w-full text-sm text-left">
        <thead class="text-xs text-gray-700 uppercase ">
            <tr >
                <th scope="col" class="py-3 px-6 text-lg">
                    Naslov
                </th>
                <th scope="col" class="py-3 px-6 text-lg hidden lg:block">
                    Tekst
                </th>
                <th scope="col" class="py-3 px-6 text-lg">
                    Vrijeme dodavanja
                </th>
                <th scope="col" class="py-3 px-6 text-lg">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr">
                <th scope="row" class="py-4 px-6 font-medium ">
                {{$post->title}}
                </th>
                <td class="py-4 px-6 hidden lg:block">
                {{$post->description}}
                </td>
                <td class="py-4 px-6">
                {{$post->created_at}}
                </td>
                <td class="py-4 px-6">
                <a href="/posts/{{$post->id}}/edit">
                    <svg class="h-8 w-8 text-green-500 hover:bg-green-100"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                </a>
                <form action="dashboard/{{$post->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>
                        <svg class="h-8 w-8 text-red-500 hover:bg-red-100"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                    </button>
                </form>
                </td>    
            </tr> 
            @endforeach   
        </tbody>
    </table>
    
    
</div>
<div class="mt-6 p-4">
        {{ $posts->links() }}
    </div>
@endsection
