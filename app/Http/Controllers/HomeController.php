<?php

namespace App\Http\Controllers;

use App\Models\Kavling;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $listsKavling = Kavling::latest()->limit(8)->get();
        return view('pages.home', ['listsKavling' => $listsKavling]);
    }

    public function search(Request $request)
    {

        $keywords = $request->input('search');
        if ($keywords) {
            $result = Kavling::search($keywords)->get();
        } else {
            $result = Kavling::latest()->limit(8)->get();
        }

        return view('pages.home', ['listsKavling' => $result]);
    }
}
