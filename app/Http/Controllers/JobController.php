<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use Illuminate\Http\Request;

class JobController extends Controller
{


    public function index()
    {
        SendEmailJob::dispatch('My mail text')->delay(now()->addSeconds(60));
    }
}
