<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutPageController;

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

Route::controller(AboutPageController::class)->prefix('about')->name('about.')->group(function () {
    Route::get('/vision-mission', 'visionMission')->name('vision-mission');
    Route::get('/management', 'management')->name('management');
    Route::get('/proctorial-board', 'proctorialBoard')->name('proctorial-board');
    Route::get('/officer-incharge', 'officerIncharge')->name('officer-incharge');
    Route::get('/strategic-plan', 'strategicPlan')->name('strategic-plan');
    Route::get('/why-usi', 'whyUsi')->name('why-usi');
});
