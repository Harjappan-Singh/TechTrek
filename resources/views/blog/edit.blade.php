
@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-center">
    <div class="py-10 border-b border-gray-200">
        <h1 class="text-4xl text-white">
            Update Post
        </h1>
    </div>
</div>

@if ($errors->any())
    <div class="w-4/5 m-auto mt-8">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-full mb-4 text-gray-900 bg-red-200 rounded-lg py-2 px-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-10">
    <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <input type="text" id="intro_title" name="intro_title"  value="{{ $post->intro_title }}" class="text-gray-900 bg-gray-200 block border-b-2 w-full h-12 text-xl outline-none mb-6 px-4 rounded-lg focus:border-blue-500">

        <input type="text" id="title" name="title" value="{{ $post->title }}" class="text-gray-900 bg-gray-200 block border-b-2 w-full h-12 text-xl outline-none mb-6 px-4 rounded-lg focus:border-blue-500">

        <textarea name="description" id="desc" placeholder="Description....." class="text-gray-900 bg-gray-200 py-4 px-4 w-full h-60 text-lg outline-none mb-6 rounded-lg focus:border-blue-500">
            {{ $post->description }}
        </textarea>

        <div class="flex flex-col items-center pt-20">
            <button    
                        type="submit"
                        class="uppercase mt-6 bg-pink text-gray-100 text-lg font-semibold py-3 px-8 rounded-lg hover:bg-darkBlue focus:outline-none focus:bg-darkBlue inline-flex items-center">
                    Update Post
               </button>
        </div>
    </form>
</div>

@endsection


{{-- // reference to add tags - https://codepen.io/iamqamarali/pen/qyawoR --}}