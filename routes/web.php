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
    return \Illuminate\Support\Facades\Redirect::route('home');
});



Route::post('register')->name('signup');



Route::get('/shop/home/', 'HomeController@showProducts')->name('home');

Route::get('/shop/home/{id}', 'HomeController@showProducts')->name('filter');




Route::get('/account/profile/main', "mainController@myProfile") ->name('myprofile');
Route::get('/account/profile/edit', "Editprofile@editprofileForm") ->name('editprofile');
Route::post('/account/profile/edit', "Editprofile@editprofile") ->name('editprofile');

Route::get('/account/products/create', "NewItemController@newItem") ->name('newItem');
Route::post('/account/products/create', "NewItemController@createNewItem")->name('newItem');

Route::get('/account/products/edit/{id}', "EditItemController@editItem")->name('editItem');
Route::post('/account/products/edit/{id}', "EditItemController@updateItem")->name('updateItem');

Route::get('/account/products/{itemid}', "EditItemController@deleteItem")->name('deleteItem');


Route::get('/account/products/list', "MyItemController@viewMyItems");
Route::get('/account/products', "MyItemController@viewMyItems")->name('myItem');

Route::get('/shop/product/{id}', "ViewItemController@viewItem")->name('viewItem');

Route::get('lang/{language}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);



Route::post('/shop/product/comment/{id}', 'ViewItemController@comment')->name('comment');

Route::get('/auth/signin', "mainController@");


// Authentication Routes...
Route::get('/auth/signin', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/auth/signin', 'Auth\LoginController@login')->name('signin');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('/auth/signup', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/auth/signup', 'Auth\RegisterController@register')->name('saif');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
