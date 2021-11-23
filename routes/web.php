<?php

use Illuminate\Support\Facades\Route;
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

} );