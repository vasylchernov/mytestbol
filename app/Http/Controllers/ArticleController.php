<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\Notification;

class ArticleController extends Controller
{
    public function showFiles()
    {
        $data = Article::last();
        $arr = $data->getMedia()->toArray();
        $url = '';

        if (array_key_exists(0, $arr)) {
            $url = $data->getMedia()[0]->getUrl();
        } else {
            $url = 'nothing to show';
        }

        return view('article.create', compact('url'));
    }

    public function saveFile()
    {
        $article = Article::create();

        $article
            ->addMediaFromRequest('image')
            ->toMediaCollection();

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
