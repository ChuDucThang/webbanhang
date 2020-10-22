<?php 

	

	Route::get('user-index','UserController@index')->name('backend.user-index');

	Route::get('user-add','UserController@create')->name('backend.user-add');
	Route::post('user-add','UserController@store')->name('backend.user-add')
 ?>