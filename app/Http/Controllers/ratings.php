<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ratings extends Controller
{
    Public function add(Request $request){
        return $stars_rated = $request->input(‘product_rating’);
    }
}
