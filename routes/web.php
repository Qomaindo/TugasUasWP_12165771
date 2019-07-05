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
    return view('auth/login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'product'], function() {
        Route::get('/', 'ProductController@index');
        Route::get('/new', 'ProductController@create');
        Route::get('/{id}', 'ProductController@edit');
        Route::put('/{id}', 'ProductController@update');
        Route::delete('/{id}', 'ProductController@destroy');
        Route::post('/', 'ProductController@save');
    });

    Route::group(['prefix' => 'customer'], function() {
        Route::get('/', 'CustomerController@index');
        Route::get('/new', 'CustomerController@create');
        Route::post('/', 'CustomerController@save');
        Route::get('/{id}', 'CustomerController@edit');
        Route::put('/{id}', 'CustomerController@update');
        Route::delete('/{id}', 'CustomerController@destroy');
    });

    Route::group(['prefix' => 'invoice'], function() {
        Route::get('/index', 'InvoiceController@index')->name('invoice.index');
        Route::get('/new', 'InvoiceController@create')->name('invoice.create');
        Route::post('/save', 'InvoiceController@save')->name('invoice.store');
        Route::get('/{id}', 'InvoiceController@edit')->name('invoice.edit');
        Route::put('/{id}', 'InvoiceController@update')->name('invoice.update');
        Route::delete('/{id}', 'InvoiceController@deleteProduct')->name('invoice.delete_product');
        Route::delete('/{id}/delete', 'InvoiceController@destroy')->name('invoice.destroy');
        Route::get('/{id}/print', 'InvoiceController@generateInvoice')->name('invoice.print');
    });

    Route::group(['prefix' => 'employee'], function() {
        Route::get('/', 'EmployeeController@index');
        Route::get('/new', 'EmployeeController@create');
        Route::post('/', 'EmployeeController@save');
       
        Route::delete('/{id}', 'EmployeeController@destroy');
    });
    // Route::post('/employee', 'EmployeeController@save')->name('save');

    // Route::get('employee','EmployeeController@index');
});