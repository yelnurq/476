<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Director;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $tag = Tag::all();
        $product = Product::paginate(10);
        return view("product.main", compact("product", "tag"));
    }
    public function info()
    {
        $tag = Tag::all();
        $product = Product::paginate(5);
        return view("product.index", compact("product", "tag"));
    }
    public function show(Request $request, $id)
    {
        $p = Product::where("id", $id)->first();
        return view("product.show", compact("p"));
    }
    public function create()
    {
        $tags = Tag::all();
        $app = Application::all();
        $directortext = Director::paginate(10);

        return view("orders.index", compact("tags", "directortext", "app"));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => "required|string",
            "description" => "required|string",
        ]);

        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->tag_id = $request->input("tag_id");
        $product->save();

        return redirect()->route("product.index");
    }
    public function smoking()
    {
        $product = Product::all();
        $tags = Tag::all();
        return view("shoes.index", compact("product", "tags"));
    }
    public function search(Request $request){
        $tag = Tag::all();
        $query = $request->input("query");
        $results = Product::where("name", "like", "%$query%")->get();
        return view("product.index", compact("results", "tag"));
    }
}
