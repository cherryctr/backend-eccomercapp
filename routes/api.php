<?php
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// API PRODUK
Route::get('/product', [ProdukController::class, 'produkall'])->name('api.produk');Route::get('/category', [CategoryController::class, 'categoryAll'])->name('api.produk');
// Route::middleware('api')->group(function () {
//     // Routes for API endpoints go here

// });
// Route::apiResource('category', CategoryController::class);
// Route::apiResource('product', ProdukController::class);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);