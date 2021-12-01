<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/index', function () {
    return view('index', [
        "title" => "index"
    ]);
});

Route::get('/health', function(){
    return view('health', [
        "title" => "Health"
    ]);
});

Route::get('/education', function(){
    return view('education', [
        "title" => "Education"
    ]);
});

Route::get('/techno', function(){
    return view('techno', [
        "title" => "Technology"
    ]);
});

Route::get('/food', function(){
    return view('food', [
        "title" => "Food"
    ]);
});

Route::get('/about', function(){
    return view('about', [
        "title" => "About",
        "name" => "Sam Martin",
        "email" => "sammartintm45@gmail.com",
        "image" => "profile.jpg"
    ]);
});

Route::get('/login', function(){
    return view('login', [
        "home" => "login"
    ]);
});

Route::get('/login_other', function(){
    return view('login_other', [
        "home" => "login_other"
    ]);
});

Route::get('/register', function(){
    return view('register', [
        "home" => "register"
    ]);
});

Route::get('/admin', function(){
    return view('admin', [
        "home" => "admin"
    ]);
});

Route::get('/admin_post_view', function(){
    return view('admin_post_view', [
        "home" => "admin_post_view"
    ]);
});

Route::get('/admin_post_kategori', function(){
    return view('admin_post_kategori', [
        "home" => "admin_post_kategori"
    ]);
});

Route::get('/admin_post_add', function(){
    return view('admin_post_add', [
        "home" => "admin_post_add"
    ]);
});

Route::get('/admin_polling_view', function(){
    return view('admin_polling_view', [
        "home" => "admin_polling_view"
    ]);
});

Route::get('/admin_polling_add', function(){
    return view('admin_polling_add', [
        "home" => "admin_polling_add"
    ]);
});

Route::get('/admin_page_view', function(){
    return view('admin_page_view', [
        "home" => "admin_page_view"
    ]);
});

Route::get('/admin_page_add', function(){
    return view('admin_page_add', [
        "home" => "admin_page_add"
    ]);
});

Route::get('/admin_lowker_view', function(){
    return view('admin_lowker_view', [
        "home" => "admin_lowker_view"
    ]);
});

Route::get('/admin_lowker_add', function(){
    return view('admin_lowker_add', [
        "home" => "admin_lowker_add"
    ]);
});

Route::get('/admin_iklan_view', function(){
    return view('admin_iklan_view', [
        "home" => "admin_iklan_view"
    ]);
});

Route::get('/admin_iklan_kategori', function(){
    return view('admin_iklan_kategori', [
        "home" => "admin_iklan_kategori"
    ]);
});

Route::get('/admin_iklan_add', function(){
    return view('admin_iklan_add', [
        "home" => "admin_iklan_add"
    ]);
});

Route::get('/admin_foto_view', function(){
    return view('admin_foto_view', [
        "home" => "admin_foto_view"
    ]);
});

Route::get('/admin_foto_add', function(){
    return view('admin_foto_add', [
        "home" => "admin_foto_add"
    ]);
});

Route::get('/admin_foto_add', function(){
    return view('admin_foto_add', [
        "home" => "admin_foto_add"
    ]);
});

Route::get('/admin_flipboard_add', function(){
    return view('admin_flipboard_add', [
        "home" => "admin_flipboard_add"
    ]);
});

Route::get('/admin_flipboard_view', function(){
    return view('admin_flipboard_view', [
        "home" => "admin_flipboard_view"
    ]);
});

Route::get('/admin_event_view', function(){
    return view('admin_event_view', [
        "home" => "admin_event_view"
    ]);
});

Route::get('/admin_event_add', function(){
    return view('admin_event_add', [
        "home" => "admin_event_add"
    ]);
});

Route::get('/admin_edisi_view', function(){
    return view('admin_edisi_view', [
        "home" => "admin_edisi_view"
    ]);
});

Route::get('/admin_edisi_add', function(){
    return view('admin_edisi_add', [
        "home" => "admin_edisi_add"
    ]);
});

Route::get('/admin_aspirasi_view', function(){
    return view('admin_aspirasi_view', [
        "home" => "admin_aspirasi_view"
    ]);
});

Route::get('/admin_aspirasi_add', function(){
    return view('admin_aspirasi_add', [
        "home" => "admin_aspirasi_add"
    ]);
});
