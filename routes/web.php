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
* Routes for role supervisor
*
*/
Route::get('/supervisor/dashboard',"SupervisorController@index")->name('supervisor');



/*
* Routes for role manager
*
*/
Route::get('/manager/dashboard',"ManagerController@index")->name('manager');



/*
* Routes for role supervisor
*
*/

Route::group(['prefix'=>'/api/supervisor'],function($route){
	$route->get("self","SupervisorController@self")->name("supervisor-self");

	$route->get("deals","SupervisorController@getDeals")->name("supervisor-getDeals");

	$route->put("deals","SupervisorController@createDeal")->name("supervisor-createDeal");

	$route->get("deals/{id}","SupervisorController@getDeal")->name("supervisor-getDeal");

	$route->post("deals","SupervisorController@updateDeal")->name("supervisor-updateDeal");

	$route->delete("deals","SupervisorController@deleteDeal")->name("supervisor-deleteDeal");
});




/*
* Routes for role manager
*
*/

Route::group(['prefix'=>'/api/manager'],function($route){
	$route->get("self","ManagerController@self")->name("manager-self");

	$route->get("deals","ManagerController@getDeals")->name("manager-getDeals");

	$route->put("deals","ManagerController@createDeal")->name("manager-createDeal");

	$route->get("deals/{id}","ManagerController@getDeal")->name("manager-getDeal");

	$route->post("deals","ManagerController@updateDeal")->name("manager-updateDeal");

	$route->delete("deals","ManagerController@deleteDeal")->name("manager-deleteDeal");
});


/*
* Routes for ApiPublicController
*
*/

Route::group(['prefix'=>'/api/public'],function($route){
	$route->put("deals","ApiPublicController@createDeal")->name("public-createDeal");

	$route->put("calls","ApiPublicController@addCall")->name("public-addCall");
});