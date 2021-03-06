<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts', 'HomeController@index')->name('posts');
Route::get('/profile', 'ShowProfile')->name('profile-settings');
Route::get('/post-list', 'PostList')->name('post-list');
Route::get('detail',function(){
    return view('detail');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
