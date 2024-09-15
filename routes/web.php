<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/master', function () {
    return view('layouts.master');
});

// Route::get('/login', function () {
//     return view('login');
// });

//admin
Route::get('/laporanSertifikasi', function () {
    return view('admin.laporanSertifikasi');
});
Route::get('/laporanTraining', function () {
    return view('admin.laporanTraining');
});
Route::get('/mappingJabatan', function () {
    return view('admin.mappingJabatan');
});
Route::get('/monitoring', function () {
    return view('admin.monitoring');
});


