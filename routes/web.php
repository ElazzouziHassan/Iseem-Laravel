<?php

use App\Http\Controllers\userController;
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
    return view('welcome');
});

Route::view('/', 'home')->name('home');
Route::view('/post', 'post')->name('post');
Route::view('/test', 'test')->name('test');
Route::view('/user', 'user')->name('user');

// route::get('/home', [userController::class, 'index']);

// Route::get('/user/{name}', function ($name){
//     return view('user',['name'=>$name]);
// })->name('user');

// Route::get('/test', function () {
//     $stds = [
//         1 => "Hassan",
//         2 => "Oumnia",
//         3 => "Kabira",
//     ];
//     return view('test',['stds'=>$stds]);
// });

// Route::get('user/{name}', [userController::class,'index'])->name('user');
