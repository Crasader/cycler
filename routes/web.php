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


    Route::get('gettoken',function(){
        $response = (new GuzzleHttp\Client)->post('http://laracrm:8082/oauth/token', [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => 2, // Replace with Client ID
                'client_secret' => 'RD9nCmCKfCzFpvOSWrX5JvrKseTEMUAlyyph96z5', // Replace with client secret
                'username' => 'admin@admin.ru',
                'password' => 'secret',
                'scope' => '',
            ]
        ]);

        return json_decode((string) $response->getBody(), true);
    });




    Route::get('auth',function(){
        $response = (new GuzzleHttp\Client)->post('http://laracrm:8082/api/auth', [
            'form_params' => [
                'email' => 'admin@admin.ru',
                'password' => 'secret'
            ]
        ]);

        return json_decode((string) $response->getBody(), true);
    });

	// Route::get('/test', function () {
	//     $query = http_build_query([
	//             'client_id' => 13, // Replace with Client ID
	//             'redirect_uri' => 'http://laracrm:8082/callback',
	//             'response_type' => 'code',
	//             'scope' => ''
	//     ]);

	//     return redirect('http://laracrm:8082/oauth/authorize?'.$query);
	// });


	// Route::get('/callback', function (\Illuminate\Http\Request $request) {
        
        



 //        $response = (new GuzzleHttp\Client)->post('http://laracrm:8082/oauth/token', [
 //            'form_params' => [
 //                'grant_type' => 'authorization_code',
 //                'client_id' => 13, // Replace with Client ID
 //                'client_secret' => 'DvVxcbENj5iWTtJiGZScWiBZpG3YHgL5zqlatyzK', // Replace with client secret
 //                'redirect_uri' => 'http://laracrm:8082/callback',
 //                'code' => $request->code,
 //            ]
 //        ]);

 //        session()->put('token', json_decode((string) $response->getBody(), true));

 //        return redirect('/todos');
 //    });



 //    Route::get('/todos', function () {
 //        $response = (new GuzzleHttp\Client)->get('http://laracrm:8082/api/todos', [
 //            'headers' => [
 //                'Authorization' => 'Bearer '.session()->get('token.access_token')
 //            ]
 //        ]);
 //        return json_decode((string) $response->getBody(), true);
 //    });








Route::middleware(["hasntRole"])->get('/norole', function () {
    return view('auth.norole',['user'=>Auth::guard()->user()]);
})->name('norole');



//Route::get('/selectrole',"HomeController@selectrole")->name('selectrole');

Auth::routes();

Route::group(['prefix'=>'/admin/'],function($route){
	
	Route::get('/', 'SettingsController@index')->name('admin');

	Route::get('settings', 'SettingsController@settings')->name('settings');

	Route::get('roleuser',"SettingsController@showRoleForm")->name('roleUserForm');

	Route::post('roleuser',"SettingsController@saveRoleForm")->name('roleUserFormSubmit');
});





$regex = "^([0-9A-Za-z\-_\.]*)";

Route::get('/',"HomeController@index")->name('home');
Route::get('/home',"HomeController@index")->name('home');



//Временно для разработки

Route::group(['namespace'=>'Api'],function($route){
    $route->get("self","ApiDealController@self")->name("self");

    $route->get("deals","ApiDealController@getDeals")->name("getDeals");

    $route->put("deals","ApiDealController@createDeal")->name("createDeal");

    $route->get("deals/{id}","ApiDealController@getDeal")->name("getDeal");

    $route->post("deals/{id}","ApiDealController@updateDeal")->name("updateDeal");

    $route->delete("deals/{id}","ApiDealController@deleteDeal")->name("deleteDeal");

    $route->get("currencies","ApiCurrencyController@getCurrencies")->name("getCurrencies");
});