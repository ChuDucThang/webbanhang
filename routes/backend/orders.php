<?php  

	Route::get('order-index','OrderController@index')->name('backend.order-index');

	Route::get('order-edit/{id}','OrderController@edit')->name('backend.order-edit');
	Route::post('order-edit/{id}','OrderController@update')->name('backend.order-edit');

	Route::get('order-delete/{id}','OrderController@destroy')->name('backend.order-delete');
?>