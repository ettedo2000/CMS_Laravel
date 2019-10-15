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

//Route::resource('posts', 'PostController');
Route::get('/contact', 'PostController@contact');
Route::get('post/{id}/{name}', 'PostController@show_post');

/*Route::get('/post/{id}', 'PostController@index');

Route::get('/', function () {
	return view('welcome');
});

Route::get('/post/{id}', function ($id) {
	return 'this is ID '.$id;

});

Route::get('admin/post/example', array('as'=>'admin.home', function () {
	$url = route('admin.home');

	return 'this is '. $url;

}));*/