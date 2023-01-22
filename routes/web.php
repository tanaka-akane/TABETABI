<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\MenuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //検索
    Route::get('/prefectures/{prefecture}/cities', [SearchController::class, 'city'])->name('city');
    Route::get('/prefectures', [SearchController::class, 'prefecture'])->name('prefecture');
    Route::get('/prefectures/{city}/local-foods', [SearchController::class, 'localFood'])->name('localFood');
    Route::get('/prefectures/{local_food}/stores', [SearchController::class, 'store'])->name('search.store');
    //店基本情報登録・編集・削除
    Route::get('/store/prefecture', [StoreController::class, 'prefecture']);
    Route::get('/store/prefecture/{prefecture}/city', [StoreController::class, 'city']);
    Route::get('/store/prefecture/city/{city}/local-food', [StoreController::class, 'localFood']);
    Route::get('/store/prefecture/city/local-food/{local_food}/create', [StoreController::class, 'create']);
    Route::post('/store/register', [StoreController::class, 'register']);
    Route::get('/store/{store}', [StoreController::class, 'show']);
    Route::get('/store/{store}/edit', [StoreController::class, 'edit']);
    Route::put('/store/{store}', [StoreController::class, 'update']);
    Route::delete('/store/{store}', [StoreController::class,'delete']);
    //メニューの登録・編集・削除
    Route::get('/menu/create/{store}', [MenuController::class, 'create']);
    Route::post('/menu/register', [MenuController::class, 'register']);
    Route::get('/menu/{menu}/edit', [MenuController::class, 'edit']);
    Route::put('/menu/{menu}', [MenuController::class, 'update']);
    Route::delete('/menu/{menu}', [MenuController::class,'delete']);
});

require __DIR__.'/auth.php';

