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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:api')->get('/todos', function (Request $request) {
    return ["res"=>'test'];
});


/*
* Routes for ApiPublicController
*
*/
Route::group(['prefix'=>'/public'],function($route){
	
	$route->put("deals","ApiPublicController@createDeal")->name("public-createDeal");

	$route->put("calls","ApiPublicController@addCall")->name("public-addCall");
});



/*
* Routes for role admin
*
*/

Route::group(['prefix'=>'/api/'.config('defines.roles.SUPERVISOR')],function($route){
	$route->get("self","ApiController@self")->name("self");

	$route->get("deals","ApiController@getDeals")->name("getDeals");

	$route->put("deals","ApiController@createDeal")->name("createDeal");

	$route->get("deals/{id}","ApiController@getDeal")->name("getDeal");

	$route->post("deals","ApiController@updateDeal")->name("updateDeal");

	$route->delete("deals","ApiController@deleteDeal")->name("deleteDeal");

	$route->get("currencies","ApiController@getCurrencies")->name("getCurrencies");
});