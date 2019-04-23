<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::published()->paginate();

        $user = auth()->user();

        return view('posts.index', compact(['posts', 'user']));
    }
}
