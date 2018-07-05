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
Route::group(['prefix'=>'/public','namespace'=>'Api'],function($route){
	
	$route->put("deals","ApiPublicController@createDeal")->name("public-createDeal");

	$route->put("calls","ApiPublicController@addCall")->name("public-addCall");
});



/*
* Routes for role admin
*
*/

Route::group(['namespace'=>'Api'],function($route){
	$route->get("self","ApiSelfController@self")->name("self");

	$route->get("deals","ApiDealController@getDeals")->name("getDeals");

	$route->put("deals","ApiDealController@createDeal")->name("createDeal");

	$route->get("deals/{id}","ApiDealController@getDeal")->name("getDeal");

	$route->post("deals/{id}","ApiDealController@updateDeal")->name("updateDeal");

	$route->delete("deals/{id}","ApiDealController@deleteDeal")->name("deleteDeal");

	$route->get("currencies","ApiCurrencyController@getCurrencies")->name("getCurrencies");
});