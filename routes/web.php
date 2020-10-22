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



Route::group(['prefix' => 'admin', 'namespace' => 'Backend'], function(){
	require_once('backend/home.php');
	require_once('backend/banner.php');
	require_once('backend/category.php');
	require_once('backend/product.php');
	require_once('backend/new.php');
	require_once('backend/user.php');
	require_once('backend/customer.php');
	require_once('backend/orders.php');
});

	Route::get('admin/login', 'Auth\AdminController@login')->name('backend.login');
	Route::post('admin/login', 'Auth\AdminController@post_login')->name('backend.login');

	Route::get('admin/logout', 'Auth\AdminController@logout')->name('backend.logout');

require_once('frontend.php');



