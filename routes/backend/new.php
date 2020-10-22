<?php  
	Route::get('new-index', [
		'uses'=>'NewController@index',
		'as'=>'backend.new-index'
	]);

	Route::get('new-add','NewController@create')->name('backend.new-add');
	Route::post('new-add','NewController@store')->name('backend.new-add');

	Route::get('new-edit/{id}', 'NewController@edit')->name('backend.new-edit');
	Route::post('new-edit/{id}', 'NewController@update')->name('backend.new-edit');

	Route::get('new-delete/{id}',[
	'uses' => 'NewController@delete',
	'as' => 'backend.new-delete'
	]);
?>