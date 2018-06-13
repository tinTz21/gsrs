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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout','Auth\LoginController@userLogout')->name('user.logout');

//this is route for officers
Route::prefix('officer')->group(function(){
	Route::get('/login','Auth\OfficerLoginController@showLoginForm')->name('officer.login');
    Route::post('/login','Auth\OfficerLoginController@login')->name('officer.login.submit');
    Route::get('/','OfficerController@index')->name('officer.dashboard');
});

 
//this is Route for admins
Route::prefix('admin')->group(function(){
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/','AdminController@index')->name('admin.dashboard');
	Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::get('pages.schoollist','OfficerController@schoollist')->name('school');
Route::get('pages/{id}','OfficerController@show')->name('show');
Route::get('pages.create','OfficerController@create')->name('create');
Route::post('pages.store', 'OfficerController@store')->name('store');

Route::get('pages.taarifayashule','HeadmasterFormsController@shule')->name('taarifayashule');
Route::post('pages','HeadmasterFormsController@store');
Route::get('pages.vacancy','HeadmasterFormsController@vacancy')->name('vacancy');
Route::get('pages.vitabu','HeadmasterFormsController@vitabu')->name('vitabu');

Route::get('pages.kiongozi','HeadmasterKiongoziController@index')->name('kiongozi');

Route::get('pages.wanafunzi','HeadmasterWanafunziController@index')->name('wanafunzi');
Route::get('pages.walimu','HeadmasterWalimuController@index')->name('walimu');

Route::get('pages.huduma','HeadmasterHudumaController@index')->name('huduma');
Route::post('pages.hudumas','HeadmasterHudumaController@store')->name('hudumas');

Route::get('pages.dodoso','HeadmasterDodosoController@index')->name('dodoso');
Route::post('pages.maoni','HeadmasterDodosoController@store')->name('maoni');

Route::get('pages.index','MiundoMbinuController@index')->name('resources');
Route::post('pages','MiundoMbinuController@store');

Route::get('pages.kiongozi','HeadmasterKiongoziController@index')->name('kiongozi');
Route::post('pages','HeadmasterKiongoziController@store');
