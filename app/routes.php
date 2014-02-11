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

Route::get('users', function()
{
	 $users = User::all();
     return View::make('users')->with('users', $users);
});

Route::get('/authtest', array('before' => 'auth.basic', function()
{
    return View::make('hello');
}));

// Route group for API versioning
Route::group(array('prefix' => 'api/v1', 'before' => 'auth.basic'), function()
{
    Route::resource('url', 'UrlController');
	 Route::resource('question', 'QuestionController');
	  Route::resource('category', 'CategoryController');
	  Route::resource('subcategory', 'SubcategoryController');
});

// Api withouhtRoute group for API versioning
Route::group(array('prefix' => 'apin/v1'), function()
{
    Route::resource('url', 'UrlController');
	 Route::resource('question', 'QuestionController');
	  Route::resource('category', 'CategoryController');
	  Route::resource('subcategory', 'SubcategoryController');
});
 