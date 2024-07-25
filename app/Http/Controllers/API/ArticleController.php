<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return response()->json($articles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'h1_title' => 'required|max:100',
            'content' => 'required',
            'img' => 'required',
            'slug' => 'required|max:50',
        ]);
        $article = Article::create($request->all());
        return response()->json([
            'status' => 'Success',
            'data' => $article,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return response()->json($article);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|max:100',
            'h1_title' => 'required|max:100',
            'content' => 'required',
            'img' => 'required',
            'slug' => 'required|max:50',
        ]);
        $article->update($request->all());
        return response()->json([
            'status' => 'Mise à jour avec succès'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        return response()->json([
            'status' => 'Supprimer avec succès'
        ]);
    }
}
