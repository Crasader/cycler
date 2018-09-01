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


// Route::get('auth',function(){
//     $response = (new GuzzleHttp\Client)->post('http://laracrm:8082/api/auth', [
//         'form_params' => [
//             'email' => 'admin@admin.ru',
//             'password' => 'secret'
//         ]
//     ]);

//     return json_decode((string) $response->getBody(), true);
// });

    

// Route::get('test',function(){

//     $response = (new GuzzleHttp\Client)->get('http://laracrm:8082/api/deals', [
        
//         'headers'=>[
//             'content-type'=>"application/json",
//             'Authorization'=> "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImFjYmE3NmM4MzU5ZGExNWIzZGQwMTM2NjdlZDFiMDI4MzViNzY0NDJiODc1OWY2NDQ5MmI2ZmJkMTY4NDNlM2U3MzFmYTYzZjIwMTFjYTZmIn0.eyJhdWQiOiIxIiwianRpIjoiYWNiYTc2YzgzNTlkYTE1YjNkZDAxMzY2N2VkMWIwMjgzNWI3NjQ0MmI4NzU5ZjY0NDkyYjZmYmQxNjg0M2UzZTczMWZhNjNmMjAxMWNhNmYiLCJpYXQiOjE1MzI2ODE5MjYsIm5iZiI6MTUzMjY4MTkyNiwiZXhwIjoxNTY0MjE3OTI2LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.E78KhIUvDtA2PDGlKM0CO2MpodmG4dN2RivSbi0LF4DdKuaJFbuZgXekHIJwtpY0hpVl6Ux-1Mn7NYiqLsnqsuO0COLvGWJQTHO2PdPbIMXftDmA3FBstSolp9eE-p9rTQisNbIchQMzQUs5PDT8gRJY1OFuYhPkKCKEHe7PN1fKq9VtY_Ql1cx14g4p8Oc6njhpFsEYJmNLnWCgvsCzLjwcysWNoNVN2YBrTeZ3ZzhYAINCYklUrL7a86cvAGS2uTxWOl3tvvcag71RHXv6FB5R0f82mvgcMRBIgROVBu6XzPOY93hChMZqFkR7_LpYcoWulmMkyppFhsP92hRJDN9e1xPaOHIkTxp4pJiUTm1TqF1C-Dt61yMgVJBpAzjKaPWyl2xop7GNTsd_IcpPtrQWPRSXXTMUwLZgYCHbE0vuj0CfcES0_xkKmieGchDbNFal814tKgUvF-eaLy86CAGzHfMUzzEZz_8arxxxpEm2Sr-Y3wbAlJePvn2UrNb1ScK6cVmQSXhGHgYfQXksXsvNWSQLsZmAsyKxMkmQBMi10tA5xNkBuVyqE4Qpmd6kRNm6bUGbCuS22ndOluVSv52txjRJRtSH75w9ipOFd-JXuisPaeiXR3rk6cGJ8GSK8la0z6QDruyOmg1IMppy_tVa-zJVmiT5EcO8E11czNM"
//         ]
//     ]);

//     return json_decode((string) $response->getBody(), true);
// });



    

	





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