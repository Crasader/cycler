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


Route::post('auth', 'Auth\AuthController@auth');




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



	/*
	* Currencies
	* 
	*/
	$route->get("currencies","ApiCurrencyController@getCurrencies")->name("getCurrencies");

	$route->get("currency/{id}","ApiCurrencyController@getCurrency")->name("getCurrency");

	$route->put("currency","ApiCurrencyController@createCurrency")->name("createCurrency");

	$route->post("currency/{id}","ApiCurrencyController@updateCurrency")->name("updateCurrency");

	$route->delete("currency/{id}","ApiCurrencyController@deleteCurrency")->name("deleteCurrency");




	/*
	* Pipelines
	* 
	*/
	$route->get("pipelines","ApiPipelinesController@getPipelines")->name("getPipelines");

	$route->get("pipelines/{id}","ApiPipelinesController@getPipeline")->name("getPipeline");

	$route->put("pipelines","ApiPipelinesController@createPipeline")->name("createPipeline");

	$route->post("pipelines/{id}","ApiPipelinesController@updatePipeline")->name("updatePipeline");

	$route->delete("pipelines/{id}","ApiPipelinesController@deletePipeline")->name("deletePipeline");






	/*
	* Pipelines
	* 
	*/
	$route->get("stages","ApiStageController@getStages")->name("getStages");

	$route->get("stages/{id}","ApiStageController@getStage")->name("getStage");

	$route->put("stages","ApiStageController@createStage")->name("createStage");

	$route->post("stages/{id}","ApiStageController@updateStage")->name("updateStage");

	$route->delete("stages/{id}","ApiStageController@deleteStage")->name("deleteStage");




	/*
	* Custom Fields
	* 
	*/
	$route->get("fields","ApiFieldsSchemaController@getFields")->name("getFields");

	$route->get("fields/{id}","ApiFieldsSchemaController@getField")->name("getField");

	$route->put("fields","ApiFieldsSchemaController@createField")->name("createField");

	//$route->post("fields/{id}/rename","ApiFieldsSchemaController@updateField")->name("updateField");

	$route->delete("fields/{id}","ApiFieldsSchemaController@deleteField")->name("deleteField");
});