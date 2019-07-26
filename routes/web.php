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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// View Public Images

Route::get('/home','ImageController@index');
Route::get('/images/upload','ImageController@viewupload');
Route::post('images/add',[
	'as' => 'images.add',
	'uses' => 'ImageController@store'

]);
Route::get('/images/view','ImageController@view');
// Route::get('/images/delete{{}}','ImageController@delete');


// Multiple Image Upload


Route::get('image-view','MultipleimageController@index');
Route::post('image-submit','MultipleimageController@store');
