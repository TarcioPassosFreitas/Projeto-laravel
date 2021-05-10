<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FederationController;
use App\Models\Federation;
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

Route::get('/federations', [FederationController::class, 'index']);
Route::get('/federation/create', [FederationController::class, 'create']);
Route::post('/federation/new', [FederationController::class, 'store']);
Route::post('/federation/find/id', [FederationController::class, 'search']);
Route::get('/company/create', [CompanyController::class, 'create']);
Route::post('/company/new', [CompanyController::class, 'store']);
Route::post('/company/find/id', [CompanyController::class, 'search']);

