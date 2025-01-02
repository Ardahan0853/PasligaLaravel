<?php

use App\Http\Controllers\PasligaController;
use App\Http\Controllers\TakimController;
use Illuminate\Support\Facades\Route;


Route::controller(PasligaController::class)
    ->name('izmir.')
    ->prefix('/')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('haberler', 'haberler')->name('haberler');
        Route::get('puan', 'puan')->name('puan');
        Route::get('kayit', 'kayit')->name('kayit');
        Route::post('register', 'register')->name('register');
        Route::post('logout', 'logout')->name('logout');
        Route::post('login', 'login')->name('login');
        Route::get('login', 'getLogin')->name('getLogin');
    });

Route::controller(TakimController::class)
    ->name('takim.')
    ->prefix('takim')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::post('create/takim', 'createTakim')->name('createTakim');
        Route::get('edit/{takim}', 'edit')->name('edit');
        Route::put('update/{takim}', 'update')->name('update');
        Route::delete('destroy/{takim}', 'destroy')->name('destroy');
        Route::get('show/{takim}', 'show')->name('show');
    });


Route::get('/', function () {
    return view('pasliga.izmir.index');
})->name('izmir.index');
