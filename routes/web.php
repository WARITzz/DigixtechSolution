<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('contact', function () {
    return view('contact');
})->name('contact');
Route::get('about', function () {
    return view('about');
})->name('about');
Route::get('portfolio', function () {
    return view('portfolio');
})->name('portfolio');
Route::get('catalog', function () {
    return view('catalog');
})->name('catalog');
Route::get('services', function () {
    return view('services');
})->name('services');
Route::get('warranty', function () {
    return view('warranty');
})->name('warranty');
Route::get('shipping', function () {
    return view('shipping');
})->name('shipping');
Route::get('privacy', function () {
    return view('privacy');
})->name('privacy');
Route::get('terms', function () {
    return view('terms');
})->name('terms');
Route::get('faq', function () {
    return view('faq');
})->name('faq');
Route::get('blog', function () {
    return view('blog');
})->name('blog');

Route::fallback(function () {
    return "<h1>ไม่พบหน้าที่คุณต้องการ</h1>";
});
