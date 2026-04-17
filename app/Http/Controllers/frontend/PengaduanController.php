<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        return view('frontend.pengaduan.index', ['data' => $data]);
    }
}
