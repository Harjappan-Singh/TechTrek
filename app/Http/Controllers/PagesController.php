<?php

namespace App\Http\Controllers;
use App\Models\Post;

class PagesController extends Controller
{
    public function index()
    {
        return view('index')
            ->with('posts', Post::where('tags', 'like', '%featured%')
            ->orderBy('updated_at', 'DESC')-> take(3)-> get());
    }

    public function about(){
        return view('about');
    }
}
