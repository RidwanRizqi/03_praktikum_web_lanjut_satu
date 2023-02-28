<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($title)
    {
        return view('news', ['title' => $title]);
    }
}
