<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'user' => Crypt::decrypt(session('token'))
        ];
        // dd($data);
        return view('frontend.dashboard.index', ['data' => $data]);
    }
}
