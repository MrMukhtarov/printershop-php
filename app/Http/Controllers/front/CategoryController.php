<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function get(){
        $categories = Category::all();
        dd($categories[0]->name, $categories[0]->slug);
    }
}
