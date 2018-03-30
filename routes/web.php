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
    return view('index');
});

//	User
Route::get('registration', function () {
    return view('user.registration');
});

Route::get('product', function () {
    return view('jualan.product');
});

Route::get('login', function () {
    return view('user.login');
});
Route::post('/registration','User\RegisterController@doRegister');
Route::post('/login','User\RegisterController@doLogin');
Route::get('/logout','User\LogoutController@doLogout');

//Product
Route::get('/productcreate','Product\CreateProductController@ViewCreateProduct');
Route::post('/productcreate','Product\CreateProductController@CreateProduct');

//	Admin
Route::get('admin/', function () {
    return view('admin.index');
});

Route::get('admin/login', function () {
    return view('admin.login');
});

Route::get('admin/user_list', function () {
    return view('admin.user_list');
});

