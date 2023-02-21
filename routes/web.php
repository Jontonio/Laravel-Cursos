<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use \App\Http\Controllers\contactanosController;
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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/nosotros', function (){
    return view('nosotros');
})->name('nosotros');

Route::controller(CursoController::class)->group(function(){
    Route::get('cursos','index')->name("cursos.index");
    Route::get('cursos/create','create')->name("cursos.create");
    Route::post('cursos/store','store')->name('cursos.store');
    Route::get('cursos/{slug}','show')->name("cursos.show");
    Route::delete('cursos/{id}/delete','destroy')->name("cursos.delete");
    Route::get('cursos/{slug}/edit','getForUpdate')->name("cursos.getForUpdate");
    Route::put('cursos/{id}/update','update')->name("cursos.update");
});

Route::get('/contactanos',[contactanosController::class,'index'])->name('contactanos.index');
Route::post('/contactanos',[contactanosController::class,'store'])->name('contactanos.store');

//Route::resource('cursos', CursoController:: class);
