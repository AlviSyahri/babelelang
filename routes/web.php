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
Route::get('/','System\HomeViewController@HomeView');
Route::get('/contact','System\ContactViewController@viewcontact');

//System-About
Route::get('/about','System\AboutViewController@AboutView');

//User
Route::get('/register','User\RegisterController@registerview');
Route::post('/register','User\RegisterController@doRegister');
Route::get('/login','User\LoginController@loginview');
Route::post('/login','User\LoginController@doLogin');
Route::get('/logout','User\LogoutController@doLogout');
Route::get('/updateprofile','User\UpdateController@updateuserview');
Route::post('/updateprofile','User\UpdateController@updateuser');

//Product
// Route::get('/viewProduct','Product\ProductViewController@ViewProduct');
Route::get('/product', function (){
	return view('product.product');
});
Route::get('/addProduct','Product\CreateProductController@ViewCreateProduct');
Route::post('/productcreate','Product\CreateProductController@CreateProduct');

//Admin
Route::get('/admin','Admin\ViewAdminController@AdminHomeView');
Route::get('/admin/login','Admin\ViewAdminController@LoginView');
//Admin-User
Route::get('/admin/user/all','Admin\ViewAdminController@UserListView');
//Admin-Category
Route::get('/admin/category/all','Admin\CategoryProduct\CategoryAdminController@CategoryListView');
Route::get('/admin/category/add_category','Admin\CategoryProduct\CreateCategoryProductController@AddCategoryView');
Route::post('/admin/category/add_category','Admin\CategoryProduct\CreateCategoryProductController@AddCategory');
Route::get('/admin/category/add_sub_category','Admin\CategoryProduct\CategoryAdminController@AddSubCategoryView');

