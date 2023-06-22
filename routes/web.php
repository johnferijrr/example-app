<?php

use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.home');
});

Route::get('/home', function () {
    return view('layout.home');
});

Route::get('/students/add', function () {
    return view('students.formadd');
});

Route::get('/login', function () {
    return view('layout.login');
});

Route::get('/register', function () {
    return view('layout.register');
});

Route::get('/lupapassword', function () {
    return view('layout.lupapassword');
});

Route::group([
    'prefix' => config('admin.prefix'),
    'namespace' => 'App\\Http\\Controllers',
],function(){
    Route::get('/login', 'LoginAdminController@formlogin')->name('admin.login');
    Route::post('/login', 'LoginAdminController@login');

    Route::get('daftar','RegisterController@form')->name('admin.register');
    Route::post('daftar','RegisterController@simpan');

    Route::middleware(['auth:admin'])->group(function(){
        Route::post('logout', 'LoginAdminController@logout')->name('admin.logout');
        Route::view('/','dashboard')->name('dashboard');
        Route::view('/post', 'data-post')->name('post')->middleware('can:role, "admin","editor"');
        Route::view('/admin', 'data-admin')->name('admin')->middleware('can:role,"admin"');
    });
});

Route::resource('students',StudentsController::class);