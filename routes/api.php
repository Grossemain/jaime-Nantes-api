<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Http\Controllers\API\TermCategoryController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ArticleController;
use App\Http\Controllers\API\PlaceController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;

// Accessible à tous

// Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

//Seulement accessible via le JWT
Route::middleware('auth:api')->group(function() {
Route::get('/currentuser', [UserController::class, 'currentUser']);
Route::post('/logout', [AuthController::class, 'logout']);
});

//Routes vers Term Category

Route::get('/termcategories', [TermCategoryController::class, 'index'])->name('termCategories.index');
Route::get('/termcategories/{termCategory}', [TermCategoryController::class, 'show'])->name('termCategories.show');
Route::put('/termcategories/{termCategory}', [TermCategoryController::class, 'update'])->name('termCategories.update');
Route::post('/termcategories', [TermCategoryController::class, 'store'])->name('termCategories.store');
Route::delete('/termcategories/{termCategories}', [TermCategoryController::class, 'destroy'])->name('termCategories.destroy');

//Routes vers Category

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::delete('/categories/{categories}', [CategoryController::class, 'destroy'])->name('categories.destroy');

//Routes vers Articles

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::delete('/articles/{articles}', [ArticleController::class, 'destroy'])->name('articles.destroy');

//Routes vers Places

Route::get('/places', [PlaceController::class, 'index'])->name('places.index');
Route::get('/places/{place}', [PlaceController::class, 'show'])->name('places.show');
Route::put('/places/{place}', [PlaceController::class, 'update'])->name('places.update');
Route::post('/places', [PlaceController::class, 'store'])->name('places.store');
Route::delete('/places/{places}', [PlaceController::class, 'destroy'])->name('places.destroy');





