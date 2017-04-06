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
    return redirect('/posts');
});

Route::get('/posts', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show');


//Backend
Route::get('backend', function() {
    return redirect('backend/posts');
});

Route::group([
    'namespace' => 'Backend',
    'middleware' => 'auth',
    'prefix' => 'backend'
], function() {
    Route::resource('posts', 'PostController');
    Route::resource('tags', 'TagController');
    Route::get('upload', 'UploadController@index');
});


Auth::routes();

