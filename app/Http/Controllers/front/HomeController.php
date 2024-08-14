<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Nav_Items;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front.home.index');
    }
}
