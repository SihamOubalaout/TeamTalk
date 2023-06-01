<?php

use App\Http\Controllers\DepartementController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PiecejointeController;
use App\Http\Controllers\Auth\ResetPasswordController;
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

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/home', function () {
        return view('home');
    });  
    //Route::resource('employes',UserController::class);
    Route::controller(UserController::class)->prefix('users')->group(function () {
        Route::get('', 'index')->name('users.index');
        Route::get('create', 'create')->name('users.create');
        Route::post('store', 'store')->name('users.store');
        Route::get('show/{id}', 'show')->name('users.show');
        Route::get('edit/{id}', 'edit')->name('users.edit');
        Route::put('edit/{id}', 'update')->name('users.update');
        Route::delete('destroy/{id}', 'destroy')->name('users.destroy');
    });
 
    Route::resource('departements',DepartementController::class);
    Route::resource('users',UserController::class);
});

 

Route::get('/profile', function () {
    return view('users.profile');
});

Route::get('/master', function () {
    return view('layouts.master');
});



// Route pour afficher le formulaire de changement de mot de passe
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showChangePasswordForm'])->name('password.reset');


// Route pour mettre à jour le mot de passe de l'utilisateur
Route::post('/password/reset/{token}', [ResetPasswordController::class, 'changePassword'])->name('password.update');


Route::get('/messages', [MessagesController::class, 'index'])->name('messages');





Route::group(['prefix' => 'admin/home/messages'], function () {
    Route::get('/','App\Http\Controllers\MessagesController@index');
    Route::get('create','App\Http\Controllers\MessagesController@create');
    Route::post('/','App\Http\Controllers\MessagesController@store');
    Route::get('{id}','App\Http\Controllers\MessagesController@show');
    Route::put('{id}','App\Http\Controllers\MessagesController@update');
    Route::resource('messages',MessagesController::class);
});
Route::post('/piecejointes', [PiecejointeController::class, 'store'])->name('piecejointes.store');