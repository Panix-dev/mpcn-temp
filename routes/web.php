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

/* ----------------- Page Related Routes ----------------- */
Route::post('newsletter', array('uses' => 'PagesController@newsletterSubmit', 'as' => 'pages.newsletterSubmit'));
Route::post('contact', array('uses' => 'PagesController@contactSubmit', 'as' => 'pages.contactSubmit'));
Route::get('contact', array('uses' => 'PagesController@contact', 'as' => 'pages.contact'));
Route::get('pricing', array('uses' => 'PagesController@pricing', 'as' => 'pages.pricing'));
Route::get('productions', array('uses' => 'PagesController@productions', 'as' => 'pages.productions'));
Route::get('about', array('uses' => 'PagesController@about', 'as' => 'pages.about'));

/* ----------------- Post Related Routes ----------------- */
Route::get('posts', array('uses' => 'PostController@index', 'as' => 'posts.index'));
Route::get('posts/{slug}', array('uses' => 'PostController@getSingle', 'as' => 'posts.single'))->where('slug', '[\w\d\-\_]+');
Route::get('posts/search', array('uses' => 'PagesController@searchDisplay', 'as' => 'posts.search'));
Route::post('posts/search', array('uses' => 'PostController@searchPosts', 'as' => 'posts.search_form'));
Route::get('category/{slug}', array('uses' => 'PostController@showCategory', 'as' => 'posts.categories'))->where('slug', '[\w\d\-\_]+');

Route::get('/', array('uses' => 'PagesController@home', 'as' => 'welcome'));

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

/* ----------------- CMS Pages Routes ----------------- */
Route::get('{slug}', array('uses' => 'PagesController@showPage', 'as' => 'pages.show'))->where('slug', '[\w\d\-\_]+');