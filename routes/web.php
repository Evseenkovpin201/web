<?php

use App\Models\Catalog;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $catalog = Catalog::get();
    return view('catalog', ['catalog' => $catalog]);
})->name('catalog');

Route::get('/filter', function () {
    $catalog = Catalog::get();
    $manufacturers = $catalog->pluck('manufacturer')->unique();
    return view('filter', ['catalog' => $catalog, 'manufacturers' => $manufacturers]);
})->name('filter');

Route::get('/catalog/{catalog}', function (Catalog $catalog) {
    abort_if(
        !$catalog->exists(),
        404
    );

    return view('show', ['item' => $catalog]);
})->name('catalog.show');
