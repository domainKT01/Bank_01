<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;
use App\Http\Controllers\patientController;

use App\Http\Controllers\pagesController;

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
    return view('dashboard');
});

Route::get('/dashboard', pagesController::class, 'Dashboard')->name('dashboard');

Route::get('parametros', pagesController::class, 'compare')->name('parametros');

Route::get('pacientes', pagesController::class, 'insertPatient')->name('pacientes');

Route::post('forms', [formController::class, 'store'])->name('forms');

Route::post('patientForms', [patientController::class, 'store'])->name('patientForms');

Route::get('data', function(){

    return view('response-table');
});