<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InventoryController;
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

        // odpowiedzialny za wyswietlanie formularza dodawania
        Route::get('create', [ManufacturerController::class, 'create'])->name('create')->middleware(['permission:manufacturers.store']);

        // odpowiedzialny za dodawanie nowych wierszy do bazy
        Route::post('', [ManufacturerController::class, 'store'])->name('store')->middleware(['permission:manufacturers.store']);

        // odpowiedzialny za wyswietlanie formularza od edycji
        Route::get('{manufacturer}/edit', [ManufacturerController::class, 'edit'])->where('manufacturer', '[0-9]+')->name('edit')->middleware(['permission:manufacturers.store']);

        // odpowiedzialny za przesylanie zedytowanego formularza do bazy
        Route::patch('{manufacturer}/edit', [ManufacturerController::class, 'update'])->where('manufacturer', '[0-9]+')->name('update')->middleware(['permission:manufacturers.store']);

        //usuwanie
        Route::delete('{manufacturer}', [ManufacturerController::class, 'destroy'])->where('manufacturer', '[0-9]+')->name('destroy')->middleware(['permission:manufacturers.destroy']);

        // przywracanie
        Route::put('{id}/restore', [ManufacturerController::class, 'restore'])->where('id', '[0-9]+')->name('restore')->middleware(['permission:manufacturers.destroy']);
    });

    // routing dla modeli
    Route::name('models.')->prefix('models')->group( function() {
        Route::get('', [ModelOrNameController::class, 'index'])->name('index')->middleware(['permission:models.index']);

        // odpowiedzialny za wyswietlanie formularza dodawania
        Route::get('create', [ModelOrNameController::class, 'create'])->name('create')->middleware(['permission:models.store']);

        // odpowiedzialny za dodawanie nowych wierszy do bazy
        Route::post('', [ModelOrNameController::class, 'store'])->name('store')->middleware(['permission:models.store']);

        // odpowiedzialny za wyswietlanie formularza od edycji
        Route::get('{model_or_name}/edit', [ModelOrNameController::class, 'edit'])->where('model_or_name', '[0-9]+')->name('edit')->middleware(['permission:models.store']);

        // odpowiedzialny za przesylanie zedytowanego formularza do bazy
        Route::patch('{model_or_name}/edit', [ModelOrNameController::class, 'update'])->where('model_or_name', '[0-9]+')->name('update')->middleware(['permission:models.store']);

         //usuwanie
         Route::delete('{model_or_name}', [ModelOrNameController::class, 'destroy'])->where('model_or_name', '[0-9]+')->name('destroy')->middleware(['permission:models.destroy']);

         // przywracanie
         Route::put('{id}/restore', [ModelOrNameController::class, 'restore'])->where('id', '[0-9]+')->name('restore')->middleware(['permission:models.destroy']);
    });

     // routing dla kategorii
     Route::name('categories.')->prefix('categories')->group( function() {
        Route::get('', [CategoryController::class, 'index'])->name('index')->middleware(['permission:categories.index']);

        // odpowiedzialny za wyswietlanie formularza dodawania
        Route::get('create', [CategoryController::class, 'create'])->name('create')->middleware(['permission:categories.store']);

        // odpowiedzialny za dodawanie nowych wierszy do bazy
        Route::post('', [CategoryController::class, 'store'])->name('store')->middleware(['permission:categories.store']);

        // odpowiedzialny za wyswietlanie formularza od edycji
        Route::get('{category}/edit', [CategoryController::class, 'edit'])->where('category', '[0-9]+')->name('edit')->middleware(['permission:categories.store']);

        // odpowiedzialny za przesylanie zedytowanego formularza do bazy
        Route::patch('{category}/edit', [CategoryController::class, 'update'])->where('category', '[0-9]+')->name('update')->middleware(['permission:categories.store']);

         //usuwanie
         Route::delete('{category}', [CategoryController::class, 'destroy'])->where('category', '[0-9]+')->name('destroy')->middleware(['permission:categories.destroy']);

         // przywracanie
         Route::put('{id}/restore', [CategoryController::class, 'restore'])->where('id', '[0-9]+')->name('restore')->middleware(['permission:categories.destroy']);
    });

    // routing dla przedmiot??w
    Route::name('items.')->prefix('items')->group( function() {
        Route::get('', [ItemController::class, 'index'])->name('index')->middleware(['permission:items.index']);

        // odpowiedzialny za wyswietlanie formularza dodawania
        Route::get('create', [ItemController::class, 'create'])->name('create')->middleware(['permission:items.store']);

        // odpowiedzialny za dodawanie nowych wierszy do bazy
        Route::post('', [ItemController::class, 'store'])->name('store')->middleware(['permission:items.store']);

         // odpowiedzialny za wyswietlanie formularza od edycji
         Route::get('{item}/edit', [ItemController::class, 'edit'])->where('item', '[0-9]+')->name('edit')->middleware(['permission:items.store']);

         // odpowiedzialny za przesylanie zedytowanego formularza do bazy
         Route::patch('{item}/edit', [ItemController::class, 'update'])->where('item', '[0-9]+')->name('update')->middleware(['permission:items.store']);

         //usuwanie
         Route::delete('{item}', [ItemController::class, 'destroy'])->where('item', '[0-9]+')->name('destroy')->middleware(['permission:items.destroy']);

         // przywracanie
         Route::put('{id}/restore', [ItemController::class, 'restore'])->where('id', '[0-9]+')->name('restore')->middleware(['permission:items.destroy']);

         // export
         Route::get('export', [ItemController::class, 'export'])->name('export')->middleware(['permission:items.index']);
    });

    // routing dla mienia
    Route::name('inventory.')->prefix('inventory')->group( function() {
        Route::get('', [InventoryController::class, 'index'])->name('index')->middleware(['permission:itemsUsers.index|itemsUsers.index_to_me']);

        // odpowiedzialny za wyswietlanie formularza dodawania
        Route::get('create', [InventoryController::class, 'create'])->name('create')->middleware(['permission:itemsUsers.store']);

        // odpowiedzialny za dodawanie nowych wierszy do bazy
        Route::post('', [InventoryController::class, 'store'])->name('store')->middleware(['permission:itemsUsers.store']);

        // odpowiedzialny za wyswietlanie formularza od edycji
        Route::get('{id}/edit', [InventoryController::class, 'edit'])->where('id', '[0-9]+')->name('edit')->middleware(['permission:itemsUsers.store']);

        // odpowiedzialny za przesylanie zedytowanego formularza do bazy
        Route::patch('{id}/edit', [InventoryController::class, 'update'])->where('id', '[0-9]+')->name('update')->middleware(['permission:itemsUsers.store']);

        //usuwanie
        Route::delete('{id}', [InventoryController::class, 'destroy'])->where('id', '[0-9]+')->name('destroy')->middleware(['permission:itemsUsers.destroy']);

        // export
        Route::get('export', [InventoryController::class, 'export'])->name('export')->middleware(['permission:itemsUsers.index']);
    });

    // routing dla u??ytkownik??w
    Route::name('users.')->prefix('users')->group( function() {
        Route::get('', [UserController::class, 'index'])->name('index')->middleware(['permission:users.index']);

                // odpowiedzialny za wyswietlanie formularza dodawania
        Route::get('create', [UserController::class, 'create'])->name('create')->middleware(['permission:users.store']);

        // odpowiedzialny za dodawanie nowych wierszy do bazy
        Route::post('', [UserController::class, 'store'])->name('store')->middleware(['permission:users.store']);

        // odpowiedzialny za wyswietlanie formularza od edycji
        Route::get('{user}/edit', [UserController::class, 'edit'])->where('user', '[0-9]+')->name('edit')->middleware(['permission:users.store']);

        // odpowiedzialny za przesylanie zedytowanego formularza do bazy
        Route::patch('{user}/edit', [UserController::class, 'update'])->where('user', '[0-9]+')->name('update')->middleware(['permission:users.store']);

        //usuwanie
        Route::delete('{user}', [UserController::class, 'destroy'])->where('user', '[0-9]+')->name('destroy')->middleware(['permission:users.destroy']);

        // przywracanie
        Route::put('{id}/restore', [UserController::class, 'restore'])->where('id', '[0-9]+')->name('restore')->middleware(['permission:users.destroy']);
    });

} );