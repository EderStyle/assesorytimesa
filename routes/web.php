<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('bienvenido');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cursos-inicio', 'CursoController@index');

//Rutas admin
require __DIR__ . '/modules/admin.php';
//Rutas login y registro redes sociales//

Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

Route::get('/proyectos-inicio', 'ProyectosController@index');

/*Route::get('admin/home', 'AdminController@index');
Route::post('/admin', 'Admin\LoginController@login');
Route::get('/admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset' , 'Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');*/
