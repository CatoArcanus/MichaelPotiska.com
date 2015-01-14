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

Route::get ('/', array('as' => 'base', 'uses' => 'HomeController@base'));

// gallery group
Route::group (array('prefix' => 'gallery'), function() {	
	Route::get ('/', 			array( 'as' => 'gallery', 			'uses' => 'GalleryController@index'));
	Route::get ('/news', 		array( 'as' => 'gallery_news', 		'uses' => 'GalleryController@news'));
	Route::get ('/graphics', 	array( 'as' => 'gallery_graphics', 	'uses' => 'GalleryController@graphics'));
	Route::get ('/video', 		array( 'as' => 'gallery_video', 	'uses' => 'GalleryController@video'));
	Route::get ('/photoshop', 	array( 'as' => 'gallery_photoshop', 'uses' => 'GalleryController@photoshop'));
});	

Route::get ('/resume', 	array('as' => 'resume', 'uses' => 'HomeController@resume'));
