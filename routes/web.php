<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;

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

Route::controller(ProjetController::class)->group(function () {

    Route::get('/', 'index');
    Route::get('/projet/create', 'create');
    Route::get('/projet/{id}', 'show');
    Route::get('/projet/{id}/edit', 'edit');


    Route::post('/projet', 'store');
    Route::patch('/projet/{id}', 'update');
    Route::delete('/projet/{id}', 'destroy');
});
