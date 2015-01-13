<?php

class WebController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Web Controller
	|--------------------------------------------------------------------------
	|
	|
	*/

	public function index () {
		return View::make ('web/index');
	}

	public function resume()
	{
		return View::make('web/resume');
	}

}
