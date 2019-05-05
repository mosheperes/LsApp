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

// Route::get('/home', function () {
//     return view('pages.index');
// });


Route::get('/home', 'pagesController@index');

Route::get('/about', 'pagesController@about');
Route::get('/services', 'pagesController@services');
Route::resource('posts','PostsController');
/*
Route::get('/users/{id}/{name}', function ($id,$name) {
    return "this is user " . $id . " with a name of " . $name;
});

Route::get('/about', function () {
    return view ('pages.about');
});
*/


