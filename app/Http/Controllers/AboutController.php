<?php

namespace App\Http\Controllers;

use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::latest()->first();
        return view('pages.about', [
            'about' => $about,
        ]);
    }
}
