<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/dashboard/panduan', function () {
    return view('dashboard.panduan');
})->name('dashboard.panduan');

Route::get('/dashboard/formulir', function () {
    return view('dashboard.formulir');
})->name('dashboard.formulir');

Route::get('/dashboard/status', function () {
    return view('dashboard.status');
})->name('dashboard.status');

Route::get('/dashboard/info', function () {
    return view('dashboard.info');
})->name('dashboard.info');

Route::get('/dashboard/news/info', function () {
    return view('dashboard.news-show');
})->name('dashboard.news-show');

// Route untuk Data Permintaan
Route::get('/dashboard/formulir/permintaan', function () {
    return view('dashboard.formulir-permintaan');
})->name('formulir.permintaan');

// Route untuk Data Kontak
Route::get('/dashboard/formulir/kontak', function () {
    return view('dashboard.formulir-kontak');
})->name('formulir.kontak');

Route::get('/dashboard/formulir/personal', function () {
    return view('dashboard.formulir-personal');
})->name('formulir.personal');



