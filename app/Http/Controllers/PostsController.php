<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Spatie\Tags\Tag;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blog.index')
            ->with('posts', Post::orderBy('updated_at', 'DESC')-> get());
    }

    /**
     * Show the form for creating a new resource.
     */
     public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'intro_title'=> 'required', 
            'title'=> 'required', 
            'description'=> 'required',
            'image'=> 'required'
        ]);

        $newImageName = uniqid() . '-' . $request->intro_title . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        Post::create([
            'intro_title' => $request->input('intro_title'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'tags' => $request->input('tags'),
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/blog')
            ->with('message', 'Your post has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        return view('blog.show')
            ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        return view('blog.edit')
            ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
          $request->validate([
            'intro_title'=> 'required', 
            'title'=> 'required', 
            'description'=> 'required',
        ]);

        Post::where('slug', $slug)
            ->update([
                'intro_title' => $request->input('intro_title'),
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'tags' => $request->input('tags'),
                'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
                'user_id' => auth()->user()->id
            ]);

        return redirect('/blog')
            ->with('message', 'Your post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug);
        $post->delete();

        return redirect('/blog')
            ->with('message', 'Your post has been deleted!');
    }

    public function tagPosts(Request $request, $tag){
        $posts = Post::where('tags', 'like', '%' . $tag . '%')->get();

        if(!$posts){
            return abort(404);
        }

        $data = [
            'pageTitle' => '#' . $tag,
            'posts' => $posts
        ];

        return view('blog.tag_posts', $data);
    }
}
