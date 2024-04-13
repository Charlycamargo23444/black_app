<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\ArticleCollection;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): ArticleCollection
    {
        return ArticleCollection::make(Article::all());
    }

    public function create()
    {
        return response(null, 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    

    /**
     * Display the specified resource.
     */
    public function show(Article $article): ArticleResource
    {
        //return $article;
        //return response()->json([
        //    'data' => 
        //    [
        //        'type' => 'article',
        //        'id' => (string)$article->getRouteKey(),
        //        'attributes' => [
        //            'title' => $article->title,
        //            'slug' => $article->slug,
        //            'content' => $article->content,
        //        ],
        //        'link' => [
        //            'self' => route('api.articles.show', $article)
        //        ]
        //    ]
        //]);
        return ArticleResource::make($article);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
