<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TermCategory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;


class TermCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // On récupère tous les utilisateurs
        $termCategories = TermCategory::all();
        // On retourne les informations des utilisateurs en JSON
        return response()->json($termCategories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'term_category_name' => 'required|max:150',
            'term_category_description' => 'required',

        ]);
        $termCategory = TermCategory::create($request->all());
        return response()->json([
            'status' => 'Success',
            'data' => $termCategory,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(TermCategory $termCategory)
    {
        return response()->json($termCategory);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TermCategory $termCategory)
    {
        $request->validate([
            'term_category_name' => 'required|max:150',
            'term_category_description' => 'required',

        ]);
        $termCategory->update($request->all());
        return response()->json([
            'status' => 'Mise à jour avec succès'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TermCategory $termCategory)
    {
        return response()->json([
            'status' => 'Supprimer avec succès'
        ]);
    }
}
