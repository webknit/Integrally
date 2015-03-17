<?php namespace App\Http\Controllers\Resources;

use App\Http\Controllers\Controller;

class ResourceController extends Controller {

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
	 * Show the resources overview.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('download');
	}
	
	/**
	 * Show a single resource.
	 *
	 * @return Response
	 */
	public function resource($slug)
	{
		return view('download-single');
	}


}
