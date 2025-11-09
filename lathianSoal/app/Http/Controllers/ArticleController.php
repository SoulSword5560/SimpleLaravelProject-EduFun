<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //
    public function index(){
        $articles = Article::latest()->take(2)->get();
        return view('home')->with("articles", $articles);
    }

    public function showByCategory($category)
    {
        $articles = Article::where('category', $category)
                        ->latest()
                        ->get(); 

        return view('category', [
            'articles' => $articles,
            'category' => $category 
        ]);
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('article', ['article' => $article]);
    }
    public function popular()
    {
        $popular_ids = Article::latest()->take(6)->pluck('id');

        $articles = Article::whereIn('id', $popular_ids)
                           ->latest() 
                           ->paginate(3);
        return view('popular', ['articles' => $articles]);
    }
}
