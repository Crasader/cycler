<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/







Route::middleware(['auth:api','cors'])->get('/todos', function (Request $request) {
    return ["res"=>'test'];
});



Route::middleware(['cors'])->post('auth', 'Auth\AuthController@auth');


Route::middleware(['cors'])->post('auth/register', 'Auth\AuthController@register');



/*
* Routes for ApiPublicController
*
*/
Route::group(['prefix'=>'/public','namespace'=>'Api','middleware'=>['auth:api','cors']],function($route){
	
	$route->put("deals","ApiPublicController@createDeal")->name("public-createDeal");

	$route->put("calls","ApiPublicController@addCall")->name("public-addCall");

});



/*
* Routes for role admin
*
*/

Route::group(['namespace'=>'Api','middleware'=>['auth:api','cors']],function($route){
	

	/**
	* Users
	*/
	$route->get('users',"ApiUserController@getUsers")->name("getUsers")->middleware('permission:read:users');

	$route->get('users/{id}',"ApiUserController@getUser")->name("getUser")->middleware('permission:read:users');

	$route->get('user',"ApiUserController@getMe")->name("getMe");


	$route->post('users/{user_id}/roles/{role_id}',"ApiUserController@attachRole")->name("attachRole")->middleware('permission:create:users_roles|edit:users_roles');

	$route->delete('users/{user_id}/roles/{role_id}',"ApiUserController@detachRole")->name("detachRole")->middleware('permission:remove:users_roles');




	/**
	* Deals
	*/
	$route->get("deals","ApiDealController@getDeals")->name("getDeals")->middleware('permission:read:deals');

	$route->get("deals/{id}","ApiDealController@getDeal")->name("getDeal")->middleware('permission:read:deals');

	$route->put("deals","ApiDealController@createDeals")->name("createDeals")->middleware('permission:create:deals');

	$route->post("deals/{id}","ApiDealController@editDeals")->name("editDeals")->middleware('permission:edit:deals');

	$route->delete("deals/{id}","ApiDealController@removeDeals")->name("removeDeals")->middleware('permission:remove:deals');



	/*
	* Currencies
	* 
	*/
	$route->get("currencies","ApiCurrenciesController@getCurrencies")->name("getCurrencies")->middleware('permission:read:currencies');

	$route->get("currencies/{id}","ApiCurrenciesController@getCurrency")->name("getCurrency")->middleware('permission:read:currencies');

	$route->put("currencies","ApiCurrenciesController@createCurrencies")->name("createCurrencies")->middleware('permission:create:currencies');

	$route->post("currencies/{id}","ApiCurrenciesController@editCurrencies")->name("editCurrencies")->middleware('permission:edit:currencies');

	$route->delete("currencies/{id}","ApiCurrenciesController@removeCurrencies")->name("removeCurrencies")->middleware('permission:remove:currencies');




	/*
	* Pipelines
	* 
	*/
	$route->get("pipelines","ApiPipelinesController@getPipelines")->name("getPipelines")->middleware('permission:read:pipelines');

	$route->get("pipelines/{id}","ApiPipelinesController@getPipeline")->name("getPipeline")->middleware('permission:read:pipelines');

	$route->put("pipelines","ApiPipelinesController@createPipelines")->name("createPipelines")->middleware('permission:create:pipelines');

	$route->post("pipelines/{id}","ApiPipelinesController@editPipelines")->name("editPipelines")->middleware('permission:edit:pipelines');

	$route->delete("pipelines/{id}","ApiPipelinesController@removePipelines")->name("removePipelines")->middleware('permission:remove:pipelines');






	/*
	* Stages
	* 
	*/
	$route->get("stages","ApiStageController@getStages")->name("getStages")->middleware('permission:read:stages');

	$route->get("stages/{id}","ApiStageController@getStage")->name("getStage")->middleware('permission:read:stages');

	$route->put("stages","ApiStageController@createStages")->name("createStages")->middleware('permission:create:stages');

	$route->post("stages/{id}","ApiStageController@editStages")->name("editStages")->middleware('permission:edit:stages');

	$route->delete("stages/{id}","ApiStageController@removeStages")->name("removeStages")->middleware('permission:remove:stages');




	/*
	* Settings
	* 
	*/
	$route->get("settings","ApiSettingController@getSettings")->name("getSettings")->middleware('permission:read:settings');

	$route->get("settings/{id}","ApiSettingController@getSetting")->name("getSetting")->middleware('permission:read:settings');

	$route->put("settings","ApiSettingController@createSettings")->name("createSettings")->middleware('permission:create:settings');

	$route->post("settings/{id}","ApiSettingController@editSettings")->name("editSettings")->middleware('permission:edit:settings');

	$route->delete("settings/{id}","ApiSettingController@removeSettings")->name("removeSettings")->middleware('permission:remove:settings');


	/*
	* Events
	* 
	*/
	$route->get("events","ApiEventsController@getEvents")->name("getEvents")->middleware('permission:read:events');






	/*
	* Roles
	* 
	*/
	$route->get("roles","ApiRolesController@getRoles")->name("getRoles")->middleware('permission:read:roles');

	$route->get("roles/{id}","ApiRolesController@getRole")->name("getRole")->middleware('permission:read:roles');

	$route->put("roles","ApiRolesController@createRoles")->name("createRoles")->middleware('permission:create:roles');
	
	$route->post("roles/{id}","ApiRolesController@editRoles")->name("editRoles")->middleware('permission:edit:roles');
	
	$route->delete("roles/{id}","ApiRolesController@removeRoles")->name("removeRoles")->middleware('permission:remove:roles');



	/*
	* Roles permissions
	* 
	*/
	$route->post("roles/{role_id}/permissions","ApiRolesController@addPermissions")->name("role_add_permissions")
	->middleware('permission:create:roles_permissions');
	
	$route->post("roles/{role_id}/permissions/{permission_id}","ApiRolesController@attachPermissions")->name("attachPermissions")
	->middleware('permission:edit:roles_permissions');

	$route->delete("roles/{role_id}/permissions/{permission_id}","ApiRolesController@deletePermissions")->name("role_delete_permissions")
	->middleware('permission:remove:roles_permissions');




	/*
	* Permissions
	* 
	*/
	$route->get("permissions","ApiPermissionsController@getPermissions")->name("getPermissions")->middleware('permission:read:permissions');
	$route->get("permissions/{id}","ApiPermissionsController@getPermission")->name("getPermission")->middleware('permission:read:permissions');
	$route->put("permissions","ApiPermissionsController@createPermissions")->name("createPermissions")->middleware('permission:create:permissions');
	$route->post("permissions/{id}","ApiPermissionsController@editPermissions")->name("editPermissions")
	->middleware('permission:edit:permissions');
	$route->delete("permissions/{id}","ApiPermissionsController@removePermissions")->name("removePermissions")
	->middleware('permission:remove:permissions');





	/*
	* Custom Fields
	* 
	*/
	$route->get("fields","ApiFieldsController@getFields")->name("getFields")->middleware('permission:read:fields');

	$route->get("fields/{id}","ApiFieldsController@getField")->name("getField")->middleware('permission:read:fields');

	$route->put("fields","ApiFieldsController@createFields")->name("createFields")->middleware('permission:create:fields');

	//$route->post("fields/{id}/rename","ApiFieldsController@editFields")->name("editFields")->middleware('permission:edit:fields');

	$route->delete("fields/{id}","ApiFieldsController@removeFields")->name("removeFields")->middleware('permission:remove:fields');
});