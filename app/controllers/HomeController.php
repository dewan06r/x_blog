<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome() {
		return View::make('pages.home');
	}

	public function add_student() {
		return View::make('pages.add');
	}

	public function edit_student() {
		return View::make('pages.edit');
	}

	public function show_student() {
		return View::make('pages.show');
	}

	public function delete_student() {
		return View::make('pages.delete');
	}

	public function edit_specific_student() {
		return View::make('pages.edit_specific');
	}

	public function delete_specific_student() {
		return View::make('pages.delete');
	}

	public function block_specific_student() {
		return View::make('pages.show');
	}

}
