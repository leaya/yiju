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

Route::get('/', 'PagesController@docs');
Route::get('docs', 'PagesController@docs');

Route::get('posts/{post}/{slug?}', 'PostsController@show')->name('posts.show');
Route::get('category/{category}/{slug?}', 'CategoriesController@index')->name('categories.index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});