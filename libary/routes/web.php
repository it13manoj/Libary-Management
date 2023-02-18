<?php

use App\Http\Middleware\Admin;
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

Route::get('/', 'HomeController@index');

Route::get('create','HomeController@register')->name("create");

Route::get('wp-admin','SignupController@index')->name("wp-admin");

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::post('create','SignupController@register')->name("create");
    Route::post('login','SignupController@sign_in')->name("login");




    Route::middleware([Admin::class])->group(function () {
        Route::resources([
            'dashboard' => 'dashboard',
            'posts' => 'PostController'
        ]);

        Route::get('slider','AdminHomeController@slider')->name("slider");
        Route::get('charity','AdminHomeController@charity')->name("charity");
        Route::post('charity','AdminHomeController@charitySave')->name("charity");
        Route::get('secondSection','AdminHomeController@secondSection')->name("secondSection");
        Route::post('secondSection','AdminHomeController@secondSectionSave')->name("secondSection");
        Route::get('appeals','AdminHomeController@appeals')->name("appeals");
        Route::get('appeals/edit/{id}','AdminHomeController@appeals')->name("appeals");
        Route::get('appeals/delete/{id}','AdminHomeController@appealsdelt')->name("appeals");
        Route::get('mission','AdminHomeController@mission')->name("mission");
        Route::post('mission','AdminHomeController@missionSave')->name("mission");
        Route::post('appeals','AdminHomeController@appealsSave')->name("appeals");
        Route::get('about','AdminHomeController@about')->name("about");
        Route::post('about','AdminHomeController@aboutSave')->name("about");
        Route::get('contact','AdminHomeController@contact')->name("contact");
        Route::post('contact','AdminHomeController@contactSave')->name("contact");
        Route::get('addContact','AdminHomeController@addContact')->name("addContact");
        Route::get('addContact/edit/{id}','AdminHomeController@addContact')->name("addContact");
        Route::get('addContact/delete/{id}','AdminHomeController@deleteContact')->name("addContact");
        Route::post('addContact','AdminHomeController@addContactSave')->name("addContact");

        Route::get('events/add','AdminHomeController@addEvents')->name("events/add");
        Route::post('events/add','AdminHomeController@save')->name("events/add");
        Route::post('events/update/{id}','AdminHomeController@update')->name("events/update");
        Route::get('events','AdminHomeController@eventList')->name("events");
        Route::get('events/edit/{id}','AdminHomeController@editevent')->name("events/edit");
        Route::post('events/upload','AdminHomeController@upload')->name("events/upload");

        Route::get('cat/add','CategoriesController@add')->name("cat/add");
        Route::post('cat/add','CategoriesController@saveCat')->name("cat/add");
        Route::get('cat-list','CategoriesController@list')->name("cat-list");

        Route::get('organization/add','OriginationController@organizationAdd')->name("organization/add");
        Route::post('organization/add','OriginationController@save')->name("organization/add");
        Route::get('organization','OriginationController@organizationList')->name("organization");

        Route::post('saveSlider','AdminHomeController@saveSlider')->name("saveSlider");

        Route::get('cronJobs/{id}','AdminHomeController@cronJobs')->name("cronJobs");
    });

});


// Front End Temaplate

Route::get('about','AboutController@index')->name("about");
Route::get('upcoming-events','EventController@upcoming')->name("upcoming-events");
Route::get('past-events','EventController@past')->name("past-events");
Route::get('event-details/{id}','EventController@details')->name("event-details");
Route::get('contact','EventController@contact')->name("contact");

