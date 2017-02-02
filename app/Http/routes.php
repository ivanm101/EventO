<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dash', function () {
    return view('admin.layout');
});
