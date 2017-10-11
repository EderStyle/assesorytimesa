<?php

Route::group(['prefix' => 'asseadm',
                 'as'=>'asseadm.' ], function () {

        Route::get('/', 'AdminController@index')->name('admin.home');
		Route::post('/login', 'Admin\LoginController@login')->name('admin.login.submit');
		Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');

		Route::get('/categories', 'Category\CategoryController@index')->name('category.index');
});