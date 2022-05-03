<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/** @noinspection PhpUnused */
class ArticleController extends Controller
{
    public function index(): Collection
    {
        return Article::all();
    }
    public function show(Article $article): Article
    {
        return $article;
    }
    public function store(Request $request): JsonResponse
    {
         $article = Article::create($request->all());

         return response()->json($article, 201);
    }
    public function update(Request $request, Article $article): JsonResponse
    {
        $article->update($request->all());
        return response()->json($article);
    }
    public function delete(Article $article): JsonResponse
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
