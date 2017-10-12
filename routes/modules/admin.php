<?php

Route::group(['prefix' => 'asseadm',
                 'as'=>'asseadm.' ], function () {

        Route::get('/', 'AdminController@index')->name('admin.home');
		Route::post('/login', 'Admin\LoginController@login')->name('admin.login.submit');
		Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');

<<<<<<< HEAD
		Route::resource('categories', 'Category\CategoryController');
=======
		Route::get('/categories', 'Category\CategoryController@index')->name('category.index');
>>>>>>> 9e563767f596c31b1587dcbfc5980e0c4e72940f
});