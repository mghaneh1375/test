<?php

use App\Http\Controllers\IntroduceController;
use App\Http\Controllers\SlideController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::put('setAboutUs', [IntroduceController::class, 'setAboutUs'])->name('api.setAboutUs');

Route::put('updateIntroduce/{introduce?}', [IntroduceController::class, 'update'])->name('api.updateIntroduce');

Route::post('addIntroduce', [IntroduceController::class, 'store'])->name('api.addIntroduce');

Route::delete('removeIntroduce/{introduce?}', [IntroduceController::class, 'remove'])->name('api.removeIntroduce');


Route::post('addSlide', [SlideController::class, 'store'])->name('api.addSlide');

Route::delete('removeSlide/{slidebar?}', [SlideController::class, 'remove'])->name('api.removeSlide');

Route::put('updateSlider/{slidebar?}', [SlideController::class, 'update'])->name('api.updateSlide');