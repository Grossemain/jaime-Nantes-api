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
            'image' => 'required',
            'adresse' => 'required',
            'hours' => 'required|max:100',
            'price' => 'required|max:100',
            'slug' => 'required|max:50',
            // 'web_site' => 'required',
            'user_id' => 'required',
            'category_id'=>'required|max:50'
        ]);

        $filename = "";
        if ($request->hasFile('image')) {
            // On récupère le nom du fichier avec son extension, résultat $filenameWithExt : "jeanmiche.jpg"
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filenameWithExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // On récupère l'extension du fichier, résultat $extension : ".jpg"
            $extension = $request->file('image')->getClientOriginalExtension();
            // On créer un nouveau fichier avec le nom + une date + l'extension, résultat $filename :"jeanmiche_20220422.jpg"
            $filename = $filenameWithExt . '_' . time() . '.' . $extension;
            // On enregistre le fichier à la racine /storage/app/public/uploads, ici la méthode storeAs défini déjà le chemin/storage/app
            $request->file('image')->storeAs('public/uploads', $filename);
        } else {
            $filename = Null;
        }
        $place = Place::create(array_merge($request->all(), ['image' => $filename]));

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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'adresse' => 'required',
            'hours' => 'required|max:100',
            'price' => 'required|max:100',
            'slug' => 'required|max:50',
            'web_site' => 'required',
            'user_id' => 'required',
            'category_id'=>'required|max:50'
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
        $place->delete();
        return response()->json([
            'status' => 'Supprimer avec succès'
        ]);
    }
}
