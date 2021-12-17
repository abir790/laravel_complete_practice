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
//use Illuminate\support\Facades\Route; 

Route::get('/', function () {
    return view('welcome');
});
Route::get('userc','UserController@create');
Route::get('userc2','UserController@create2');
Route::get('ushow','UserController@show');
Route::get('ushow/{id}','UserController@show2');




Route::prefix('admin')->group(function(){

Route::get('pshow','PhotoController@show')->where('id','[0-9]');
Route::get('pshow/{id}','PhotoController@show2')->where('id','[0-9]');


		});
Route::get('photo/create','PhotoController@create');
Route::get('photoCreate','PhotoController@createP');





Route::get('UserCreate_from_vedioController','VedioController@create');
Route::get('vcreate2','VedioController@create2');
Route::get('vcreate3','VedioController@create3');
Route::get('vcreate4','VedioController@create4');
Route::get('vcreate5','VedioController@create5');
Route::get('vshow','VedioController@show');
Route::get('vshow/{id}','VedioController@show2');

Route::get('cr','VedioController@cr');

Route::get('vedio','VedioController@datapas')->name('nam');

Auth::routes();



Route::get('abir', function(){
	return "I m Ablr";
});

//Route::POST('p','PhotoController@p');
//Route::get('/p','PhotoController@p');
Route::get('p/{id}/edit','PhotoController@p');
//Route::get('photo/{id}','PhotoController@show'); //  route er id ta controller a jabe then controller dhore nibe
Route::get('sh/{id}/{email?}','PhotoController@sh');

//Route::redirect('vedio','cr'); ////////////...................remember it . vedio te gelei cr aredirect korbe

Route::get('login','Auth\loginController2@login')->name('login');
Route::POST('login','Auth\loginController2@check');
//Route::get('show','Auth\loginController2@show');
Route::get('logout','Auth\loginController2@logout');

//Route::get('s/create','studentController@create');
//Route::get('show','studentController@show');

//Route::get();........................................................................


//............session test
Route::get('teacher','teacherController@index')->middleware('profile2');
Route::get('teacher/create','teacherController@create');
Route::POST('teacher','teacherController@store');

Route::get('profile','profileController@profile');
Route::get('profile2','profile2Controller@profile2')->middleware('profile2');
Route::get('sd','profileController@sd');

//............session test1
Route::get('test1','sessionController@test1');
Route::get('test1_get','sessionController@test1_get');
Route::get('test1_forget','sessionController@test1_forget');
Route::get('test1_protect','sessionController@test1_protect');
//Route::get('test1_protect','studentController@test1_protect');


Route::get('food','foodController@index');
Route::get('food/create','foodController@create');
Route::post('food','foodController@store');
Route::get('food/{id}/show','foodController@show');
Route::get('food/{id}/edit','foodController@edit')->where('id','[0-9]');
Route::post('food/{id}/update','foodController@update');
Route::get('food/{id}/delete','foodController@delete');
// ai 7 ta route k ami 1 ta route a likhte pari ... Route::resource controller diye

Route::get('cat_store','categoryController@store');
Route::get('cat_show/{id}','categoryController@show');