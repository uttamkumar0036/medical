<?php

use App\Http\Controllers\BackendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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



//fontent route
//Route::get('/index','BlogController@Home');
Route::get('/about', [BlogController::class, 'About'])->name('About');
Route::get('/contact', [BlogController::class, 'Contact'])->name('Contact');

Route::get('/department',[BlogController::class, 'Department'])->name('Department');
Route::get('/doctore',[BlogController::class, 'Doctore'])->name('Doctore');
Route::get('/home',[BlogController::class, 'Home'])->name('Home');
Route::get('/service',[BlogController::class, 'Service'])->name('Service');
Route::get('/single_blog',[BlogController::class, 'SingleBlog'])->name('SingleBlog');
Route::get('/single_department',[BlogController::class, 'SingleDepartment'])->name('SingleDepartment');
Route::get('/create',[BlogController::class, 'create'])->name('Create');
Route::post('/view','BlogController@View')->name('View');


//banckend route
Route::get('admin/home/',[BackendController::class ,'Home'])->name('home');