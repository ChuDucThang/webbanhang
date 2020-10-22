<?php  
	Route::get('banner-index', [
		'uses'=>'BannerController@index',
		'as'=>'backend.banner-index'
	]);

	Route::get('banner-add','BannerController@create')->name('backend.banner-add');
	Route::post('banner-add','BannerController@store')->name('backend.banner-add');

	Route::get('banner-edit/{id}', 'BannerController@edit')->name('backend.banner-edit');
	Route::post('banner-edit/{id}', 'BannerController@update')->name('backend.banner-edit');

	Route::get('banner-delete/{id}',[
	'uses' => 'BannerController@delete',
	'as' => 'backend.banner-delete'
	]);
?>