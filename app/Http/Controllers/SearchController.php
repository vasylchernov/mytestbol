<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\SearchResult;
use Meilisearch\Client;

class SearchController extends Controller
{
    public function searchResult(Request $request) {
//        $client = new Client('http://127.0.0.1:7700', 'your_meilisearch_api_key');
//        $client->createIndex('dg_posts', ['primaryKey' => 'id']);
//        $indexes = $client->getAllIndexes();
//        dd($indexes);

        $query = $request->input('query');

        // Search for posts using Laravel Scout
        $posts = Post::search($query)->get();

//        dd([$query, $posts]);
        // Store each result in the search_results table
        foreach ($posts as $post) {
            SearchResult::create([
                'query' => $query,
                'post_id' => $post->id,
            ]);
        }

        return view('test.search_results', compact('posts', 'query'));
    }

    public function searchForm() { return view('test.search'); }
}
