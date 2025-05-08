<?php

namespace App\Http\Controllers;

use App\Models\Director;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function allindex()
    {
        $news = News::all();// Получаем новости, сортируя по дате
        return view('news.index', compact('news'));
    }
    public function index()
{
    $news = News::latest()->take(3)->get(); // Получаем последние 3 новости
    return view('welcome', compact('news'));
}

    public function create()
    {
        $directortext = Director::paginate(10);

        return view('orders.index', compact("directortext"));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Сохраняем изображение
        $imagePath = $request->file('image')->store('news_images', 'public');

        News::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'image' => $imagePath,
        ]);

        return redirect()->route('news.index')->with('success', 'Новость добавлена!');
    }

    // Показываем одну новость
    public function show(News $news, $id)
    {
        $news = News::find($id);
        return view('news.show', compact('news'));
    }
}
