<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogAPI;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/','blog@blog');
// Route::get('/newPost','NewpostController@createPostForm');
// Route::get('/{post}','blog@read');
// Route::post('/newPost','NewpostController@createPost')->name('create');
// Route::get('/{post}/edit','NewpostController@edit')->name('edit');
// Route::put('/{post}/update','NewpostController@update')->name('update');
// Route::delete('/{post}/delete','NewpostController@delete')->name('delete');
// Route::get('/blog', [App\Http\Controllers\Blog::class, 'Blog'])->name('blog');

Route::get('/api', 'BlogAPI@index')->name('index');
Route::post('/api/create', 'BlogAPI@create')->name('create');
Route::get('/api/{post}', 'BlogAPI@show')->name('show');
Route::put('/api/{post}/update', 'BlogAPI@update')->name('update');
// Route::resource('api', BlogAPI::class);