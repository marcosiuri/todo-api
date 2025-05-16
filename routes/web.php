<?php

use Illuminate\Support\Facades\Route;

// No arquivo routes/web.php
Route::get('/exemplo', function () {
    return view('welcome');
});