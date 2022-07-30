<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index(Request $request)
    {

        $about = About::latest()->first();
        return view('pages.contact', ['about' => $about]);
    }

    public function sendEmail(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required'
        ]);

        if ($validate->fails()) {
          return redirect()->route('contact')->with($validate->message());
        } else {
            $data = $request->all();
            $send = ContactUs::create($data);

           return redirect()->route('contact')->with('message', 'Terimakasih! Pesan anda sudah kami terima');

        }
    }

}
