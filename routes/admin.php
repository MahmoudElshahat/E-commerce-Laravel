<?php
use App\Http\Controllers\admin\LoginController;
use Illuminate\Support\Facades\Route;
use app\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use App\Http\Controllers\admin\categoriController;
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
###################### start admin login routes #################################
Route::group(['namespace'=>'admin','middleware' => 'guest:admin'], function () {
    Route::get('login', 'LoginController@getLogin')->name('get.admin.login');
    Route::post('login', 'LoginController@login')->name('admin.login');

    Route::get('backHome','LoginController@backhome')->name('backhome');

});// end adminlogin route
// ################## start admin Dashboard routes ######################
define('pagination_count',10);
Route::group(['namespace' => 'admin','middleware' => 'auth:admin'], function () {
    Route::get('/', 'dashboardController@index')->name('admin.dashboard');
    Route::get('logout','LoginController@logout')->name('logout');

// >>>>>>>>>>>>>>>>>>>>>>>> start language route <<<<<<<<<<<<<<
Route::group(['prefix'=>'languages'],function(){

    Route::get('/','languagesController@index')->name('admin.languages');

    Route::get('create','languagesController@create')->name('lang.create');

    Route::post('insert','languagesController@store')->name('lang.store');

    Route::get('edite/{id}','languagesController@edite')->name('admin.languages.edite');

    Route::GET('update/{id}','languagesController@update')->name('admin.languages.update');

    Route::GET('delete/{id}','languagesController@delete')->name('admin.languages.delete');

});// >>>>>> end language route <<<<<<<<<<<
// ################ start categori routes ##################33
Route::group(['prefix'=>'categori'],function(){
    Route::get('/','categoriController@index')->name('all.categori');

    Route::get('create','categoriController@create')->name('create.categori');

    Route::post('insert','categoriController@insert')->name('insert.categori');

    Route::get('edite/{id}','categoriController@edite')->name('edite.ctegori');

    Route::POST('update/{id}','categoriController@update')->name('update.categori');

    Route::get('delete/{id}','categoriController@delete')->name('delete.categori');

});// end categori route
// ############## starts items route #################################
Route::group(['prefix'=>'items'],function(){

Route::get('/','itemsController@index')->name('all.items');

Route::get('create','itemsController@create')->name('create.item');

Route::post('insert','itemsController@insert')->name('insert.item');

Route::get('edite/{id}','itemsController@edite')->name('edite.item');

Route::post('update/{id}','itemsController@update')->name('update.item');




});//end items route


});// end main group auth admin  <<<<<<<<<<<



###################   ####################


// Auth::routes();  ->>>Don't allow it <<<
