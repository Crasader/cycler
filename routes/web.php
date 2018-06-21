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

Route::get('/',"HomeController@index")->name('home');

Route::middleware(["auth","hasntRole:supervisor|manager"])->get('/norole', function () {
    return view('auth.norole',['user'=>Auth::guard()->user()]);
})->name('norole');


Route::get('/selectrole',"HomeController@selectrole")->name('selectrole');

Route::get('/roleuser',"SettingsController@showRoleForm")->name('roleUserForm');

Route::post('/roleuser',"SettingsController@saveRoleForm")->name('roleUserFormSubmit');

Auth::routes();


/*
* Routes for roles
*
*/
Route::get('/supervisor/dashboard',"SupervisorController@index")->name('supervisor');

Route::get('/manager/dashboard',"ManagerController@index")->name('manager');

