<?php

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



Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/lang', 'PagesController@proLang');
Route::get('/project', 'PagesController@project');
Route::get('/motaba', 'PagesController@motaba')->name('motabap');
Route::get('/motabap', 'PagesController@motabap')->name('motaba');
Route::get('/motabap/{id}', 'PagesController@showmo')->name('motaba.show');
Route::get('/about-us', 'PagesController@aboutus');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::resource('posts', 'PostController');

Auth::routes();


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('send', 'MailController@index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
