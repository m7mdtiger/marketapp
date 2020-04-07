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

// Route::get('/', function () {
//     return view('welcome');
// });
//
// Route::get('/shop/add', function () {
//     return 'Add shop';
// });
//
// Route::get('/shop/{id}/{name}', function ($id, $name) {
//     return 'This is user ' . $id . 'and name is ' . $name;
// });
//
// // Using Controllers
//
Route::get('shops/index', 'ShopsController@index');
// Route::get('shops/view', 'ShopsController@view');
// Route::post('shops/edit', 'ShopsController@edit');
// Route::post('shops/add', 'ShopsController@add');
//
// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'role:admin'], function() {
   Route::get('/shops/edit', function() {
      return 'Welcome Admin to the edit page';
   });
});
