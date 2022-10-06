<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/about-me', function () {
    return view('pages.about');
})->name('pages.about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('pages.contact');

Route::get('/',[PostController::class,'index'])->name('posts.posts');
Route::get('/{slug}',[PostController::class,'show'])->name('posts.post');


Auth::routes();
Route::get('/account/register', [RegisterController::class, 'showRegistrationForm'])->name('account.register');
Route::post('/account/register', [RegisterController::class, 'register']);