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
    return view('welcome');
});
Route::get("profile", function (){
    return view("profile");
});
Route::get("contact", function (){
    return view("contact");
});


Route::get("home/gallery", function (){
    $data = [
        "gallery" => \App\Gallery::all()
    ];
    return view("gallery", $data);
});


Route::resource("gallery", "GalleryController")->middleware("auth");
Route::get('getimages','GalleryController@getImages');
Route::post('image/delete','GalleryController@destroy');

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/home', 'HomeController@index')->name('home');
