<?php

use App\Http\Controllers\AdminController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//
Route::get('/', [\App\Http\Controllers\Frontend\IndexController::class, 'index'])->name('index');
Route::get('/about', [\App\Http\Controllers\Frontend\IndexController::class, 'about'])->name('about');
Route::get('/contact', [\App\Http\Controllers\Frontend\IndexController::class, 'contact'])->name('contact');
Route::get('/properties', [\App\Http\Controllers\Frontend\IndexController::class, 'properties'])->name('properties');
Route::get('/properties-details', [App\Http\Controllers\Frontend\IndexController::class, 'properties-details'])->name('properties-details');
Route::get('/blog', [App\Http\Controllers\Frontend\IndexController::class, 'blog'])->name('blog');
Route::get('/blog-details', [App\Http\Controllers\Frontend\IndexController::class, 'blog-details'])->name('blog-details');
//Admin Section

//Property Controller

Route::group(['prefix' => 'admin'], function (){

    Route::get('/', [App\Http\Controllers\AdminController::class, 'adminIndex'])->name('adminIndex');
    Route::get('/register', [App\Http\Controllers\AdminController::class, 'adminRegister'])->name('adminRegister');
    Route::POST('/adminUserRegistration', [App\Http\Controllers\AdminController::class, 'adminUserRegistration'])->name('adminUserRegistration');
    Route::get('/all-properties', [App\Http\Controllers\AdminController::class, 'all_properties'])->name('allproperties');
    Route::get('/add-properties', [App\Http\Controllers\AdminController::class, 'add_properties'])->name('addproperties');
    Route::resource('property', \App\Http\Controllers\PropertyController::class);
});



Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboardController'])

    ->middleware(['auth'])->name('custom-dashboard');

require __DIR__.'/auth.php';
