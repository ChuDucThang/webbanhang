<?php  
	Route::get('category-index', [
		'uses'=>'CategoryController@index',
		'as'=>'backend.category-index'
	]);

	Route::get('category-add','CategoryController@create')->name('backend.category-add');
	Route::post('category-add','CategoryController@store')->name('backend.category-add');

	Route::get('category-edit/{id}','CategoryController@edit')->name('backend.category-edit');
	Route::post('category-edit/{id}','CategoryController@update')->name('backend.category-edit');

	Route::get('category-delete/{id}','CategoryController@delete')->name('backend.category-delete');




?>