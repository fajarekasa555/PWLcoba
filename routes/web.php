<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return 'Selamat Datang';
// });

// Route::get('/hello', function () {
//    return 'Hello World';
// });
Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/world', function () {
   return 'World';
});

// Route::get('/about', function () {
//     return '244107020043 Fajar Eka Sandiyuda';
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [ArticleController::class, 'articles']);


Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman artikel dengan ID '. $id;
// });

Route::get('/user/{name?}', function ($name='Fajar') {
    return 'Nama saya '.$name;
});

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

// Route::get('/greeting', function () {
// 	return view('blog.hello', ['name' => 'Fajar']);
// });

Route::get('/greeting', [WelcomeController::class, 'greeting']);
