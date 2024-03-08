@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="py-10 text-4xl text-white">
            Blog Posts
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a href="/blog/create" class="uppercase bg-gray-800 text-white text-xs font-bold py-3 px-5 rounded-full inline-block hover:bg-gray-700">Create Post</a>
    </div>
    
@endif
     <div>
        <section class="py-16 ">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
                    @foreach ($posts as $post)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('images/' . $post->image_path) }}" alt="Post_Image" class="w-full h-64 object-cover">
                            
                        <div class="p-6">
                            By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                            </span>
                            <span class="text-xs uppercase text-gray-500">{{ $post->short_title }}</span>
                            <h3 class="text-xl font-bold mt-2 mb-4">{{ $post->title }}</h3>
                            <p class="text-gray-700 mb-4">{{ $post->description }}</p>
                            <a href="/blog/{{ $post->slug }}" class="uppercase bg-gray-800 text-white text-xs font-bold py-3 px-5 rounded-full inline-block hover:bg-gray-700">Read More</a>
                            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                            <span class="float-right">
                                <a 
                                    href="/blog/{{ $post->slug }}/edit"
                                    class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                                    Edit
                                </a>
                            </span>
                            <span class="float-right">
                                <form 
                                    action="/blog/{{ $post->slug }}"
                                    method="POST">
                                    @csrf
                                    @method('delete')

                                    <button
                                        class="text-red-500 pr-3"
                                        type="submit">
                                        Delete
                                    </button>

                                </form>
                            </span>
                        @endif
                        </div>
                    </div>  
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection