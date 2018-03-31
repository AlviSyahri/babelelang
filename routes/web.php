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


Route::get('/home','System\HomeViewController@HomeView');
//User
Route::get('/registration','User\RegisterController@registerview');
Route::get('/login','User\LoginController@loginview');

Route::post('/registration','User\RegisterController@doRegister');
Route::post('/login','User\LoginController@doLogin');
Route::get('/logout','User\LogoutController@doLogout');

//Product
Route::get('/viewProduct','Product\ProductViewController@ViewProduct');
Route::get('/addProduct','Product\CreateProductController@ViewCreateProduct');
Route::post('/productcreate','Product\CreateProductController@CreateProduct');

//Admin
Route::get('/admin','Admin\ViewAdminController@AdminView');
Route::get('/admin/login','Admin\LoginAdminController@LoginView');
Route::get('/admin/user_list','Admin\UserListAdminController@UserListView');

