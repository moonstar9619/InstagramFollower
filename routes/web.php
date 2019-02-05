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

Route::get('/', 'Frontend\HomeController@index')->name('home');

Route::group(['prefix' => 'frontend', 'namespace' => 'Frontend'], function () {
    Route::get('/create', 'OrderController@create')->name('frontend.order.create');
    Route::get('/packageList/{packageList}/services/', 'OrderController@getServices'); // orye post kardane in kar kon
    Route::get('/serviceList/{serviceId}/services/', 'OrderController@getLinkWayService'); // orye post kardane in kar kon
    Route::post('/create', 'OrderController@store')->name('frontend.order.store');
});

// User Panel
Route::group(['prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth']], function () {

    // Panel
    Route::get('/panel', 'UserController@index')->name('user.panel');

    // Orders
    Route::get('/user/orders', 'OrdersController@index')->name('user.orders.list');

    // Transactions
    Route::get('/user/transactions', 'TransactionsController@index')->name('user.transactions.list');

});

// Admin Panel
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth','admin']], function () {

    // Dashboard
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');

    // Orders
    Route::get('/orders', 'OrdersController@index')->name('admin.orders.list');

    // Users
    Route::get('/users', 'UsersController@index')->name('admin.users.list');
    Route::get('/users/create', 'UsersController@create')->name('admin.users.create');
    Route::post('/users/create', 'UsersController@store')->name('admin.users.store');
    Route::get('/users/edit/{user_id}', 'UsersController@edit')->name('admin.users.edit');
    Route::post('/users/edit/{user_id}', 'UsersController@update')->name('admin.users.update');
    Route::get('/users/delete/{user_id}', 'UsersController@remove')->name('admin.users.delete');

    // Transactions
    Route::get('/transactions', 'TransactionsController@index')->name('admin.transactions.list');
    Route::get('/transactions/delete/{payment_id}', 'TransactionsController@remove')->name('admin.transactions.delete');

    // Packages
    Route:: get('/packages', 'PackagesController@index')->name('admin.packages.list');
    Route:: get('/packages/create', 'PackagesController@create')->name('admin.packages.create');
    Route:: post('/packages/create', 'PackagesController@store')->name('admin.packages.store');
    Route:: get('/packages/edit/{package_id}', 'PackagesController@edit')->name('admin.packages.edit');
    Route:: post('/packages/edit/{package_id}', 'PackagesController@update')->name('admin.packages.update');
    Route:: get('/packages/delete/{package_id}', 'PackagesController@remove')->name('admin.packages.delete');

    // Services
    Route::get('/services', 'ServicesController@index')->name('admin.services.list');
    Route::get('/services/create', 'ServicesController@create')->name('admin.services.create');
    Route::post('/services/create', 'ServicesController@store')->name('admin.services.store');
    Route::get('/services/edit/{service_id}', 'ServicesController@edit')->name('admin.services.edit');
    Route::post('/services/edit/{service_id}', 'ServicesController@update')->name('admin.services.update');
    Route::get('/services/delete/{service_id}', 'ServicesController@remove')->name('admin.services.delete');

});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'Frontend\HomeController@index')->name('home');
