<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Requests\ContactRequest;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [ContactController::class, 'index']);
Route::post('/contact/login', [ContactController::class, 'login']);
Route::get('/contact/login', [ContactController::class, 'login']);
Route::post('/contact/register', [ContactController::class, 'register']);
Route::get('/contact/register', [ContactController::class, 'register']);
Route::post('/contact/confirm', [ContactController::class, 'confirm']);
Route::get('/contact/confirm', [ContactController::class, 'confirm']);
