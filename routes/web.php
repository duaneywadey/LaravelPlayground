<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/{id?}', function (string $id = null) {
    if ($id) {
        return "<h1>Post ID: " . $id;
    }
    else {
        return "NO ID";
    }
})->whereNumber('id');


// ->whereNumber('id')
// ->whereAlphaNumeric('id')

Route::get('/post/{id?}/comment/{commentid?}', function (string $id = null, string $comment = null) {
    if ($id) {
        return "<h1>Post ID: " . $id . "</h1><h2>Comment is " . $comment . "</h2>";
    }
    else {
        return "NO ID";
    }
});
