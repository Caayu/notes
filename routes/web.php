<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo 'Hello world!';
});

Route::get('/about', function () {
    echo 'about us';
});
