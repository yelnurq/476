<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Shoes;
use App\Models\Tag;
use Illuminate\Http\Request;

class ShoesController extends Controller
{
    public function index(Product $product) {
        $product = Product::all();
        $tags = Tag::all();
        return view("shoes/index", compact("product", "tags"));
    }
    public function costume(Product $product) {
        $product = Product::all();
        $tags = Tag::all();
        return view("shoes/costume", compact("product", "tags"));
    }
    public function blazer(Product $product) {
        $product = Product::all();
        $tags = Tag::all();
        return view("shoes/blazer", compact("product", "tags"));
    }
	    public function trousers(Product $product) {
        $product = Product::all();
        $tags = Tag::all();
        return view("shoes/trousers", compact("product", "tags"));
    }


}
