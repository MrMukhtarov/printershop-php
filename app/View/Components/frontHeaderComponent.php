<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Nav_Items;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class frontHeaderComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $navItems = Nav_Items::all();
        $categories = Category::all();
        $user = null;
        if(Auth::user()){
            $user = Auth::user();
        }
        return view('components.front-header-component', compact("navItems","categories","user"));
    }
}
