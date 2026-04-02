<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function show(){
        $category ="Shoes";
        $button = "<button>Button</button>";
        return view('home', [
            'product_category' => $category,
            'product_name' => 'Logitech Hero',
            'button' => $button
        ]);
    }
}
