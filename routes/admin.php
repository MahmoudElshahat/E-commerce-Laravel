<?php
use App\Http\Controllers\admin\LoginController;
use Illuminate\Support\Facades\Route;
use app\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Admin;
###############3
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\languagesController;

// use app\http\Requests\loginRequests;
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
// ################## start admin Dashboard routes ######################
define('pagination_count',10);
Route::group(['namespace' => 'admin','middleware' => 'auth:admin'], function () {
    Route::get('/', 'dashboardController@index')->name('admin.dashboard');

// >>>>>> start language route <<<<<<<<<<<<<<
Route::group(['prefix'=>'languages'],function(){
    Route::get('/','languagesController@index')->name('admin.languages');
    Route::get('create','languagesController@create')->name('lang.create');
    Route::post('insert','languagesController@store')->name('lang.store');
    Route::get('edit/{id}','languagesController@edit')->name('lang.edite');
    Route::post('update/{id}','languagesController@update')->name('lang.update');
});
   
}
// >>>>>> end language route <<<<<<<<<<<<<<<<<



);

####################### start admin login routes #################################
Route::group(['namespace'=>'admin','middleware' => 'guest:admin'], function () {
    Route::get('login', 'LoginController@getLogin')->name('get.admin.login');
    Route::post('login', 'LoginController@login')->name('admin.login');
    
    Route::get('backHome','LoginController@backhome')->name('backhome');

});   
###################   ####################


// Auth::routes();  ->>>Don't allow it <<<