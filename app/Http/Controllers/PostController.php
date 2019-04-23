<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::published()->paginate();

//        var_dump(Auth::user()->can('posts.create'));
//        die;

        return view('posts.index', compact(['posts', 'user']));
    }
}
