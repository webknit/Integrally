<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

	public function phonebookSingle()
	{
		$people = [
			[
				'name' => 'Shane Prendergast',
				'role' => 'Web developer'
			],
			[
				'name' => 'Jordan Lane',
				'role' => 'Web developer'
			],
			[
				'name' => 'Timmy',
				'role' => 'Artist'
			]

		];
		$data = ['people' => $people];
		return view('phonebook-single')->with($data);
	}

	public function phonebook()
	{
		return view('phonebook');
	}

}
