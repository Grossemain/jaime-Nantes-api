<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $places = Place::all();
        return response()->json($places);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:150',
            'description' => 'required',
            'images' => 'required',
            'adresse' => 'required',
            'hours' => 'required|max:100',
            'price' => 'required|max:100',
            'slug' => 'required|max:50',
            'web_site' => 'required|max:50',
            'user_id' => 'required',
        ]);

        $place = Place::create($request->all());
        return response()->json([
            'status' => 'Success',
            'data' => $place,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Place $place)
    {
        return response()->json($place);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Place $place)
    {
        $request->validate([
            'name' => 'required|max:150',
            'description' => 'required',
            'images' => 'required',
            'adresse' => 'required',
            'hours' => 'required|max:100',
            'price' => 'required|max:100',
            'slug' => 'required|max:50',
            'web_site' => 'required|max:50',
            'user_id' => 'required',
        ]);

        $place->update($request->all());
        return response()->json([
            'status' => 'Mise à jour avec succès'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Place $place)
    {
        return response()->json([
            'status' => 'Supprimer avec succès'
        ]);
    }
}
