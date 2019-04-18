<?php

namespace App\Http\Controllers;

use App\Models\PathControl;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function getPage($slug = null)
    {
        $page = PathControl::findBySlag($slug);

        return view($page->tpl)->with('page', $page);
    }
}
