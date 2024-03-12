
@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="py-10 text-4xl text-white">
            Create Post
        </h1>
    </div>
</div>

@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form id="myForm" action="/blog" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" id="intro_title" name="intro_title" placeholder="Intro Title..." class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none mb-8">

        <input type="text" id="title" name="title" placeholder="Title..." class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none mb-8">

        <textarea name="description" id="desc" placeholder="Description....." class="py-20 bg-transparent border-b-2 w-full h-60 text-xl outline-none mb-8"></textarea>

        <div class="py-5 mb-5">
            <label class="w-4/5 text-xl block pb-7 text-white">Choose related tags</label>
           
                @foreach ($tags as $tag)
                <span class="m-3">
                    <input class="rounded" type="checkbox" name="tags[]" value= {{ $tag->name }} id={{ $tag->name }}>
                    <label class="ml-2 text-white" for={{ $tag->name }}>{{ $tag->name }}</label>
                </span>
                @endforeach

        </div>

        <div class="bg-gray-lighter mb-8">
            <label for="image" class="w-44 flex flex-col items-center px-2 py-3 bg-white rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">
                    Select a file
                </span>
                <input type="file" name="image" id="image" class="hidden">
            </label>
        </div>

        <button    
            type="submit"
            class="uppercase mt-4 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Submit Post
        </button>
    </form>
</div>
@endsection
