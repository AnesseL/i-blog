<?php
namespace App\Http\Controllers\Auth;


use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
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


Auth::routes(['verify'=>true]);

Route::get('/account/register', [RegisterController::class, 'showRegistrationForm'])->name('account.register');
Route::post('/account/register', [RegisterController::class, 'register']);
    
Route::get('/account/login', [LoginController::class, 'showLoginForm'])->name('account.login');
Route::post('/account/login', [LoginController::class, 'login']);
Route::post('/account/logout', [LoginController::class, 'logout'])->name('account.logout');
    
Route::get('/account/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/account/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/account/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/account/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
    
Route::get('/account/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::get('/account/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::post('/account/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');


// Route::get('/admin/post/create',[PostController::class, 'create'])->name('admin.post.create');

Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function() {
    Route::get('/post/create',[Admin\PostController::class, 'create'])->name('admin.post.create');
    Route::post('/post/create',[Admin\PostController::class, 'store'])->name('admin.post.create');
});
