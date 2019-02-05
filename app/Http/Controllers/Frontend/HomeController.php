<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Package;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }
}
