<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return 'Hello, welcome to my first route :)';
});

Route::get('/anotherHome', function () {
    return 'This is another homepage.';
});

Route::redirect('/anotherHome', '/homepage', 301);

Route::get('users/{id?}', function ($id = 'John Doe') {
    return 'User page '.$id;
});

Route::get('users/{id}/comment/{commentId}', function ($id, $commentId) {
    return 'User page '.$id. ' comment id '.$commentId;
});