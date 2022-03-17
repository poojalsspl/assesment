<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SendEmailController;

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
    return redirect(route('login'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['role:superadmin']], function() {
Route::resource('roles',RoleController::class);
});
Route::group(['middleware' => ['role:superadmin|salesTeam']], function() {
Route::resource('products',ProductController::class);
Route::resource('category',CategoryController::class);
});
Route::group(['middleware' => ['role:superadmin|useradmin|salesTeam']], function() {
Route::resource('users',UserController::class);
});

Route::get('send-mail', [MailController::class, 'index']);

// Route::get('send-mail', function () {
   
//     $details = [
//         'title' => 'Mail from NeoSoft',
//         'body' => 'This is for testing email using smtp'
//     ];
   
//     \Mail::to('pooja.sharma@neosoftmail.com')->send(new \App\Mail\DemoMail($details));
   
//     dd("Email is Sent.");
// });




//Route::get('send-email', [SendEmailController::class, 'index']);






