<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart = session("cart", []);
        $total = 0;
        foreach($cart as $item)
        {
            $total += $item["price"]*$item["quantity"];
        }
        return view("cart/index", ["cart"=>$cart, "total"=>$total]);
    }
    public function add_to_cart(Request $request, $productId)
    {
        $request->validate([
            "quantity"=>"required|integer|min:1"
        ]);
        $product = Product::findOrFail($productId);
        $request->session()->put("cart.{$productId}", [
            "product_id" => $product->id, // Добавьте ключ 'product_id' в массив корзины
            "name"=>$product->name,
            "price"=>$product->price,
            "quantity"=>$request->input("quantity"),
        ]);
        return redirect()->route("product.index");
    }
    public function clear(Request $request)
    {
        session()->forget("cart");
        return redirect()->route("cart.index");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
        ]);

        $cart = session('cart', []);

        $order = new Order();
        $order->name = $request->input('name');
        $order->address = $request->input('address');
        $order->cart = json_encode($cart); // Преобразуем массив в строку JSON
        $order->user_id = auth()->user()->id;
        $order->save();


        // Очищаем корзину после оформления заказа
        session()->forget('cart');

        return redirect()->route('cart.index')->with('success', 'Order placed successfully!');
    }
    public function order(Request $request)
    {
        $orders = Order::all();
        $tags = Tag::all();
        return view("orders.index", compact("orders", "tags"));
    }
    }
