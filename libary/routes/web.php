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
    return view('auth.login');
});

Auth::routes();

Route::get(md5('dashboard'), 'HomeController@index')->name(md5('dashboard'));
Route::get(md5('UserClass'), 'ManagementController@UserClass')->name(md5('UserClass'));
Route::get(md5('addClass'), 'ManagementController@addClass')->name(md5('addClass'));
Route::post(md5('SaveClass'), 'ManagementController@SaveClass')->name(md5('SaveClass'));
Route::get(md5('UserBook'), 'ManagementController@UserBook')->name(md5('UserBook'));
Route::get(md5('addBooks'), 'ManagementController@addBooks')->name(md5('addBooks'));
Route::post(md5('SaveBook'), 'ManagementController@SaveBook')->name(md5('SaveBook'));
Route::get(md5('ViewBook'), 'ManagementController@ViewBook')->name(md5('ViewBook'));
Route::get(md5('SubjectList'), 'ManagementController@SubjectList')->name(md5('SubjectList'));
Route::get(md5('addSubject'), 'ManagementController@addSubject')->name(md5('addSubject'));
Route::post(md5('SaveSubject'), 'ManagementController@SaveSubject')->name(md5('SaveSubject'));
Route::post(md5('GetClass'), 'ManagementController@GetClass')->name(md5('GetClass'));
Route::post(md5('GetBooks'), 'ManagementController@GetBooks')->name(md5('GetBooks'));
Route::get(md5('UserList'), 'ManagementController@UserList')->name(md5('UserList'));
Route::get(md5('addUsers'), 'ManagementController@addUsers')->name(md5('addUsers'));
Route::post(md5('SaveUsers'), 'ManagementController@SaveUsers')->name(md5('SaveUsers'));
