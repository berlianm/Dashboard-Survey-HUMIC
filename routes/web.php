<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SurveyController;

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


Route::get('/', [LoginController::class,'index']);
Route::post('/roleDosen', [SurveyController::class,'roleDosen']) ->name('survey.roleDosen');
Route::post('/roleMahasiwa', [SurveyController::class,'roleMahasiswa']) ->name('survey.roleMahasiswa');
Route::post('/roleTamu', [SurveyController::class,'roleTamu']) ->name('survey.roleTamu');
Route::post('/survey', [SurveyController::class,'index'])->name('survey.index');
Route::post('/surveyrev', [SurveyController::class,'indexrev'])->name('survey.indexrev');
Route::post('/quiz', [SurveyController::class,'quiz'])->name('survey.quiz');
Route::post('/answer', [SurveyController::class,'answer'])->name('survey.answer');
Route::post('/getid', [SurveyController::class,'getid'])->name('survey.getid');
Route::post('/chartrev/', [SurveyController::class,'chartrev'])->name('survey.chartrev');

Route::get('/chart/{id}', [SurveyController::class,'chart'])->name('survey.chart');



Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cleared!";
});
