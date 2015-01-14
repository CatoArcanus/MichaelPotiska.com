<?php

class GalleryController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Gallery Controller
	|--------------------------------------------------------------------------
	|
	|	Route::get('/gallery/', 'GalleryController@index');
	|
	*/

	public function index()
	{
		return View::make('gallery/index');
	}
	
	/*

	public function graphics()
	{
		return View::make('gallery/graphics');
	}

	public function video()
	{
		return View::make('gallery/video');
	}

	public function photoshop()
	{
		return View::make('gallery/photoshop');
	}
	*/
}
