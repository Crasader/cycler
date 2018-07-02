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
Route::get('/home',"HomeController@index")->name('home');


Route::middleware(["hasntRole"])->get('/norole', function () {
    return view('auth.norole',['user'=>Auth::guard()->user()]);
})->name('norole');

$regex = "^([0-9A-Za-z\-_\.]*)";

Route::get('/selectrole',"HomeController@selectrole")->name('selectrole');

Route::get('/roleuser',"SettingsController@showRoleForm")->name('roleUserForm');

Route::post('/roleuser',"SettingsController@saveRoleForm")->name('roleUserFormSubmit');

Auth::routes();


/*
* Routes for role admin
*
*/
Route::prefix("view/".config('defines.roles.SUPERVISOR'))->get('/dashboard/{regex}',"AdminController@index")->where("regex",$regex)->name(config('defines.roles.SUPERVISOR'));
Route::prefix("view/".config('defines.roles.SUPERVISOR'))->get('/dashboard',"AdminController@index")->name(config('defines.roles.SUPERVISOR'));



/*
* Routes for role manager
*
*/
Route::prefix("view/".config('defines.roles.MANAGER'))->get('/dashboard/{regex}',"ManagerController@index")->where("regex",$regex)->name(config('defines.roles.MANAGER'));
Route::prefix("view/".config('defines.roles.MANAGER'))->get('/dashboard',"ManagerController@index")->name(config('defines.roles.MANAGER'));


/*
* Routes for role manager
*
*/
Route::prefix("view/".config('defines.roles.OPERATOR'))->get('/dashboard/{regex}',"ManagerController@index")->where("regex",$regex)->name(config('defines.roles.OPERATOR'));
Route::prefix("view/".config('defines.roles.OPERATOR'))->get('/dashboard',"ManagerController@index")->name(config('defines.roles.OPERATOR'));



/*
* Routes for role admin
*
*/

Route::group(['prefix'=>'/api/'.config('defines.roles.SUPERVISOR')],function($route){
	$route->get("self","AdminController@self")->name("admin-self");

	$route->get("deals","AdminController@getDeals")->name("admin-getDeals");

	$route->put("deals","AdminController@createDeal")->name("admin-createDeal");

	$route->get("deals/{id}","AdminController@getDeal")->name("admin-getDeal");

	$route->post("deals","AdminController@updateDeal")->name("admin-updateDeal");

	$route->delete("deals","AdminController@deleteDeal")->name("admin-deleteDeal");

	$route->get("currencies","AdminController@getCurrencies")->name("admin-getCurrencies");
});




/*
* Routes for role manager
*
*/

Route::group(['prefix'=>'/api/'.config('defines.roles.MANAGER')],function($route){
	$route->get("self","ManagerController@self")->name("manager-self");

	$route->get("deals","ManagerController@getDeals")->name("manager-getDeals");

	$route->put("deals","ManagerController@createDeal")->name("manager-createDeal");

	$route->get("deals/{id}","ManagerController@getDeal")->name("manager-getDeal");

	$route->post("deals","ManagerController@updateDeal")->name("manager-updateDeal");

	$route->delete("deals","ManagerController@deleteDeal")->name("manager-deleteDeal");
});




/*
* Routes for role operator
*
*/

Route::group(['prefix'=>'/api/'.config('defines.roles.OPERATOR')],function($route){
	$route->get("self","ManagerController@self")->name("operator-self");

	$route->get("deals","ManagerController@getDeals")->name("operator-getDeals");

	$route->put("deals","ManagerController@createDeal")->name("operator-createDeal");

	$route->get("deals/{id}","ManagerController@getDeal")->name("operator-getDeal");

	$route->post("deals","ManagerController@updateDeal")->name("operator-updateDeal");

	$route->delete("deals","ManagerController@deleteDeal")->name("operator-deleteDeal");
});


