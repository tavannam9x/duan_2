<?php

Route::get('/tk', 'UserController@index');
Route::get('add-new', 'UserController@addNew')->name('user.add');
Route::post('add-new', 'UserController@saveAddNew');
Route::get('edit/{id}', 'UserController@editForm')->name('users.edit');
Route::post('edit/{id}', 'UserController@saveEdit');
Route::get('deletePost/{id}', 'UserController@deletePost')->name('user.remove');

Route::get('/','UserController@getView')->name('adminsuper');
Route::get('/getData','UserController@getData')->name('user.Data');

?>