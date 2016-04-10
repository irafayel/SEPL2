<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\User;

/*Route::get('/', function () {
    return View::make('view2', array('name' =>'Raf'));
});*/





/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	Route::get('view1', array('as' => 'view1', 'uses' => 'PageController@product1') );

	Route::get('welcome', function()
	{
		return View::make('welcome');
	});

	/*Route::get('categories', function()
    {
        return View::make('categories');
    });*/

	Route::get('404', function()
	{
		return View::make('404');
	});

	Route::get('index', function()
	{
		return View::make('index');
	});

	Route::get('mainmenu', function()
	{
		return View::make('mainmenu');
	});

	Route::get('view2', function()
	{
		return View::make('view2');
	});

	Route::get('users',function(){

		User::create([
			"name" => "Name1",
			"email" => "abc123@email.com",
			"password" => bcrypt("password")
		]);

		return User::all();
	});

	Route::get('test2', function(){
		return view('test2');
	});

	/*Route::get('category', function(){
        return view('category');
    });

    Route::get('addcat', function(){
        return view('addcat');
    });*/

	Route::post('test2/save', 'PageController@save');

	Route::get('test2/list', 'PageController@tablelist');

	Route::get('test/list', 'PageController@testlist');

	Route::get('test', function(){
		return view('test');
	});

	Route::post('category/do-upload', 'PageController@doImageUpload');

	Route::post('category/save', 'PageController@savecat');

	Route::post('category/update/{id}', 'PageController@updatecat');

	Route::get('addcat/list', 'PageController@catlist');

	Route::get('category/view/{id}', 'PageController@viewcat');

	Route::get('category/view-cat/{id}', 'PageController@viewcat2');

	Route::get('categories', 'PageController@catload');

	Route::get('category/delete/{id}', 'PageController@deletecat');

	Route::get('image/delete/{id}', 'PageController@deleteimage');

	Route::get('/', function(){
		return view('index');
	});

	Route::get('/admin', function(){
		return view('adminindex');
	});

	Route::get('/temp', function(){
		return view('tempindex');
	});
});
