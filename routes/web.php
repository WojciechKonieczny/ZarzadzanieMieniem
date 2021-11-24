<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ModelOrNameController;
use App\Http\Controllers\ManufacturerController;

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

// home to routing odwrotny do strony glownej
Route::get('/', function () {
    return view('welcome');
}) -> name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



// grupujemy routing - uzytkownik musi byc zalogowany i zweryfikowany
Route::middleware( ['auth', 'verified'] )->group( function() {

    // routing dla producentow
    Route::name('manufacturers.')->prefix('manufacturers')->group( function() {
         // wchodzac na /manufacturers, zostanie wywolany ten routing; osoba musi miec uprawnienia do niego (middleware)
        Route::get('', [ManufacturerController::class, 'index'])->name('index')->middleware(['permission:manufacturers.index']);
    });

    // routing dla modeli
    Route::name('models.')->prefix('models')->group( function() {
        Route::get('', [ModelOrNameController::class, 'index'])->name('index')->middleware(['permission:models.index']);
    });

     // routing dla kategorii
     Route::name('categories.')->prefix('categories')->group( function() {
        Route::get('', [CategoryController::class, 'index'])->name('index')->middleware(['permission:categories.index']);
    });

    // routing dla przedmiotów
    Route::name('items.')->prefix('items')->group( function() {
        Route::get('', [ItemController::class, 'index'])->name('index')->middleware(['permission:items.index']);
    });

    // routing dla użytkowników
    Route::name('users.')->prefix('users')->group( function() {
        Route::get('', [UserController::class, 'index'])->name('index')->middleware(['permission:users.index']);
    });

} );