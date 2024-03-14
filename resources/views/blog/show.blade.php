@extends('layouts.app')

@section('content')
<div class="w-full max-w-4xl mx-auto px-6">
    <div class="py-10">
        <h1 class="text-4xl font-bold text-white">{{ $post->title }}</h1>
    </div>

    <div>
        <img src="{{ asset('images/' . $post->image_path) }}" alt="Featured Post Image" class="w-full h-auto object-cover">
    </div>

    <div class="mt-10">
        <p class="text-gray-200">
            By <span class="font-semibold">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
        </p>
    </div>

    @if($post->tags)
                            @php
                                $tagsString = $post->tags;
                                $tagsArray = explode(',', $tagsString);
                            @endphp
                            <div class="tagsContainer">
                               <div class="flex flex-wrap">
                                    @foreach ($tagsArray as $tag)
                                        <span class="p-1 m-2 bg-pink rounded  text-white">
                                            <a href="{{ route('tag_posts', $tag) }}" class="">{{$tag }}</a>
                                        </span>
                                            
                                        
                                    @endforeach
                               </div>
                            </div>
                            @endif

    <div class="mt-8">
        <p class="text-lg leading-7 text-white">{{ $post->description }}</p>
    </div>
</div>
@endsection
