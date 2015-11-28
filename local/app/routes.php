<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
{
	
	return View::make('hello');
});

/*Route::get('/home', array('https', function()
{
    $url = URL::to('home');
	return View::make('home');
}));*/
Route::post('/', function()
{
	
	return View::make('hello');
});
Route::get('/home', function()
{

	return View::make('home');
});


Route::get('location','HomeController@location');
Route::post('location','HomeController@locationSave');

Route::get('/login/fb/', 'LoginFacebookController@login');
Route::get('/login/fb/callback', 'LoginFacebookController@callback');


Route::get('home', 'HomeController@home');

Route::get('products','HomeController@listOfCakes');

//Route::get('singlepageSeller','HomeController@listOfSellers');
Route::get('viewProducts/{fbId}','HomeController@viewProducts');

//Route::get('myaccount','HomeController@listOfOrderedCakes');
Route::get('myaccount','HomeController@myaccount');
//Route::get('orderPane','HomeController@orderPane');

Route::get('orderTab','CakeController@orderTab');
Route::post('order/{id}','CakeController@order');
Route::get('addCake','CakeController@addCake');
Route::post('addCake','CakeController@saveCake');
Route::post('saveToppers','CakeController@saveToppers');
Route::post('saveDesign','CakeController@saveDesign');
Route::post('saveBorders','CakeController@saveBorders');
Route::get('updateCake/{id}', 'CakeController@editCake');
Route::post('updateCake','CakeController@updateCake');
Route::get('delete/{id}', 'CakeController@delete');
Route::get('cancelOrder/{id}', 'CakeController@cancelOrder');
Route::get('delivered/{id}', 'CakeController@delivered');



// Route::get('logoutUser', function()
// {
// 	return Redirect::to('/home');
// });
Route::get('logout','LoginFacebookController@logout');

// Route::get('fuck', function(){
// 	var_dump($_SESSION);
// });


//CAKE MODEL CREATE

Route::get('Display', function(){
	 Helper::Display();
});

Route::post('createCake','CakeController@createCake');
Route::get('updateCakeModel','CakeController@updateCakeModel');
Route::get('updateCakeModelOrder','CakeController@updateCakeModelOrder');
Route::get('editModeltoOrder','CakeController@editModeltoOrder');



Route::get('addItemCakeModel','CakeController@addItemCakeModel');
Route::get('fuck', 'CakeController@fuck');
Route::post('findLayer', 'CakeController@findLayer');
Route::post('findLayer2', 'CakeController@findLayer2');

Route::post('/savePrintscreen', 'CakeController@savePrintscreen');
Route::post('/saveUpdateCakeModelAndPrintscreen', 'CakeController@saveUpdateCakeModelAndPrintscreen');

Route::post('/deleteLayer', 'CakeController@deleteLayer');
Route::get('/addItemColor','CakeController@addItemColor');
Route::get('/actionTo','CakeController@actionTo');