@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="py-10 text-4xl text-white">
            Blog Posts
        </h1>
    </div>
</div>

@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://d1m75rqqgidzqn.cloudfront.net/wp-data/2019/09/11134058/What-is-data-science-2.jpg" alt="Featured Post Image" class="w-full h-80 object-cover pt-10">
    </div>
    <div>
        <h2 class="text-white font-bold text-3xl pt-10 mb-2">{{ $post->title }}</h2>
        <span class="text-white">
            By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
        </span>

        <p class="text-xl text-white pt-8 leading-8 font-light py-5">
            {{ $post->description }}
        </p>

        <a href="/blog/{{ $post->slug }}" class="uppercase bg-gray-800 text-white text-xs font-bold py-3 px-5 rounded-full inline-block hover:bg-gray-700">Read More</a>
    </div>
</div>

@endforeach


@endsection