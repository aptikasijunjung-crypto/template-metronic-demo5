<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $data = [];
        return view('frontend.home.index', ['data' => $data]);
    }
}
