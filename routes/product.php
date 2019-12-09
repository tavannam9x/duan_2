<?php

Route::get('/', 'ProductController@index')->name('home');
Route::get('add-new', 'ProductController@addNew')->name('product.add');
Route::post('add-new', 'ProductController@saveAddNew');
Route::get('edit/{id}', 'ProductController@editForm')->name('product.edit');
Route::post('edit/{id}', 'ProductController@saveEdit');
Route::get('edits/{id}', 'ProductController@editStatus')->name('product.edits');
Route::post('edits/{id}', 'ProductController@saveEdits');
Route::get('deletePost/{id}', 'ProductController@deletePost')->name('product.remove');

?>