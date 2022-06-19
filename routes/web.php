<?php



Route::resource('/invoice','invoiceController');

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('/','invoiceController@index')->name('index');
});
