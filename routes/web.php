<?php

use App\Http\Controllers\Produksi\Produksi;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', [Produksi::class, 'index'])
    ->name('produksiList');
Route::post('/datatable', [Produksi::class, 'datatable'])
    ->name('produksiDatatable');

Route::get('/create', [Produksi::class, 'create'])
    ->name('ProduksiCreate');
Route::post('/insert', [Produksi::class, 'insert'])
    ->name('ProduksiInsert');

Route::get('/edit/{id}', [Produksi::class, 'edit'])
    ->name('produksiEdit');
Route::post('/update/{id}', [Produksi::class, 'update'])
    ->name('ProduksiUpdate');

Route::delete('/delete/{id}', [Produksi::class, 'delete'])
    ->name('ProduksiDelete');

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    //Artisan::call('route:cache);
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cache is cleared";
});
