<?php

Route::get('/', 'UserController@index')->name('adminsuper');
Route::get('add-new', 'UserController@addNew')->name('user.add');
Route::post('add-new', 'UserController@saveAddNew');
Route::get('edit/{id}', 'UserController@editForm')->name('users.edit');
Route::post('edit/{id}', 'UserController@saveEdit');
Route::get('deletePost/{id}', 'UserController@deletePost')->name('user.remove');

?>