<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (! auth()->user()->can('create:posts')) {
            abort(403, 'You do not have access to this page.');
        }

        $request->validate([
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'], // Dit is waar de TipTap content komt
            'category_id' => ['required', 'exists:categories,id'],
            'featured' => ['sometimes', 'boolean'],
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('posts', 'public');
        }

        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        $post = Post::create([
            'user_id' => auth()->user()->id,
            'category_id' => $request['category_id'],
            'title' => $request['title'],
            'slug' => $slug,
            'image' => $path,
            'content' => $request['content'],
            'featured' => $request->boolean('featured'),
            'published_at' => $request['published_at'],
        ]);

        flash()->success('Post successfully created.');

        return redirect()->route('posts.show', $post->slug);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (! auth()->user()->can('create:posts')) {
            abort(403, 'You do not have access to this page.');
        }

        $categories = Category::all();

        return view('posts.create', [
            'categories' => $categories,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
