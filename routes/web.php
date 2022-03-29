<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SearchController;

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

//Route::view('/', 'exp');
Route::get('/', [HomeController::class, 'index']);

Route::get('/', [HomeController::class, 'index']);
Route::get('search', [SearchController::class, 'index']);

Route::get('programs', [ProgramController::class, 'index']);
Route::get('programs/{id}', [ProgramController::class, 'show']);
Route::get('programs/{id}/institutions', [ProgramController::class, 'institutions']);

Route::get('institutions', [InstitutionController::class, 'index']);
Route::get('institutions/by-location', [InstitutionController::class, 'bylocation']);
Route::get('institutions/by-program', [InstitutionController::class, 'byprogram']);
Route::get('institutions/ranking', [InstitutionController::class, 'ranking']);
Route::get('institutions/{id}', [InstitutionController::class, 'show']);
Route::get('institutions/{id}/courses', [InstitutionController::class, 'programs']);


Route::view('/blog', 'exp');
Route::view('/studyabroad', 'exp');
Route::view('/jealousguy', 'exp');









