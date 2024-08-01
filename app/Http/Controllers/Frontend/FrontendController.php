<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        $products = Product::orderBy('id','desc')->get();
        return view('frontend.home.index',compact('products'));
    }
}
