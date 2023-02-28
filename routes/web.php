<?php

use App\Http\Controllers\VideoController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Requests\SearchRequest;

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

//===================================
//             GENERAL
//===================================

// HOME 1 
Route::get('/', function () {
    return view('home1');
});

// LOGIN

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [LoginController::class, 'doLogin'])->name('login.post');

// LOGOUT

Route::post('/', [LoginController::class, 'doLogout'])->name('logout');

// SIGN UP

Route::get('/signup',[RegisterController::class, 'create'])->name('register.create');
Route::post('/signup',[RegisterController::class, 'store']);

//===================================
//              USERS
//===================================

// HOME USERS (2)
Route::get('/home2',[VideoController::class, 'list'])->middleware('auth');

// USERS PROFILE
Route::get('/profile', function () {
    return view('users/profile');
})->middleware('auth');

// EDIT USERS PROFILE
Route::get('/editProfile', function () {
    return view('users/editProfile');
})->middleware('auth');

//===================================
//              VIDEOS
//===================================

// SEARCH VIDEOS (Filtre x movies/series)
Route::get('/search', function () {
    return view('videos/search');
})->middleware('auth');

Route::post('/search',[VideoController::class, 'searchVideo'])->name('search.post');

// FAVORITES VIDEOS
Route::get('/favorite', function () {
    return view('videos/fav');
})->middleware('auth');

Route::get('/streaming', function() {
    return view('videos/streaming');
})->middleware('auth');

Route::post('/videoList', [VideoController::class, 'addFav'])->name('addFav');
Route::post('/favorite', [VideoController::class, 'showFav'])->name('showFav');
Route::get('/favoriteRm', [VideoController::class, 'removeFav'])->name('removeFav');

Route::get('/streamingVideo/{id}', [VideoController::class, 'watchVideo'])->name('playVid');
//===================================
//              MOVIES
//===================================
//===================================
//              SERIES
//===================================

// LIST SERIES (no filtre)
Route::get('/list/{type}',[VideoController::class, 'videoList']);

//===================================
//              ADMIN
//===================================

Route::get('/homeAdmin', function () {
    return view('admin/homeAdmin');
});

Route::get('/userList', function () {
    return view('admin/userList');
});

Route::get('/editMovies', function () {
    return view('admin/editMovies');
});

Route::get('/uploadMovies', function () {
    return view('admin/uploadMovies');
});

Route::get('/userInfo', function () {
    return view('admin/userInfo');
});

Route::get('/authorize', function () {
    return view('admin/authorize');
});

