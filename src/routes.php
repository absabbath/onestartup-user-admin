<?php

Route::group(['middleware' => ['web', 'auth', 'is_admin']], function(){
	Route::get('admin/user','Onestartup\UserAdmin\AdminUserController@list')->name('user.list');
	Route::get('admin/user/datatable','Onestartup\UserAdmin\AdminUserController@datatable')->name('user.datatable');
	Route::get('admin/user/{id}/show','Onestartup\UserAdmin\AdminUserController@show')->name('user.show');
	Route::post('admin/user/store','Onestartup\UserAdmin\AdminUserController@storeUser')->name('user.store');
	Route::put('admin/user/{id}/update','Onestartup\UserAdmin\AdminUserController@update')->name('user.update');
	Route::delete('admin/user/{id}/destroy','Onestartup\UserAdmin\AdminUserController@destroy')->name('user.destroy');
});
