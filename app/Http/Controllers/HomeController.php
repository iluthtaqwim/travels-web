<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Kavling;
use App\Models\Kecamatan;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $listsKavling = Kavling::latest()->paginate(8);
        $testimoni = Testimoni::latest()->get();
        $kecamatan = Kecamatan::where('kabupaten_id', 3306)->get();
        $banner = Banner::latest()->get();
        return view('pages.home', ['listsKavling' => $listsKavling, 'testimoni' => $testimoni, 'kecamatan' => $kecamatan, 'banner' => $banner]);
    }

    public function search(Request $request)
    {

        $keywords = $request->input('search');
        if ($keywords) {
            $result = Kavling::search($keywords)->paginate(8);
            $testimoni = Testimoni::latest()->get();
            $kecamatan = Kecamatan::where('kabupaten_id', 3306)->get();
        } else {
            $result = Kavling::latest()->paginate(8);
            $testimoni = Testimoni::latest()->get();
            $kecamatan = Kecamatan::where('kabupaten_id', 3306)->get();
        }

        return view('pages.home', ['listsKavling' => $result, 'testimoni' => $testimoni, 'kecamatan' => $kecamatan]);
    }

    public function filter(Request $request)
    {

        $create = date_create($request->input('created_at'));
        $format = date_format($create, 'Y-m-d');

        $filter = Kavling::kecamatan($request->input('kecamatan'))->createdAt($format)->priceRange($request->input('range_start'), $request->input('range_end'))->paginate(8);
        $testimoni = Testimoni::latest()->get();
        $kecamatan = Kecamatan::where('kabupaten_id', 3306)->get();

        return view('pages.home', ['listsKavling' => $filter, 'testimoni' => $testimoni, 'kecamatan' => $kecamatan]);
    }
}
