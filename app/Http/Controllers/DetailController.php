<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Kavling;
use App\Models\KavlingImage;
use App\Models\Kecamatan;

class DetailController extends Controller
{
    public function index($id)
    {
        $detail = Kavling::find($id);
        $address = Kecamatan::find($detail->kecamatan);
        $images = KavlingImage::where('kavling_id', $detail->id)->get();
        $whatsapp = About::latest()->first();
        return view('pages.detail', ['detail' => $detail, 'images' => $images, 'address' => $address, 'whatsapp' => $whatsapp]);
    }
}
