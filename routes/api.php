<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\mainCategoryController;
// use Illuminate\Support\Facades\Route;
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

Route::group(['middleware'=> ['api','checkAdmin_token','check_pass','change_lang'],'namespace'=>'App\Http\Controllers\api'],function(){
    Route::post('send','mainCategoryController@index');
    Route::post('get_category_byid','mainCategoryController@get_cate_byid');
    Route::post('update_data','mainCategoryController@change_status');
});
// ########### admin-Api route ####################
// Route::group(['middleware'=>['api',,'checkAdmin_token'],'namespace'=>'api'],function(){

// });
// ###############
// Auth::routes();
