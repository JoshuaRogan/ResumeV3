<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PersonalController extends Controller {

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
	 * Basic personal information bage
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('personal');
	}

	/**
	 * Contact me page
	 *
	 * @return Response
	 */
	public function contact()
	{
		return view('contact');
	}

}
