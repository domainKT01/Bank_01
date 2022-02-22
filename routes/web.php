<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;
use App\Http\Controllers\patientController;
use App\Http\Livewire\Compare;
use App\Http\Livewire\Dashboard;
use App\Http\livewire\insertPatient;

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

Route::get('/dashboard', Dashboard::class)->name('dashboard');

Route::get('/parametros', Compare::class)->name('parametros');

Route::get('/pacientes', insertPatient::class)->name('pacientes');

Route::post('forms', [formController::class, 'store'])->name('forms');

Route::post('patientForms', [patientController::class, 'store'])->name('patientForms');

Route::get('data', function(){

    return view('response-table');
});
