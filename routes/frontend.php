<?php

Route::get('/', [
	'uses' => 'FrontendController@home',
	'as' =>'frontend.home'
]);

Route::get('san-pham', 'FrontendController@product_master')->name('frontend.product_master');
Route::get('san-pham/{id?}', 'FrontendController@product')->name('frontend.product');
Route::get('san-pham-hot', 'FrontendController@product_hp')->name('frontend.product_hp');
Route::get('san-pham-sale', 'FrontendController@product_hs')->name('frontend.product_hs');
Route::get('chi-tiet-san-pham/{id}', 'FrontendController@product_detail')->name('frontend.product_detail');


Route::get('tin-tuc', 'FrontendController@news')->name('frontend.news');
Route::get('chi-tiet-tin-tuc/{id}', 'FrontendController@news_detail')->name('frontend.news_detail');

Route::get('gioi-thieu', 'FrontendController@intro')->name('frontend.intro');
Route::get('lien-he', 'FrontendController@contact')->name('frontend.contact');
Route::post('lien-he', 'FrontendController@post_contact')->name('frontend.contact');



Route::get('view-cart','FrontendController@view_cart')->name('view-cart');
Route::get('add-cart/{id}','FrontendController@add_cart')->name('add-cart');
Route::get('delete-cart/{id}','FrontendController@delete')->name('delete-cart');
Route::get('update-cart/{id?}/{quantity?}','FrontendController@update_cart')->name('update-cart');
Route::get('clear-cart','FrontendController@clear_cart')->name('clear-cart');


Route::get('order','FrontendController@order')->name('frontend.order');
Route::post('order','FrontendController@post_order')->name('frontend.order');
Route::get('cus-order','FrontendController@cus_order')->name('frontend.cus-order');
Route::get('order-detail/{id}','FrontendController@order_detail')->name('frontend.order-detail');



Route::get('register','FrontendController@register')->name('frontend.register');
Route::post('register','FrontendController@post_register')->name('frontend.register');


Route::get('login','FrontendController@login')->name('frontend.login');
Route::post('login','FrontendController@post_login')->name('frontend.login');
Route::get('logout','FrontendController@logout')->name('frontend.logout');


Route::get('search','FrontendController@search')->name('frontend.search');



