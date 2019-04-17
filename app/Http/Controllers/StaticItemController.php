<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticItemController extends Controller
{
    public function index()
    {
        return view('static-item.static-item');
    }
}
