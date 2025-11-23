<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display the main landing page.
     */
    public function index()
    {
        return view('landing.index');
    }
}
