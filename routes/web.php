<?php

use App\Http\Controllers\PasligaController;
use App\Http\Controllers\TakimController;
use App\Http\Controllers\izmirLigiController;
use Illuminate\Support\Facades\Route;

Route::get('login', [PasligaController::class, 'getLogin'])->name('login');

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
        Route::get('uyeler', 'uyeler')->name('uyeler')->middleware('auth');

    });

Route::controller(TakimController::class)
    ->name('takim.')
    ->prefix('takim')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('kadro/{takim}','kadroIndex')->name('kadroIndex');
        Route::post('create/takim', 'createTakim')->name('createTakim');
        Route::get('genel/{takim}', 'takimGenel')->name('takimGenel');
        Route::post('create/kadro/{kadro}', 'kadroMemberCreate')->name('kadroMemberCreate');
        Route::post('create/{takim}', 'createHaber')->name('createHaber');
        Route::get('edit/{takim:id}', 'edit')->name('edit')->middleware('auth');
        Route::put('update/{takim}', 'update')->name('update');
        Route::delete('destroy/{takim}', 'destroy')->name('destroy');
        Route::get('show/{takim}', 'show')->name('show');
    });


Route::controller(izmirLigiController::class)
    ->name('izmir-ligi.')
    ->prefix('izmir-ligi')
    ->group(function(){
       Route::get('gol-krali', 'golKrali')->name('golKrali');
    });

Route::get('/', function () {
    return view('pasliga.izmir.index');
})->name('izmir.index');
