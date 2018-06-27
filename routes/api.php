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


/*
* Routes for ApiPublicController
*
*/
Route::group(['prefix'=>'/public'],function($route){
	
	$route->put("deals","ApiPublicController@createDeal")->name("public-createDeal");

	$route->put("calls","ApiPublicController@addCall")->name("public-addCall");
});


// Route::group(['prefix'=>'/supervisor'],function($route){
// 	$route->get("self","SupervisorController@self")->name("supervisor-self");

// 	$route->get("deals","SupervisorController@getDeals")->name("supervisor-getDeals");

// 	$route->put("deals","SupervisorController@createDeal")->name("supervisor-createDeal");

// 	$route->get("deals/{id}","SupervisorController@getDeal")->name("supervisor-getDeal");

// 	$route->post("deals","SupervisorController@updateDeal")->name("supervisor-updateDeal");

// 	$route->delete("deals","SupervisorController@deleteDeal")->name("supervisor-deleteDeal");
// });