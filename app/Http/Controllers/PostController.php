<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::paginate(4);
        return view('posts.posts', compact('posts'));
    }
    public function show($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();
        return view('posts.post', compact('post'));
    }

}
