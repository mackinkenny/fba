<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $articles = News::all()->reverse();
        return view('articles.list', ['articles' => $articles]);
    }

    public function show(Request $request)
    {
        $article = News::find($request->v);

        return view('articles.show', ['article' => $article]);
    }
}
