<?php namespace App\Http\Controllers\Profiles;

use App\Http\Controllers\Controller;
use App\Models\Profile;

class ProfileController extends Controller {

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
		$data['profiles'] = Profile::all();
		return view('profiles.index')->with($data);
	}

	public function profile($slug)
	{
		$data['profile'] = Profile::where('slug', $slug)->first();
		$data['profile']->name = $data['profile']->first_name . " " . $data['profile']->last_name;
		return view('profiles.profile')->with($data);
	}

	public function profileEdit()
	{
		return view('profiles.edit-profile');
	}

	public function group($slug)
	{
		$data = ['slug' => $slug];
		return view('profiles.group')->with($data);
	}


}
