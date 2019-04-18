<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticItemController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('static-item.static-item');
    }
}
