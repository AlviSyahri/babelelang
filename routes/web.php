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

//System
Route::get('/home','System\HomeViewController@HomeView');
//System-About
Route::get('/about','System\AboutViewController@AboutView');

//User
Route::get('/registration','User\RegisterController@registerview');
Route::post('/registration','User\RegisterController@doRegister');
Route::get('/login','User\LoginController@loginview');
Route::post('/login','User\LoginController@doLogin');
Route::get('/logout','User\LogoutController@doLogout');
Route::get('/updateprofile','User\UpdateController@updateuserview');
Route::post('/updateprofile','User\UpdateController@updateuser');

//Product
Route::get('/viewProduct','Product\ProductViewController@ViewProduct');
Route::get('/addProduct','Product\CreateProductController@ViewCreateProduct');
Route::post('/productcreate','Product\CreateProductController@CreateProduct');

//Admin
Route::get('/admin','Admin\ViewAdminController@AdminView');
Route::get('/admin/login','Admin\LoginAdminController@LoginView');
Route::get('/admin/user_list','Admin\UserListAdminController@UserListView');
//Admin-Category
Route::get('/admin/category/all','Admin\CategoryAdminController@CategoryListView');
Route::get('/admin/category/add_category','Admin\CategoryAdminController@AddCategoryView');
Route::get('/admin/category/add_sub_category','Admin\CategoryAdminController@AddSubCategoryView');

