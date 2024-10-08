<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        $categories = Category::all();
        $products = Product::all();
        return view('front.home.index',compact("sliders","categories","products"));
    }
}
