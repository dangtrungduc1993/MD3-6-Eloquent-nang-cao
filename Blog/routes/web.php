<?php

use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('blogs')->group(function (){
    Route::get('/',[BlogController::class,'index'])->name('blog.index');
    Route::get('/create',[BlogController::class,'create'])->name('blog.create');
    Route::post('/create',[BlogController::class,'store'])->name('blog.store');
    Route::get('/{id}/update',[BlogController::class,'edit'])->name('blog.edit');
    Route::post('/{id}/update',[BlogController::class,'update'])->name('blog.update');
    Route::get('/{id}/delete',[BlogController::class,'destroy'])->name('blog.destroy');
    Route::get('/{id}/detail',[BlogController::class,'show'])->name('blog.show');

});


