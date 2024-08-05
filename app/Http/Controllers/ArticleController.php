<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\Notification;

class ArticleController extends Controller
{
    public function saveFile()
    {
        $article = Article::create();

        $article
            ->addMediaFromRequest('image')
            ->toMediaCollection();

        Notification::send();

        return view('article.create');
    }
    public function getForm()
    {
//        return 'create';
        return view('article.create');
    }

    public function store()
    {
        /** @var Article $article */
        $article = Article::create();

        $article
            ->addMediaFromRequest('image')
            ->toMediaCollection();

        return back();
    }

    public static function test() { return 'test_function'; }
}
