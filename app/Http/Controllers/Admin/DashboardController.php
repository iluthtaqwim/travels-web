<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Kavling;
use App\Models\Testimoni;
use App\Models\Transaction;
use App\Models\TravelPackage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index (Request $request)
    {
        return view('pages.admin.dashboard', [
            'contact_us' => ContactUs::count(),
            'kavling' => Kavling::count(),
            'testimoni' => Testimoni::count(),
            'list_contactus' => ContactUs::latest()->paginate(5)
        ]);
    }

}
