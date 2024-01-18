<?php


use App\Http\Controllers\Dashbord\IndexController;
use App\Http\Controllers\Dashbord\SettingController;
use App\Http\Controllers\Dashbord\CategoryController;
use App\Http\Controllers\Dashbord\ProductController;
use Illuminate\Routing\Route as RoutingRoute;
use illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::get('/admin',function(){
    dd('admin');
})->name('admin');
*/

Route::get('/',[IndexController::class,'index'])->name('admin');
 
 Route::put('users/{setting}/update',[SettingController::class,'update'])->name('dashbord.settings.update');
Route::get('settings',[SettingController::class,'index'])->name('dashbord.settings.index');
//Route::delete('category/{product}',[CategoryController::class , 'destroy'])->name('dachbord.category.destroy');
// Route::delete('category/delete',[CategoryController::class,'delete'])->name('dachbord.category.delete');
//Route::delete('category/{id}', 'CategoryController@destroy')->name('category.destroy');
//Route::delete('products/{product}', 'CategoryController@destroy')->name('products.destroy');
// Route::middleware(['ceackAdmin'])->group(function () {
//     // Your admin routes go here
//     // Route::get('/', function () {
//     //     return view ('dashbord.admin');
//     //  })->name('index');
     
//     Route::delete('products/{product}',[CategoryController::class , 'destroy'])->name('products.destroy');

// });


Route::resource('category',CategoryController::class)->except('create','show');
Route::resource('products',ProductController::class);


