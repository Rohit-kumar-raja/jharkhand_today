<?php

use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\SitesettingController;
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

// gettting the data of news
Route::get('slider', [NewsController::class, 'slider']);
Route::get('news_category', [NewsController::class, 'news_category']);
Route::get('news', [NewsController::class, 'news']);
Route::get('cateogry_news/{category}', [NewsController::class, 'cateogry_news']);
Route::get('news_image/{product_id}', [NewsController::class, 'news_image']);
Route::get('news_list/{category}', [NewsController::class, 'news_list']);
Route::get('news_detail/{slug}', [NewsController::class, 'news_detail']);

// news data end

// Sete setting start
Route::get('site/setting/{slug}', [SitesettingController::class, 'index']);
Route::get('site/info', [SitesettingController::class, 'site_info']);



// site setting end
