<?php

Route::get('payment', ['as' => 'payment', 'uses'=>'PaypalController@postPayment']);
Route::get('payment/status', ['as'=>'payment.status', 'uses'=>'PaypalController@getPaymentStatus']);
Route::get('/', function () {
    return view('welcome');
});
