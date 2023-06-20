<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
route:: get('/welcome', function () {
    echo "selamat datang di laravel";
});

route::get('/greeting', function() {
    return view('greeting');
});

route::get('/merk',[MerkController::class,'index'])

route::get('/tipemobil',[TipeMobilController::class,'index']);
route::get('/tipemobil/create',[TipeMobilController::class,'create']);
route::get('/tipemobil/simpan-data',[TipeMobilController::class,'store']);
route::get('/tipemobil/edit/{id}',[TipeMobilController::class,'edit']);
route::get('/tipemobil/update/{id}',[TipeMobilController::class,'update']);
route::get('/tipemobil/delete/{id}',[TipeMobilController::class,'delete']);