<?php

namespace App\Http\Controllers;

use App\Models\PathControl;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function getPage($slug = null)
    {



        $page = PathControl::findBySlag($slug);

//        var_dump($page);
//        die;

//        $page = $page->firstOrFail();

        return view($page->tpl)->with('page', $page);
    }
}
