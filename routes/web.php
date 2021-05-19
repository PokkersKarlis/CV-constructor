<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CustomDataController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/add', [CvController::class, 'index']);
Route::delete('/delete/{id}', [CvController::class, 'destroy']);
Route::post('/store', [CvController::class, 'store'])->name('createCv');
Route::get('/edit/{id}', [CvController::class, 'edit'])->name('editCv');
Route::post('/edit/{id}', [CvController::class, 'update'])->name('updateCv');
Route::post('/address', [AddressController::class, 'store']);
Route::post('/address/{id}', [AddressController::class, 'update']);
Route::delete('/address/{id}', [AddressController::class, 'destroy']);
Route::post('/education', [EducationController::class, 'store']);
Route::post('/education/edit/{id}', [EducationController::class, 'update']);
Route::delete('/education/{id}', [EducationController::class, 'destroy']);
Route::post('/experience', [ExperienceController::class, 'store']);
Route::post('/experience/{id}', [ExperienceController::class, 'update']);
Route::delete('/experience/{id}', [ExperienceController::class, 'destroy']);
Route::post('/custom', [CustomDataController::class, 'store']);
Route::post('/custom/{id}', [CustomDataController::class, 'update']);
Route::delete('/custom/{id}', [CustomDataController::class, 'destroy']);
Route::get('/print/{id}', [HomeController::class, 'print']);
