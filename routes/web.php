<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.register');
});

Auth::routes();


Route::get('/admin/home', 'AdminController@admin')->name('admin.home');  
Route::get('/admin/home/all/user', 'AdminController@all_member')->name('admin.all.member');  
Route::get('/admin/view/user/{id}', 'AdminController@show');  



// admin middleware and route 
// Route::group(['middleware' => ['auth','admin']], function () {
// });

// user middleware and route 
Route::group(['middleware' => ['auth','user']], function () {
    Route::get('/home', 'HomeController@index')->name('home'); 
    Route::get('/user-profile/{id}', 'UserController@profile_view'); 
    Route::get('/personal_info' , 'PersonalInfoController@index');
    Route::post('/user/addPersonalInfo' , 'PersonalInfoController@store')->name('user.personalInfo.add');
    
    Route::get('/educational_info' , 'EducationInfoController@index');
    Route::post('/user/addeducationalInfo' , 'EducationInfoController@store')->name('user.educationalInfo.add');

    Route::get('/experience_info' , 'ExperienceInfoController@index');
    Route::post('/user/addexperienceInfo' , 'ExperienceInfoController@store')->name('user.experienceInfo.add');


});


