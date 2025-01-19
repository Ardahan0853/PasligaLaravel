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
        Route::post('haberler', 'createHaber')->name('createHaber');
        Route::get('puan', 'puan')->name('puan');
        Route::get('kayit', 'kayit')->name('kayit');
        Route::post('register', 'register')->name('register');
        Route::post('logout', 'logout')->name('logout');
        Route::post('login', 'login')->name('login');
        Route::get('uyeler', 'uyeler')->name('uyeler')->middleware('auth');
        Route::get('haber/{haber}', 'haberEdit')->name('haberEdit');
        Route::patch('haber/edit/{haber}', 'haberUpdate')->name('haberUpdate');
        Route::delete('haber/{haber}', 'haberDestroy')->name('haberDestroy');
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
        Route::get('edit/{takim:id}', 'edit')->name('edit');
        Route::put('update/{takim}', 'update')->name('update');
        Route::delete('destroy/{takim}', 'destroy')->name('destroy');
        Route::get('show/{takim}', 'show')->name('show');
        Route::get('oyuncu/edit/{takim}/{oyuncu}', 'editOyuncu')->name('editOyuncu');
        Route::patch('oyuncu/update/{takim}/{oyuncu}', 'updateOyuncu')->name('updateOyuncu');
        Route::delete('oyuncu/destroy/{oyuncu}', 'destroyOyuncu')->name('destroyOyuncu');
    });


Route::controller(izmirLigiController::class)
    ->name('izmir-ligi.')
    ->prefix('izmir-ligi')
    ->group(function(){
       Route::get('gol-krali', 'golKrali')->name('golKrali');
       Route::get('gecmis-maclar', 'gecmisMaclar')->name('gecmisMaclar');
       Route::post('gecmis-maclar/create', 'createGecmisMaclar')->name('createGecmisMaclar');
       Route::get('kap', 'kap')->name('kap');
       Route::post('kap', 'kapCreate')->name('kapCreate');


    });

