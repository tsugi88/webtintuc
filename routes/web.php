<?php
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
Route::get('tintuc/{so1}/{so2}',function($so1=NULL,$so2=NULL){
	$tong = $so1 + $so2;
	return $tong;
});
Route::group(['prefix'=>'admin'],function(){
	Route::get('home',function(){
		return 'Gethome';
	});
});
