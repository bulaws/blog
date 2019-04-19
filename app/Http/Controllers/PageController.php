<?php

namespace App\Http\Controllers;

use App\Models\PathControl;
use Illuminate\Http\Request;

class PageController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }

    /**
     * @param null $slug
     * @return $this
     */
    public function getPage($slug = null)
    {
        $page = PathControl::findBySlag($slug);

        return view($page->tpl)->with('page', $page);
    }
}
