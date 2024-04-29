<?php
use App\Http\controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/hello', function () {
    return "Hello World!";
});



Route::get('/users', [UserController::class, 'getAllUsers']);
Route::get('/users/{id}', [UserController::class, 'getUsers']);
Route::post("/utilisateur/inscription", [UserController:: class, "inscription"]);
Route::post("/utilisateur/connexion", [UserController:: class, "connexion"]);
// modifier un utilisateur
Route::put('/users/{id}', [UserController::class, 'updateUser']);
// Route::post("/utilisateur/compte/deconnexion", [UserController:: class, "deconnexion"]);
Route::post('/utilisateur/deconnexion', [UserController::class, 'deconnexion']);
// suppression d'un compte utilisateur
Route::post('/utlisateur/suppression', [UserController::class, 'suppression']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::group(["middleware" => ["auth:sanctum"]], function () {
}) ;



use App\Http\Controllers\ShopController;

Route::get('/shops', [ShopController::class, 'index']);
Route::post('/shops', [ShopController::class, 'store']);
Route::get('/shops/{id}', [ShopController::class, 'show']);
Route::put('/shops/{id}', [ShopController::class, 'update']);
Route::delete('/shops/{id}', [ShopController::class, 'destroy']);


use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);


use App\Http\Controllers\CategoryController;

Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);
Route::put('/categories/{id}', [CategoryController::class, 'update']);
Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);


use App\Http\Controllers\MessageController;

Route::get('/messages', [MessageController::class, 'index']);
Route::post('/messages', [MessageController::class, 'store']);
Route::get('/messages/{message}', [MessageController::class, 'show']);
Route::delete('/messages/{message}', [MessageController::class, 'destroy']);

