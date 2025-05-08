<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Director;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DirectorController extends Controller
{
    public function index()
    {
        $directortext = Director::all();
        $applications = Application::all();
        return view("admin.index", compact("directortext", "applications"));
    }
    public function write(){
        return view("admin.write");
    }
    public function userform(){
        return view("admin.user");
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            "text"=>"required|text",
        ]);
        Director::create($data);
        return redirect()->back();
    }
    public function storeuser(Request $request)
    {
        $data = $request->validate([
            "text"=>"required|string",
            "name"=>"string",
            "number"=>"string",
        ]);
        Director::create($data);
        return redirect()->back();
    }
    public function show(Request $request)
    {

    }
    public function logout()
    {
        Auth::guard("admin")->logout();
        return redirect()->back();
    }
}
