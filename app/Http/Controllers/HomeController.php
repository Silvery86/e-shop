<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{

    /**
     * Show the application home.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('index');
    }
}
