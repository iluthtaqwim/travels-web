<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')
    ->name('home');
Route::get('/detail/{id}', 'DetailController@index')
    ->name('detail');
Route::get('/about', 'AboutController@index')
    ->name('about');
Route::get('/contact', 'ContactController@index')
    ->name('contact');
Route::get('/search', 'HomeController@search')->name('search');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth', 'admin')
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

        Route::resource('travel-package', 'TravelPackageController');
        Route::resource('about', 'AboutController');
        Route::resource('testimoni', 'TestimoniController');
        Route::resource('kavling', 'KavlingController');
        Route::post('desa', 'KavlingController@desa')->name('desa');
    });

Auth::routes([
    'verify' => true,
]);
