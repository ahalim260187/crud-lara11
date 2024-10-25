<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('customers');
});

Route::get('/create-customer', function () {
    return view('create-customer');
});

Route::get('/view-customer', function () {
    return view('customer-detail');
});
