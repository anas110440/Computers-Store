<?php

use App\Http\Controllers\ComputersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;

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

Route::get('/',[StaticController::class, 'index'])->name('home.index');
Route::get('/about',[StaticController::class, 'about'])->name('home.about');
Route::get('/contact',[StaticController::class, 'contact'])->name('home.contact');

Route::resource('/computers',ComputersController::class);


// Route::get('/store', function () {
//     $filter = request('style');
//     if(isset($filter)){

//         return 'This page is viewing <span style= "color: red">'.strip_tags($filter).'</span>';
//     }else{
//         return 'This page is viewing <span style= "color: red">All Product</span>';

//     }

// });
// Route::get('/store/{category}/{item?}', function ($category,$item = null) {

//         return '<h1>Store | '.strip_tags($category).' -> '.strip_tags($item).'</h1>';



// });
