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

Route::get('/', 'PagesController@home')->name('pages.home');
Route::get('docs', 'PagesController@docs')->name('pages.docs');

Route::get('posts/search', 'PostsController@search')->name('posts.search');
Route::get('posts/{post}/{slug?}', 'PostsController@show')->name('posts.show');
Route::get('category/{category}/{slug?}', 'CategoriesController@index')->name('categories.index');

Route::get('pages/score', 'PagesController@score')->name('pages.score');

Route::post('contact', 'ContactController@send')->name('contact.send');
Route::get('contact', 'ContactController@show')->name('contact.show');

Route::get('email', 'PagesController@email');
Route::post('email', 'ContactController@send');

Route::group(['prefix' => 'adminLHX'], function () {
    Voyager::routes();
});
