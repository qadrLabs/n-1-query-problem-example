<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
//        $posts = Post::with('category')->get();
        foreach ($posts as $post) {
            echo $post->title . ' - ' .$post->category->name . '<br/>';
        }
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Post $post)
    {
    }

    public function edit(Post $post)
    {
    }

    public function update(Request $request, Post $post)
    {
    }

    public function destroy(Post $post)
    {
    }
}
