<?php

Route::get('/','InvoiceController@index')->name('index');

//Route::get('/invoice/index',['as'=>'invoice.index','uses'=>'InvoiceController@index']);

Route::get('change-language/{locale}', ['as' => 'frontend_change_locale', 'uses' => 'GeneralController@changeLanguage']);
Route::resource('invoice','InvoiceController');
