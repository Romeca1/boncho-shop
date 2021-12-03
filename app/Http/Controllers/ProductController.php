<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    public function showTraiding()
    {
    	$products = Product::with("category", "album")->take(8)->get();

    	return view("welcome", compact("products"));
    }
}
