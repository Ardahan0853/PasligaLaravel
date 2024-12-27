<?php

use App\Http\Controllers\PasligaController;
use Illuminate\Support\Facades\Route;


Route::controller(PasligaController::class)
    ->name('izmir.')
    ->prefix('/')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('haberler', 'haberler')->name('haberler');
        Route::get('puan', 'puan')->name('puan');
});

Route::get('/', function () {
    return view('pasliga.izmir.index');
})->name('izmir.index');
