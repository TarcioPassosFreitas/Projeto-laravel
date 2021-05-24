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

//Route::namespace(value('site'))->group(function (){
 //   Route::get( '/', 'App\Http\Controllers\FederationController@welcome');
//});

Route::get('/', 'App\Http\Controllers\FederationController@create');
Route::post('/', 'App\Http\Controllers\FederationController@store')->name('save_federation');

Route::get('/#paracadastro2', 'App\Http\Controllers\CompanyController@create');
Route::post('/search/General', 'App\Http\Controllers\FederationController@generalSearch')->name('search_general');

Route::post('/register/company', 'App\Http\Controllers\CompanyController@store')->name('save_company');
Route::post('/ecompJr', 'App\Http\Controllers\FederationController@ecompJr')->name('search_ecompJr');

Route::post('/login', 'App\Http\Controllers\CompanyController@login')->name('login_user');




Route::any('/company/search', 'App\Http\Controllers\CompanyController@search')->name('company_search');

Route::get('/register/federation', 'App\Http\Controllers\FederationController@create');




Route::get('/view/federation/{id}', 'App\Http\Controllers\FederationController@show');
Route::get('/view/company/{id}', 'App\Http\Controllers\CompanyController@show');

Route::get('/index', 'App\Http\Controllers\FederationController@index');

