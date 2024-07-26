<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|max:150',
            'category_description' => 'required',
            'category_slug' => 'required|max:150',
            'term_category_id' => 'required',

        ]);
        $category = Category::create($request->all());
        return response()->json([
            'status' => 'Success',
            'data' => $category,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return response()->json($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category_name' => 'required|max:150',
            'category_description' => 'required',
            'category_slug' => 'required|max:150',
            'term_category_id' => 'required',

        ]);

        $category->update($request->all());
        return response()->json([
            'status' => 'Mise à jour avec succès'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json([
            'status' => 'Supprimer avec succès'
        ]);
    }
}
