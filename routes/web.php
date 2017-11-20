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

Route::get('/', 'MainController@index');
Route::get('view-clients', 'MainController@getClients');
#Route::get('apply-raffle', 'MainController@getApplyRaffle');
Route::post('apply-raffle', 'MainController@postApplyRaffle');

Route::get('e7bf9ef7933f.html', function(){
  return "ca0649980ab1";
});
