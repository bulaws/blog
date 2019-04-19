<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticItemController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('static-item.static-item');
    }
}
