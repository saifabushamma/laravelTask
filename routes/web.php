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
use Illuminate\Support\Facades\Auth;
Auth::routes();



Route::post('register')->name('signup');

Route::get('/admin/users/addUser', 'admin\UserController@edituser')->name('edituser');


Route::get('/shop/home/', 'HomeController@showProducts')->name('home');

//admin route
Route::get('/admin', 'admin\mainController@showadmin')->name('admin');
Route::get('/admin/users/editUser/{id}', 'admin\UserController@edituser')->name('edituser');

Route::get('/admin/users/deleteUser/{id}', 'admin\UserController@deleteuser')->name('deleteuser');
Route::get('/admin/users/destroyUser/{id}', 'admin\UserController@destroy')->name('destroyuser');

Route::get('/admin/users/userDetails/{id}', 'admin\UserController@userdetails')->name('userdetails');

Route::post('/admin/users/edituser/{id}', 'admin\UserController@submitedit')->name('submitedituser');



Route::get('/admin/users/userList', 'admin\UserController@showusers')->name('userlist');
Route::post('/admin/users/userList', 'admin\UserController@showusers')->name('userlist');

Route::post('/admin/users/userList', 'admin\UserController@showuser')->name('userlists');
Route::get('/admin/users/addUser', 'admin\UserController@addusers')->name('adduser');
Route::get('/admin/users/status/{id}/', 'admin\UserController@status')->name('users_status');


Route::post('/admin/items/addUser', 'admin\UserController@store')->name('addusers');
Route::get('/admin/items/deleteItem/{id}', 'admin\ItemController@deleteitem')->name('deleteitem');
Route::get('/admin/items/destroyitem/{id}', 'admin\ItemController@destroy')->name('destroyitem');
Route::get('/admin/items/status/{id}/', 'admin\ItemController@status')->name('item_status');


Route::get('/admin/items/itemDetails/{id}', 'admin\ItemController@itemdetails')->name('itemdetails');
Route::get('/admin/items/itemList', 'admin\ItemController@showitem')->name('itemlist')
;
Route::get('/admin/items/addItems', 'admin\ItemController@additems')->name('additem');
Route::post('/admin/items/addItems', 'admin\ItemController@additems')->name('additems');


Route::post('/admin/items/addItems', 'admin\ItemController@createNewItem')->name('additemss');
Route::get('/admin/items/editItem/{id}', 'admin\ItemController@edititem')->name('edititem');

Route::post('/admin/items/editItem/{id}', 'admin\ItemController@submitedit')->name('submitedit');


Route::get('/currency-shange/{currencyID}', 'CurrencyController@ChangeCurrency')->name('changeCurrency');
Route::post('/shopping/{id}', 'CartController@AddToCart')->name('AddToCart');
//Route::get('/shopping', 'CartController@viewCart')->name('viewCart');

Route::get('/cart/get','CartController@Cart')->name('getCart');
Route::get('/cart/remove/{id}','CartController@RemoveFromCart')->name('removecart');


Route::get('/admin/category/editCategory/{id}', 'admin\CategoryController@editcategory')->name('editcategory');
Route::get('/admin/category/deleteCategory/{id}', 'admin\CategoryController@deletecategory')->name('deletecategory');
Route::get('/admin/category/destroyCategory/{id}', 'admin\CategoryController@destroy')->name('destroycategory');
Route::get('/admin/category/status/{id}/', 'admin\CategoryController@status')->name('cat_status');


Route::get('/admin/category/categoryDetails/{id}', 'admin\CategoryController@categorydetails')->name('categorydetails');
Route::get('/admin/category/categoriesList', 'admin\CategoryController@showcategory')->name('catlist');

Route::get('/admin/category/addCategories', 'admin\CategoryController@addcategory')->name('addcat');

Route::post('/admin/category/editcategory/{id}', 'admin\CategoryController@submiteditcat')->name('submiteditcat');
Route::post('/admin/category/addCategories', 'admin\CategoryController@addNewCategory')->name('addcategory');
Route::get('/admin/category/editCategory/{id}', 'admin\CategoryController@editcategory')->name('editcategory');

Route::get('/admin/adminList', 'admin\AdminController@showadmin')->name('adminlist');
Route::get('/admin/addadmin', 'admin\AdminController@addadmin')->name('addadmin');




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

Route::get('/login/{social}','Auth\LoginController@socialLogin')->where('social','twitter|facebook|google')->name('socialLogin');

Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook|google');




// Password Reset Routes...

