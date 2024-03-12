@extends('layouts.app')

@section('content')
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-20 border-b border-gray-200 ">
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-4xl pb-2 text-white">TechTrek: Your Premier Destination for Cutting-Edge Tech Insights and Trends</h2>
            <div class="input-group my-3">
                <form action="{{ route('tag_posts_by_search') }}" method="GET">
                    <input type="text" name="search" class="border-gray-300 border rounded-lg py-2 px-4 w-80" placeholder="Operating System" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button type="submit" class="bg-darkBlue hover:bg-blue-900 text-white font-bold mx-4 py-2 px-4 rounded inline-flex items-center" id="button-addon2">Search</button>
                </form>
                <div class="suggestion mt-2">
                    <a class="text-white text-sm px-2" href="{{ route('tag_posts', 'AI') }}">A I</a>
                    <a class="text-white text-sm px-2" href="{{ route('tag_posts', 'Education') }}">Education</a>
                    <a class="text-white text-sm px-2" href={{ route('tag_posts', 'Development') }}>Development</a>         
                    <a class="text-white text-sm px-2" href={{ route('tag_posts', 'macOS') }}>MacOS</a>         
                </div>
            </div>
        </div>

        <div>
            <img src="home.svg" width="700" alt="read-img" width="700" class="mt-10">
        </div>
    </div>

    <div>
        <section class="py-16 bg-gray-100">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold text-center mb-8">Featured Posts</h2>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
                    @foreach ($posts as $post)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('images/' . $post->image_path) }}" alt="Post_Image" class="w-full h-64 object-cover">
                        
                            
                        <div class="p-6">
                            By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                            </span>
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
                                {{-- <span class="text-gray-500">{{ $post->tags }}</span> --}}
                            </div>
                            @endif

                            <span class="text-xs uppercase text-gray-500">{{ $post->short_title }}</span>
                            <h3 class="text-xl font-bold mt-2 mb-4">{{ $post->title }}</h3>
                            <p class="text-gray-700 mb-4">{!!  substr($post->description, 0, 250)  !!}...</p>
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
        </section>
    </div>
    


    <div class="pb-[100px]">
        <section id="authors" class="p-5 bg-primary">
        <div class="container mx-auto">
            <h2 class="text-center text-white text-3xl font-bold mb-5">Our Bloggers</h2>
            <p class="text-center text-white text-lg mb-8">          
                Our bloggers all have 5+ years of experience working in the industry.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white rounded-lg shadow-lg">
                <div class="p-6 text-center">
                <img src="https://randomuser.me/api/portraits/men/11.jpg" class="rounded-full w-24 h-24 mx-auto mb-4" alt="">
                <h3 class="text-xl font-semibold mb-2">Sebastian</h3>
                <p class="text-gray-700 text-sm mb-4">
                    Sebastian Gates is a seasoned blogger with over 5 years of experience in the industry. He specializes in writing insightful articles on technology, web development, and digital marketing. John's passion for writing and deep understanding of the subject matter make his blog posts both informative and engaging. In his free time, he enjoys experimenting with new blogging platforms, exploring different writing styles, and interacting with his readers through social media.
                </p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg">
                <div class="p-6 text-center">
                <img src="https://randomuser.me/api/portraits/men/10.jpg" class="rounded-full w-24 h-24 mx-auto mb-4" alt="">
                <h3 class="text-xl font-semibold mb-2">Derek</h3>
                <p class="text-gray-700 text-sm mb-4">
                    Derek O'Riely is a technology enthusiast and blogger with a passion for exploring the latest gadgets and innovations. She shares her insights, reviews, and recommendations on cutting-edge gadgets, software, and technology trends. Jane's engaging writing style and in-depth knowledge make her blog a go-to resource for tech enthusiasts seeking reliable information and reviews.
                </p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg">
                <div class="p-6 text-center">
                <img src="https://randomuser.me/api/portraits/men/12.jpg" class="rounded-full w-24 h-24 mx-auto mb-4" alt="">
                <h3 class="text-xl font-semibold mb-2">Dermot</h3>
                <p class="text-gray-700 text-sm mb-4">
                    Dermot Logue is a passionate blogger specializing in gadgets and consumer electronics. With over 10 years of experience in reviewing and testing various gadgets, he provides in-depth analysis, hands-on reviews, and comparisons to help consumers make informed purchasing decisions. Steve's expertise and honest opinions make his blog a trusted source for gadget enthusiasts looking for reliable insights and recommendations.
                </p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg">
                <div class="p-6 text-center">
                <img src="https://randomuser.me/api/portraits/men/13.jpg" class="rounded-full w-24 h-24 mx-auto mb-4" alt="">
                <h3 class="text-xl font-semibold mb-2">Lance</h3>
                <p class="text-gray-700 text-sm mb-4">
                    Lance Gonsalves is a software developer and blogger with a knack for demystifying complex technical concepts. With over 20 years of experience in software development, she shares her expertise through tutorials, tips, and insights on programming languages, frameworks, and best practices. Sara's clear explanations and practical advice make her blog an invaluable resource for aspiring and experienced software developers alike.
                </p>
                </div>
            </div>
            </div>
        </div>
        </section>
    </div>

    
@endsection