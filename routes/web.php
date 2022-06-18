<?php

Route::get('/','invoiceController@index')->name('index');

Route::resource('/invoice','invoiceController');
