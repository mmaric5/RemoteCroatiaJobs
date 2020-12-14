<?php

use Illuminate\Support\Facades\Route;
namespace App\Http\Controllers;

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

Route::resource('ads', AdsController::class);
Route::resource('category', CategoryController::class);
Route::resource('cities', CitiesController::class);
Route::resource('companies', CompaniesController::class);
Route::resource('continent', ContinentController::class);
Route::resource('country', CountryController::class);
Route::resource('drivingLicense', DrivingLicenseController::class);
Route::resource('language', LanguageController::class);
Route::resource('qualification', QualificationController::class);
Route::resource('regions', RegionsController::class);
Route::resource('typeOfWorks', TypeOfWorksController::class);
Route::resource('user', UserController::class);

