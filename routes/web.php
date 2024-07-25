<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/post',function() {
    return view('post');
})->name('mypost');

Route::prefix('page')->group(function () {
    Route::get('/pageabout', function () {
        return "<h1>Page about</h1>";
    });
    Route::get('/pagegallery', function () {
        return "<h1>Page gallery</h1>";
    });
    Route::get('/pagefirst/firstpage', function () {
        return "<h1>Page first</h1>";
    });
});

Route::fallback(function () {
    return "<h1>Page Not Found</h1>";
});












// Route::get('/post/{id?}', function (string $id = null) {
//     if ($id) {
//         return "<h1>Post ID: " . $id;
//     }
//     else {
//         return "NO ID";
//     }
// })->where('id', '[0-9]+'); 


// // ->whereNumber('id')
// // ->whereAlphaNumeric('id')

// Route::get('/post/{id?}/comment/{commentid?}', function (string $id = null, string $comment = null) {
//     if ($id) {
//         return "<h1>Post ID: " . $id . "</h1><h2>Comment is " . $comment . "</h2>";
//     }
//     else {
//         return "NO ID";
//     }
// })->where('id', '[0-9]+')->whereAlpha('commentid');
