<?php

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

//Route::get('/', function () {
//    return view('pages.home');
//});

Route::get('/', 'CompanyController@search');

Route::get('/all-companies', 'CompanyController@allCompanies');

Route::get('/company/{company}', 'CompanyController@oneCompany');

Route::get('/add', 'CompanyController@addCompany');
Route::post('/store-company', 'CompanyController@storeCompany');

Route::get('/edit/{company}', 'CompanyController@editCompany');
Route::post('/store-update/{company}', 'CompanyController@updateCompany');

Route::get('/delete/{company}', 'CompanyController@delete');

Auth::routes();


//Logout

Route::get('/logout', 'LoginController@logout');
