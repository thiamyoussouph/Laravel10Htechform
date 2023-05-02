<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoutureController;

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
Route::get("/voitures", [VoutureController::class, 'index'])->name('voitures.index');
Route::get("/voitures/create", [VoutureController::class, 'create'])->name('voitures.create');
Route::post("/voitures", [VoutureController::class, 'store'])->name('voitures.store');