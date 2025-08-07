<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CvBuilderController extends Controller
{
    /**
     * Display the CV builder page.
     */
    public function index(): View
    {
        return view('cv-builder');
    }
}
